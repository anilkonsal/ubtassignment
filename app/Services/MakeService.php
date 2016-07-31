<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;

use App\Repositories\MakeRepository;
class MakeService {
    
    private $makeRepository;


    public function __construct(MakeRepository $makeRepository) {
        $this->makeRepository = $makeRepository;
    }
    
    public function create($name, $nice_name) {
        
        return $this->makeRepository->create($name, $nice_name);
    }
    
    public function get($make) {
        return $this->makeRepository->get($make);
    }
}