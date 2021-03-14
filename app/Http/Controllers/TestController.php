<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tasks = Task::whereHas('comments', function ($query) {
            return $query->where('created_at', '>',
                Carbon::now()->subHours(12)->toDateTimeString()
            );
        })->get();

        return view('welcome', compact('tasks'));
    }
}
