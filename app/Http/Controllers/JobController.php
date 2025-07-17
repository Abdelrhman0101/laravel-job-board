<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index()
    {
        $jobs = Job::all();
        return view(view: 'job/index', data: ['jobs' => $jobs]);
    }
}
