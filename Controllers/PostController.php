<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\UtilisateurModel;
use App\Libraries\hash;
use CodeIgniter\HTTP\Request;

class PostController extends BaseController
{
    
    public function index()
    {
        return view("index");
    }
    public function post()
    {
        return view("Upload");
    }
    
    //handle new post add jax request
    public function add(){
        $file = $this->request->getFile('myfile');
        $imge = $this->request->getFile('file');
        $filename = $file->getRandomName();
        $imagename = $imge->getRandomName();
         $data = [
            'ID'=>'vd21',
            'Title' => $this->request->getPost('title'),
            'Image' => $imagename,
            'Video' => $filename,
            'Categorie' => 'ct2',
            'Body' => $this->request->getPost('body'),
            'User'=> 'us2',
            'Genre'=> 'gr3',
            'Visible'=> false
        ];
        $postModel = new \App\Models\PostModel();
        $postModel->insert($data); 
        $file->move('Videos', $filename);
        $imge->move('Thumbnails',$imagename); 
        return $this->response->setJSON([
            'error'=>false,
            'message'=>"Insert Success",
        ]); 
    }
    //handle fecth all post ajax request
    public function fetch(){
        $postModel = new \App\Models\PostModel();
        $posts= $postModel->findAll();
        $data = '';
        if($posts){
            foreach($posts as $posts){
                $data .= '<div class="col-md-4">
                        <div class="card shadow-sm">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#detail_post_modal" id="'.$posts['ID'].'" class="post_detail_btn"><img src="Thumbnails/'.$posts['Image'].'" width="100%" height="300" /></a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-title fs-5 fw-bold">'.$posts['Title'].'</div>
                                    <div class="badge bg-dark">'.$posts['Categorie'].'</div>
                                </div>
                                <p>
                                '. substr($posts['Body'], 0, 80) .'...
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <div class="fst-italic">'. date('d F Y', strtotime($posts['Created_at'])) .'</div>
                                <div>
                                    <a href="#" id="'.$posts['ID'].'" class="btn btn-success btn-sm post_edit_btn" data-bs-toggle="modal" data-bs-target="#edit_post_modal">Edit</a>
                                    <a href="#" id="'.$posts['ID'].'" class="btn btn-danger btn-sm post_delete_btn">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            return $this->response->setJSON([
                'error'=>false,
                'message'=>$data
            ]);
        }else{
            return $this->response->setJSON([
                'error'=>true,
                'message'=>'<div class="text-center text-secondary fw-bold my-5">No post found in database</div>'
            ]);
        }
        
    }
    
    //handle edit post ajax request
    public function edit($id=null){
        $postModel = new \App\Models\PostModel();
        $post= $postModel->find($id);
        return $this->response->setJSON([
            'error'=>false,
            'message'=>$post
        ]);
    }
    //hundle update post ajax request
    public function update(){
        $id = $this->request->getPost('id');
        $old_thumb = $this->request->getPost('old_image');
        $file = $this->request->getFile('file');
        $fileName = $file->getFilename();
        if($fileName != ''){
            $fileName= $file->getRandomName();
            $file->move('Thumbnails/', $fileName);
            if($old_thumb != ''){
                unlink('Thumbnails/'.$old_thumb);
            }
        }else{
            $fileName = $old_thumb;
        }
        $data = [
            'Title' => $this->request->getPost('title'),
            'Categorie' => $this->request->getPost('Categorie'),
            'image' => $fileName,
            'Body' => $this->request->getPost('body'),
            'Created_at' =>date('Y-m-d H:i:s')
        ];
        $postModel = new \App\Models\PostModel();
        $postModel->update($id, $data);
        return $this->response->setJSON([
            'error'=>false,
            'message'=>"Successfully updated post"
        ]);
    }
    //hundle delete post ajax request
    public function delete($id = null)
    {
        $postModel = new \App\Models\PostModel();
        $post = $postModel->find($id);
        $postModel->delete($id);
        unlink('Thumbnails/'.$post['image']);
        unlink('Videos/'.$post['video']);
        return $this->response->setJSON([
            'error'=>false,
            'message'=>"Successfully deleted post"
        ]);
    }
    //handle fetch post detail ajax request 
    public function detail($id = null)
    {
        $postModel = new \App\Models\PostModel();
        $post = $postModel->find($id);
        return $this->response->setJSON([
            'error'=>false,
            'message'=>$post
        ]);
    }
    //handle fetch post's titles searched ajax request
    public function search()
    {
        $value = $this->request->getPost('query');
     $con = \config\Database::connect();
        $post = $con->query("select * from posts where Title LIKE '%".$value."%' limit 10");
        $query = $post->getResult();
        $data = '';
        foreach($query as $query){
            $data.='<div class="cursor-pointer py-2 px-3 hover:bg-slate-100">
            <p id="'.$query->ID.'" class="searched text-sm font-medium text-gray-600">'.substr($query->Title,0,50).'...</p>
          </div>';
        }
        return $data;
    }
    //handle fetch post's results searched ajax request
    public function searched()
    {
        $value = $this->request->getPost('query');
        $con = \config\Database::connect();
        $post = $con->query("select * from video where Title LIKE '%".$value."%'");
        $video = $post->getResult();
        $data = '';
        foreach($video as $video){
            $data.='
            <div class="flex gap-8 mb-8">
            <a href="'.base_url() .'/Watch?v='.$video->ID.'">
                <img src="Thumbnails/'.$video->Image.'" class="rounded-md " height="120" width="240"/>
            </a>
                <div class="flex flex-col">
                    <div><h1 class="text-xl">'.$video->Title.' </h1></div>
                    <div class="nbrVues ">'.$video->Views .'vues . '.$video->Created_at.'</div> <br>
                    <div class="description flex truncate text-sm"><img src="'.base_url().'/img/logo.png" class="w-13 h-12 my-1  rounded-full " alt="logo"><p mt-5>'. $video->Nom.' '.$video->Prenom.'</p></div>
                </div>
            </div>';
        }
        return $data;
    }
}
