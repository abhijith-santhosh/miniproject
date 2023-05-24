<?php

namespace App\Models;

use CodeIgniter\Model;

class InsuranceModel extends Model
{
    protected $table = 'insurance';
    
    public function getCompanies()
    {
        return $this->findAll();
    }
    
    public function getBrandsByCompany($companyId)
    {
        $db = db_connect();
        $builder = $db->table('brand');
        $builder->select('*');
        $builder->where('company_id', $companyId);
        $query = $builder->get();
        
        return $query->getResult();
    }
    
    public function getModelsByBrand($brandId)
    {
        $db = db_connect();
        $builder = $db->table('model');
        $builder->select('*');
        $builder->where('brand_id', $brandId);
        $query = $builder->get();
        
        return $query->getResult();
    }
    
    public function getCostsByModel($modelId)
    {
        $db = db_connect();
        $builder = $db->table('cost');
        $builder->select('*');
        $builder->where('model_id', $modelId);
        $query = $builder->get();
        
        return $query->getResult();
    }
}
