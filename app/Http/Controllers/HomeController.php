<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visibility;
use App\Models\Status;
use App\Models\Category;
use App\Models\Opportunity;
use App\Models\Image;
use App\Models\Organisation;
use App\Models\Task;
use App\Models\User;

class HomeController extends Controller
{
    public function dashboard()
    {
        $categories = Category::all();
        $statuses = Status::all();
        $visibilities = Visibility::all();
        $organisations = Organisation::all();
        $users = User::all();
        $opportunities = Opportunity::all();
        $tasks = Task::all();
        $images = Image::all();

        return view('dashboard',compact(
            'categories',
            'statuses',
            'visibilities',
            'organisations',
            'users',
            'tasks',
            'images',
            'opportunities'
        ));
    }
}
