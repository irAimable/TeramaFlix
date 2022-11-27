<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Nom','Prenom','Email','Password','Phone','Naissance','Sexe'];

    protected $useTimestamps = true;
    protected $createdField  = 'Created_at';
    protected $updatedField  = 'Updated_at';
    protected $deletedField  = 'DateSuppression';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function verifyPhone($mail){
        $build= $this->db->table('users');
        $build->select('Password');
        $build->where('Phone',$mail);
        $resul= $build->get();
        if(count($resul->getResultArray())==1){
            return $resul->getRowArray();
            

        }
        else{
            return false;
        }
    }

    public function verifyEmail($mail){
        $builder= $this->db->table('users');
        $builder->select('Password');
        $builder->where('Email',$mail);
        $result= $builder->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
            //return true;

        }
        else{
            
           return false;
        }
    }
    public function getIdm($mail){
        $builder= $this->db->table('users');
        $builder->select('ID');
        $builder->where('Email',$mail);
        $result= $builder->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
            //return true;

        }
        else{
            
           return false;
        }
    }
    public function getIdp($mail){
        $builder= $this->db->table('users');
        $builder->select('ID');
        $builder->where('Phone',$mail);
        $result= $builder->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
            //return true;

        }
        else{
            
           return false;
        }
    }
}