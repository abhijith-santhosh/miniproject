<?php
namespace App\Models;
use CodeIgniter\Model;

class BrandModel extends Model{
    protected $table='brand';
    protected  $primaryKey='id';
    protected $allowedFields = ['name','company_id'];

    public function getBrand($company_id)
    {
        $this->where('company_id', $company_id);
        return $this->findAll();
        $results = $this->findAll();
        // print_r($results);
        // echo $this->getLastQuery()->getQuery();
        // return $results;
        
    }
}











?>