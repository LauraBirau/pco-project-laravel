<?php


namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /*
     * shows the dashboard - old version
     */
    public function show()
    {
        return view('dashboard');
    }
}
