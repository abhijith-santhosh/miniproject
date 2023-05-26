<?php
namespace App\Models;
use CodeIgniter\Model;

class CarModel extends Model{
    protected $table='model';
    protected  $primaryKey='id';
    protected $allowedFields = ['insurance_id','brand_id'];

    public function getCarModel($brand_id,$insurance_id)
    {
        // $this->where('name', $name);
        $this->where('brand_id', $brand_id);
        $this->where('insurance_id', $insurance_id);
        return $this->findAll();
    }
}
