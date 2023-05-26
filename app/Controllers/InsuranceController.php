<?php

namespace App\Controllers;

use App\Models\InsuranceModel;
use App\Models\BrandModel;
use App\Models\CarModel;
use App\Models\CostModel;

class InsuranceController extends BaseController
{
    public function index()
    {
        $insuranceModel = new InsuranceModel();
        $data['companies'] = $insuranceModel->getCompanies();
        
        return view('insurance/home', $data);
    }
    
    public function brands($company_id)
    {
        $CarModel= new BrandModel();
        $data['brands'] = $CarModel->getBrand($company_id);
       return view('insurance/brands', $data);
    }
    
    public function models($brand_id,$name)
    {
        $CarModel = new CarModel();
        $data['models'] = $CarModel->getCarModel($brand_id,$name);
        
        return view('insurance/models', $data);
    }
    
    public function costs($cost,$model_id)
    {
        $costModel = new CostModel();
        $data['costs'] =  $costModel->getCostsByModel($cost,$model_id);
        
        return view('insurance/costs', $data);
        
    }
}

