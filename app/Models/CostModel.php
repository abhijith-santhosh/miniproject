<?php
namespace App\Models;


use CodeIgniter\Model;

class CostModel extends Model{
    protected $table='cost';
    public function getCostsByModel($model_id)
    {    
        // $this->where('insurance_name', $insurance_name);
        $this->where('model_id', $model_id);
        $this->select('model.name as modelname,insurance.name as insurancename ,cost');
        $this->join('model','cost.model_id=model.id');
        $this->join('insurance', 'insurance.id=model.insurance_id');
        // return $this->findAll();
       
         $results = $this->findAll();
        //  echo $this->getLastQuery()->getQuery();
        //     echo '<pre>';
        //  print_r($results);
        //     echo '<pre>';
            return $results;
    }


    
}
