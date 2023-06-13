<?php


namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /*
     * displays the profile page
     */
    public function show()
    {
        return view('profile');
    }
}
