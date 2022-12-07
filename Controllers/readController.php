<?php

namespace App\Controllers;

class readController extends BaseController
{
    public function index()
    {
        $con = \config\Database::connect();
        $querys = $con->query("select * from posts order by rand() limit 5");
        $rs['mVideo'] = $querys->getResult();
        $query = $con->query("select * from posts order by rand()");
        $rs['video'] = $query->getResult(); 
        echo view('index',$rs); 
    }
    public function play($id = null){
        $con = \config\Database::connect();
        $query = $con->query("select * from posts order by rand() limit 16");
        $rs['video'] = $query->getResult(); 
        $title = $con->query("select * from posts where ID=".$id);
        $rs['title'] = $title->getResult();
        $rs['myVideo'] = $rs['title'];
        echo view('Player',$rs); 
    }
    public function video($id = null){
        $con = \config\Database::connect();
        $query = $con->query("select * from posts order by rand() limit 16");
        $rs['video'] = $query->getResult(); 
        $querys = $con->query("select * from posts where ID=".$id);
        $rs['myVideo'] = $querys->getResult();
        echo view('Player',$rs); 
    }
    
    public function vide($id = null)
    {
        $con = \config\Database::connect();
        $query = $con->query("select * from posts order by rand() limit 16");
        $rs['video'] = $query->getResult(); 
        $querys = $con->query("select * from posts where ID=".$id);
        $rs['myVideo'] = $querys->getResult();
        echo view('playVideo',$rs); 
    }
} 