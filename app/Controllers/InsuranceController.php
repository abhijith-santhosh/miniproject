<?php

namespace App\Controllers;

use App\Models\InsuranceModel;

class InsuranceController extends BaseController
{
    public function index()
    {
        $insuranceModel = new InsuranceModel();
        $data['companies'] = $insuranceModel->getCompanies();
        
        return view('insurance/home', $data);
    }
    
    public function brands($companyId)
    {
        $insuranceModel = new InsuranceModel();
        $data['brands'] = $insuranceModel->getBrandsByCompany($companyId);
        
        return view('insurance/brands', $data);
    }
    
    public function models($brandId)
    {
        $insuranceModel = new InsuranceModel();
        $data['models'] = $insuranceModel->getModelsByBrand($brandId);
        
        return view('insurance/models', $data);
    }
    
    public function costs($modelId)
    {
        $insuranceModel = new InsuranceModel();
        $data['costs'] = $insuranceModel->getCostsByModel($modelId);
        
        return view('insurance/costs', $data);
        
    }
}

