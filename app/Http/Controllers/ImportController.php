<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\MakeModelService;
use App\Services\EdmundService;
use Illuminate\Support\Facades\Config;

class ImportController extends Controller {

    //

    function index() {
        return view('import.index');
    }
            
    function import(MakeModelService $makeModelService) {
        
        
        try {
            $eds = new EdmundService();
            $data = $eds->get();


            $makeModelService->saveFromArray($data);
        } catch (\Exception $e) {
            return view('import.import', ['error' => $e->getMessage()]);
        }

        return view('import.import', ['success' => 'Imported!']);
    }

}
