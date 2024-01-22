<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add() {
        $model = new Model();
        $model->field_one = 'mijn data';
        $model->save();
    }

    public function show(Model $model): string
    {
        return view('model.show', ['model'=>$model]);
    }
}

