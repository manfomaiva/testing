<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function TechnicianDashboard()
    {
        return view("technicians.technician_dashboard");
    }
}
