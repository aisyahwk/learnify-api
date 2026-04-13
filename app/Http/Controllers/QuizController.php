<?php
namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index($course_id)
    {
        return Quiz::where('course_id', $course_id)->get();
    }

    public function store(Request $req)
    {
        return Quiz::create($req->all());
    }
}
