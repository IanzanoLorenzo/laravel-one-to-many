<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;

class DashboardController extends Controller
{
    public function index(){
        $types=Type::limit(5)
            ->orderBy("id", 'desc')
            ->get();
        $projects=Project::limit(5)
            ->orderBy("id", 'desc')
            ->get();
        return view('admin.dashboard', compact('projects', 'types'));
    }
}
