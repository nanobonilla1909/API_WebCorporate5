<?php

namespace App\Http\Controllers;

use App\BankBenefit;
use App\Http\Resources\BankBenefitResource;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;



class BankBenefitController extends ApiController
{
    
    public function index()
    {
    	$bbs = BankBenefit::all();

        // Asi funciona perfecto con Recursos
        // return BankBenefitResource::collection(BankBenefit::all());


        // Asi funciona perfecto sin Recursos
        return $this->showAll($bbs); 


    }


   
    public function show(BankBenefit $bankBenefit)
    {
 	
        return new BankBenefitResource($bankBenefit);
    }

}



