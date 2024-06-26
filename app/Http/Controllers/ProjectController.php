<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $projects = Project::with('status')->get();

        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = Status::All();
        return view('projects.create', ['status' => $status]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Project::create($request->all());

        return redirect()->back()->with('success', 'Inregistrare cu success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project):View
    {
        $status = Status::All();
        return view('projects.edit', ['project' => $project], ['status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project):RedirectResponse
    {
        $project->update($request->all());
        return redirect()->back()->with('success', 'Actualizare cu success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project):RedirectResponse
    {
        $project->delete();
        return redirect()->back();
    }
}
