<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateFormRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(CreateUpdateFormRequest $r) {
        Project::create([
            'title' => $r->title,
            'code' => $r->code,
            'start_date' => $r->start_date,
            'end_date' => $r->end_date,
        ]);
        echo "Projeto criado!!";
    }

     public function read(Request $request) {
        $project = new Project;

        $projects = $project->find($request->id);
        
        //dd($projects);
        return $projects->user;
    }

    public function all(Request $request) {
        $project = Project::all();

        return $project;
    }

    public function edit(Request $request) {
        $project = new Project;
        $projects = $project->find($request->id);
        return view('update',['project' => $projects]);
       // $project->title='Project 01 atualizado';
        //$project->save();

        //return $project;
    }

    public function update(Request $request) {
        $project = new Project;
        $projects = $project->find($request->id);
        
        $projects->title = $request->title;
        $projects->code = $request->code;
        $projects->start_date = $request->start_date;
        $projects->end_date = $request->end_date;

        $projects->save();

        echo "Candidato atualizado com sucesso!";
    }

    public function delete(Request $request) {
        $project = new Project;
        $projects = $project->find($request->id);
        $projects->delete();

        echo "Candidato excluido com sucesso!";
    }
}
