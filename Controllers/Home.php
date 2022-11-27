<?php

namespace App\Controllers;
use App\Models\UtilisateurModel;

class Home extends BaseController
{
    public function __construct(){
        helper(['url','Form']);
        $this->login=new UtilisateurModel();
        $this->session=session();
    }
    public function index()
    {
     /* $sessio=\Config\Services::session(); 
        
      $nom= [
        'IsLoggedIn'=>1
      ] ;
      $sessio->set($nom);*/
        return view('index');
    }


    public function Login(){
      
      $mail = $this->request->getPost('mail');
      $pass = $this->request->getPost('pass');
      $user=$this->login->verifyEmail($mail);
      $phone_number=$this->login->verifyPhone($mail);
      if ($user) {
        if(password_verify($pass,$user['Password'])){
          $id = $this->login->getIdm($mail);
          return $this->response->setJSON([
            'error'=>false,
            'message'=>"mail verify",
            'sms'=>$id
          ]);
        }else{
          return $this->response->setJSON([
            'error'=>true,
            'message'=>"invalid password"
          ]);
        }
      }elseif($phone_number){
        if(password_verify($pass,$phone_number['Password'])){
          $id = $this->login->getIdp($mail);
          return $this->response->setJSON([
            'error'=>false,
            'message'=>"telephone verify",
            'sms'=>$id
          ]);
         }else{
          return $this->response->setJSON([
            'error'=>true,
            'message'=>"invalid password"
          ]);
         }
          
      }else{
          return $this->response->setJSON([
          'error'=>true,
          'message'=>["invalid email"]
        ]);
      }
    }
    //aja request register new user
    public function Register(){
      $user = new UtilisateurModel();
      $values=[
         'Nom'=>$this->request->getPost('nom'),
         'Prenom'=>$this->request->getPost('prenom'),
         'Email'=>$this->request->getPost('mail'),
         'Password'=>password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
         'Phone'=>$this->request->getPost('phone'),
         'Naissance'=>$this->request->getPost('naissance'),
         'Sexe'=>$this->request->getPost('sexe'),
      ];
      $query=$user->insert($values);
      if (!$query) {
        return $this->response->setJSON([
          'error'=>true,
          'message'=>"invalid password"
        ]);
      }else{
        return $this->response->setJSON([
          'error'=>false,
          'message'=>"Registred",
        ]);
      }
    }
}
