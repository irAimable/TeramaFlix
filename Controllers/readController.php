<?php

namespace App\Controllers;

class readController extends BaseController
{
    public function index()
    {
        $con = \config\Database::connect();
        $querys = $con->query("select * from posts order by rand() limit 5");
        $rs['mVideo'] = $querys->getResult();
        $query = $con->query("select * from posts order by rand() limit 16");
        $rs['video'] = $query->getResult(); 
        echo view('index',$rs); 
    }
    public function play($id = null){
        $con = \config\Database::connect();
        $query = $con->query("select * from posts order by rand() limit 16");
        $rs['video'] = $query->getResult(); 
        $querys = $con->query("select * from posts where ID=".$id);
        $title = $con->query("select * from posts where ID=".$id);
        $rs['title'] = $title->getResult();
        $rs['myVideo'] = $querys->getResult();
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
    public function  list()
    {
        $value = $this->request->getPost('query');
        $con = \config\Database::connect();
        $query = $con->query("select * from posts where ID=".$value);
        $video = $query->getResult();
        $data['side'] = "";
        foreach($video as $video){
          $data['side'].='<div class="thumbid" id="'.$video->ID.'" dir="'.base_url().'/Videos/'.$video->video.'">
          <div class="lg:h-[115px] sm:h-[450px] w-full  overflow-hidden flex lg:flex-row flex-col lg:justify-center lg:items-start lg:space-x-2">
            <div class="imagevideo h-[80%] w-full lg:h-[100%] lg:w-[45%]  lg:rounded overflow-hidden">
                <img  src="'.base_url().'/Thumbnails/'.$video->image.'" >
            </div>
            <div class="descriptionV flex flex-col  space-y-1 pl-2 lg:p-3 lg:h-[100%] h-[20%] w-full bg-gray-100 lg:w-[60%] lg:rounded">
                <div class="videoName font-semibold lg:text-[20px] text-[18px]">'.substr($video->Title,0,16).'"..."  ?></div>
                <div class="profilChannel  flex justify-start items-center space-x-2  cursor-pointer ">
                    <img src="'.base_url().'/img/logo.png" class="lg:w-6 w-8 lg:h-6 h-8 my-1   rounded-full " alt="logo">
                    <h1 class= "font-semibold text-[15px] cursor-pointer">'.$video->Categorie.'</h1>
                </div>
            </div>
        </div> 
        </div>';   
        }
        $title = $con->query("select * from posts where ID=".$value);
        $data['title'] = $title->getResult();
        return $data;
    }
    public function playVideo()
    {
        $con = \config\Database::connect();
        $query = $con->query("select * from posts order by rand() limit 16");
        $video = $query->getResult();
        $data='';
        foreach($video as $video){
            $data.='<div class="side-video-list">
           <div class="small-thumbnail"> 
            <button id="thumbn" class="'.$video->ID.'" type="button">
                <img  id="thumbnimg" src="'.base_url().'/Thumbnails/'.$video->image .'" alt="">
            </button>
           </div>
        <div class="vid-info">
            <a href="">'.$video->Title .'</a>
            <p>'. $video->Categorie.'</p>
            <p>15k Views</p>
        </div>
    </div>';
        }
        return $data;
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