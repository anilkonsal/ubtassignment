<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;

use App\Repositories\ModelRepository;

class ModelService {
    
   private $modelRepository;


    public function __construct(ModelRepository $modelRepository) {
        $this->modelRepository = $modelRepository;
    }
    
    public function create($name, $nice_name, $eid, $make_id) {
        $this->modelRepository->create($name, $nice_name, $eid, $make_id);
    }
    
    public function get($make_id) {
        return $this->modelRepository->get($make_id);
    }
}