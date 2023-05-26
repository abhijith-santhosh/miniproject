<?php
namespace App\Models;


use CodeIgniter\Model;

class CostModel extends Model{
    protected $table='cost';
    public function getCostsByModel($name,$model_id)
    {    
        $this->where('name', $name);
        $this->where('model_id', $model_id);
        return $this->findAll();
    }


   
}
