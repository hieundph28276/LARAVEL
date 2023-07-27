<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function  student(Request $request)
    {
        // return $request->user();
        return response()->json([
            [
                'name' => 'Nguyww',
                'diem' => 10,
                'tuoi' => 20
            ],
            [
                'name' => 'Nguyww',
                'diem' => 10,
                'tuoi' => 20
            ]
        ]);
    }
}
    // Route::get('/student', [\Api\Http])