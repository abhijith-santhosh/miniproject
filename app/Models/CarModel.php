<?php
namespace App\Models;
use CodeIgniter\Model;

class CarModel extends Model{
    protected $table='model';
    protected  $primaryKey='id';
    protected $allowedFields = ['name','brand_id'];

    public function getCarModel($brand_id,$name)
    {
        // $this->where('name', $name);
        $this->where('brand_id', $brand_id);
        return $this->findAll();
    }
}
