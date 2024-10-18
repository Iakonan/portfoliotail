<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($project)
    {
        $progetti = [
            'livingwoodfb' => [
                'title' => 'LivingwoodFB',
                'description' => 'Descrizione...',
                'image' => 'images/logotrasp.png',
                'link' => '/livingwoodfb'
            ],
            'prestoit' => [
                'title' => 'Presto.IT',
                'description' => 'Descrizione di Presto.IT...',
                'image' => 'images/logopresto.png',
                'link' => '/prestoit'
            ],
            'questboard' => [
                'title' => 'Questboard',
                'description' => 'Descrizione di Questboard...',
                'image' => 'images/QuestBoard.png',
                'link' => '/questboard'
            ],
        ];

        if (array_key_exists($project, $progetti)) {
            return view('project', ['project' => $progetti[$project]]);
        } else {
            abort(404);
        }
    }
}
