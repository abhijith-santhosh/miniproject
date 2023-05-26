<?php
namespace App\Models;


use CodeIgniter\Model;

class CostModel extends Model{
    protected $table='cost';
    public function getCostsByModel($model_id)
    {    
        // $this->where('insurance_name', $insurance_name);
        $this->where('model_id', $model_id);
        return $this->findAll();
       
        //  echo $this->getLastQuery()->getQuery();
        //  $results = $this->findAll();
        //  return $results;
        //  print_r($results);
    }


    
}
