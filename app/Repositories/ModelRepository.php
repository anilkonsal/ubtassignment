<?php

namespace App\Repositories;

use App\CarModel;

class ModelRepository {

    public function create($name, $nice_name, $eid, $make_id) {
        $model = CarModel::where('name', $name)->first();

        if (!$model) {
            $model = new CarModel;
            $model->name = $name;
            $model->nice_name = $nice_name;
            $model->eid = $eid;
            $model->make_id = $make_id;
            $model->save();
        }

        return $model->id;
    }
    
    public function get($make_id) {
        return CarModel::where('make_id', $make_id)->select('name', 'id', 'nice_name')->get();
    }

}
