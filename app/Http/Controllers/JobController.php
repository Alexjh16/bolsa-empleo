<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(5);
        return view('jobs.index', [
            'jobs' => $jobs ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'decimal:2']
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
        return View('jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        Gate::authorize('edit-job', $job);
        //
        //validate
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => ['required', 'decimal:2']
        ]);
        //autorize
        //update
        //findOrFail, try to find an object with the given id, if not found, it will throw an exception
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        //persist

        //redirect
        return redirect('job/' . $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        Gate::authorize('edit-job', $job);
        //
        //autorize
        //delete
        $job->delete();

        return redirect('/jobs');
        //redirect
    }
}
