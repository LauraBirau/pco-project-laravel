<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Article;

class WelcomeController extends Controller
    {
    /*
     * shows the index page
     */
    public function show()
    {
        $articles = Article::take(3)->latest()->get();

        return view('welcome', ['articles' => $articles]);
    }
    }
