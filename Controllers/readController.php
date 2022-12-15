<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use App\Models\ViewsModel;
use App\Models\LikesModel;

class readController extends BaseController
{
    public function index()
    {
        $con = \config\Database::connect();
        $querys = $con->query("select * from video order by rand() limit 5");
        $rs['mVideo'] = $querys->getResult();
        $query = $con->query("select * from video order by rand()");
        $rs['video'] = $query->getResult(); 
        echo view('index',$rs); 
    }
    public function play(){
        $con = \config\Database::connect();
        $video = $this->request->getVar('v');
        $query = $con->query("select * from video order by rand() limit 16");
        $rs['video'] = $query->getResult(); 
        $title = $con->query("select * from video where ID='".$video."'");
        $comments = $con->query("select * from commentaire WHERE Post='".$video."'");
        $rs['comments'] = $comments->getResult();
        $rs['title'] = $title->getResult();
        $rs['myVideo'] = $rs['title'];
        echo view('Player',$rs); 
    }
    public function liked()
    {
        $user = $this->request->getPost('user');
        $video = $this->request->getPost('video');
        $data = [
            'ID'=>'lk1',
            'Posts'=>$video,
            'User'=>$user,
            'Type'=>'p'
        ];
        $LikesModel = new LikesModel();
        $LikesModel->insert($data);
    }
    public function comment()
    {
        $user = $this->request->getPost('user');
        $video = $this->request->getPost('video');
        $data = [
            'ID'=>'lk1',
            'Posts'=>$video,
            'User'=>$user,
            'Type'=>'p'
        ];
        $LikesModel = new LikesModel();
        $LikesModel->insert($data);
    }
} 