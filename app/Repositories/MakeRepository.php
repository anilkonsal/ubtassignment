<?php

namespace App\Repositories;

use App\CarMake;

class MakeRepository {

    public function create($name, $nice_name) {

        $make = CarMake::where('name', $name)->first();

        if (!$make) {
            $make = new CarMake();
            $make->name = $name;
            $make->nice_name = $nice_name;
            $make->save();
        }
        return $make->id;
    }
    
    public function get($make) {
        return CarMake::where('name', 'like', $make.'%')->select('name', 'id','nice_name')->get();
    }

}
