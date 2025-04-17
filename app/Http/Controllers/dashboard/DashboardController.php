<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {

        return view("dashboard.index");
    }

    public function settings() {

        return view("dashboard.settings");
    }
}
