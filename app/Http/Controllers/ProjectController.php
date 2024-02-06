<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use App\Models\Project;

class ProjectController extends Controller
{
    public function add() {
        $faker = Faker::create();
        $model = new Project();
        $model->titel = $faker->colorName();
        $model->description = $faker->text();
        $model->active = true;
        $model->save();
        dump($model->titel);
    }

    public function show(Project $project): string
    {
        return view('project.show', ['project'=>$project]);
    }

    public function index(): string
    {
        $projects = Project::paginate(2);
        return view('project.index', ['projects'=>$projects]);
    }

}

