<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::with('category', 'tags')->paginate(3); //altrimenti ->get()
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($slug)
    {
        $projects = Project::with('category', 'tags')->where('slug', $slug)->first();
        if ($projects) {
            return response()->json([
                'success' => true,
                'results' => $projects
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'Nessun post trovato'
            ]);
        }
    }
}