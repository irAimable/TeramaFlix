<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
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
            'Title' =>   $this->request->getPost('title'),
            'Categorie' =>  $this->request->getPost('Categorie'),
            'video' => $filename,
            'image' => $imagename,
            'Body' =>   $this->request->getPost('body'),
            'Created_at' =>  date('Y-m-d H:i:s')
        ];
            $file->move('Videos', $filename);
            $imge->move('Thumbnails',$imagename);
            $postModel = new \App\Models\PostModel();
            $postModel->save($data);
            return $this->response->setJSON([
                'error'=>false,
                'message'=>"Successfuly added new post"
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#detail_post_modal" id="'.$posts['ID'].'" class="post_detail_btn"><video src="Videos/'.$posts['video'].'" poster="Thumbnails/'.$posts['image'].'" width="280" height="300" controls></video></a>
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
        $post = $con->query("select * from posts where Title LIKE '%".$value."%'");
        $video = $post->getResult();
        $data = '';
        foreach($video as $video){
            $data.='
            <div class="flex gap-8 mb-8">
            <a href="'.base_url().'/Watch/'.$video->ID.'">
                <img src="Thumbnails/'.$video->image.'" class="rounded-md " height="120" width="240"/>
            </a>
                <div class="flex flex-col">
                    <div><h1 class="text-xl">'.$video->Title.' </h1></div>
                    <div class="description truncate text-sm">'. $video->Categorie.'</div>
                </div>
            </div>';
        }
        return $data;
    }
}
