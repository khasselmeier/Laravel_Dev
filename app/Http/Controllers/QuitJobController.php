<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\QuitJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuitJobController extends Controller
{
    public function index()
    {
        $quitJobs = QuitJob::with('user')
            ->latest()
            ->paginate(3);

        return view('quitjobs.index', [
            'quitJobs' => $quitJobs
        ]);
    }

    public function create()
    {
        return view('quitjobs.create');
    }

    public function show(QuitJob $quitjob)
    {
        $quitjob->load('user');

        return view('quitjobs.show', [
            'quitJob' => $quitjob, // keep the view variable name as quitJob
        ]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'description' => ['required'],
            'job_description' => ['required'],
        ]);

        $quitjob = QuitJob::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
            'job_description' => request('job_description'),
            'user_id' => auth()->id(),
        ]);

        return redirect('/quitjobs');
    }

    public function edit(QuitJob $quitjob)
    {
        return view('quitjobs.edit', [
            'quitJob' => $quitjob,
        ]);
    }

    public function update(Request $request, QuitJob $quitjob)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
            'job_description' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $quitjob->update($validated);

        return redirect('/quitjobs/' . $quitjob->id);
    }

    public function destroy(QuitJob $quitjob)
    {
        $quitjob->delete();

        return redirect('/quitjobs');
    }
}
