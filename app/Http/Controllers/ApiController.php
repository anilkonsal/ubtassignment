<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Services\MakeService;
use App\Services\ModelService;
use App\Services\EdmundService;

class ApiController extends Controller
{
    //
    
    public function make(MakeService $makeService, $make='') {
        $rows = $makeService->get($make);
        return response()->json($rows);
    }
    public function model(ModelService $modelService , $make_id) {
        $rows = $modelService->get($make_id);
        return response()->json($rows);
    }
    
    public function photo(EdmundService $eds,$make, $model) {
        $photo = $eds->photo($make, $model);
        
    }
}
