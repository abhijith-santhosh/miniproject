<?php

namespace App\Models;

use CodeIgniter\Model;

class InsuranceModel extends Model
{
    protected $table = 'insurance';
    
    public function getCompanies()
    {
        // return $this->findAll();
        $results = $this->findAll();
        //  echo $this->getLastQuery()->getQuery();
        //     echo '<pre>';
        //  print_r($results);
        //     echo '<pre>';
        //  print_r($results);
            return $results;
           
    }
    public function getCompanieName($company_id)
    {
       $this->where('id',$company_id);
       $results = $this->findAll();
       print_r($results);
       return $results;
      
       
           
    }
}
