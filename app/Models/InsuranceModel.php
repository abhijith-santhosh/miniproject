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
}
