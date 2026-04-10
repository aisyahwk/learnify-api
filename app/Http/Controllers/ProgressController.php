<?php
namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function store(Request $req)
    {
        return Progress::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'course_id' => $req->course_id
            ],
            [
                'progress' => $req->progress
            ]
        );
    }

    public function myProgress()
    {
        return Progress::where('user_id', auth()->id())->get();
    }
}
