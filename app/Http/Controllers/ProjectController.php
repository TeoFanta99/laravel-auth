<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\ProjectFormRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project :: all();

        return view ('project.welcome', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();

        $newProject = new Project();

        $newProject -> name = $data['name'];
        $newProject -> description = $data['description'];
        $newProject -> author = $data['author'];
        $newProject -> img = $data['img'];

        $newProject -> save();

        return redirect() -> route('project.show', $newProject -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project :: find($id);

        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project :: find($id);

        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectFormRequest $request, $id)
    {
        $project = Project :: find($id);

        $data = $request -> all();

        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> author = $data['author'];
        $project -> img = $data['img'];

        $project -> save();

        return redirect() -> route('project.show', $project -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project :: find($id);
        $project -> delete();

        return redirect() -> route('project.welcome');
    }
}
