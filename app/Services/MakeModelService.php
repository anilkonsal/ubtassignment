<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;

use App\Services\MakeService;
use App\Services\ModelService;
class MakeModelService {
    
    private $makeService;
    private $modelService;
    
    public function __construct(MakeService $makeService, ModelService $modelService) {
        $this->makeService = $makeService;
        $this->modelService = $modelService;
    }
    
    public function saveFromArray($array) {
        
        foreach ($array['makes'] as $make) {
            $makeId = $this->makeService->create($make['name'], $make['niceName']);
            
            foreach ($make['models'] as $model) {
                $modelId = $this->modelService->create($model['name'], $model['niceName'], $model['id'], $makeId);
            }
            
        }
        
        
    }
    
}