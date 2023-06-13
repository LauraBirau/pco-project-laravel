<?php


namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class FaqController extends Controller
{
public function index()
{
    $faqs =  Faq::latest()->get();
    return view('faqs.index', compact('faqs'));
}

    public function show()
    {
        //Show a single resource.
    }

    public function create()
    {
        //Show a view to create a new resource.
        return view('faqs.create');
    }

    public function store($request)
    {
//        //Persist the new resource.

        Faq::create($request->validate([
         'title' => 'required',
            'img_url' => 'required',
            'excerpt' => 'required',
        'body' => 'required'
        ]));
        return redirect('/faq');
    }

    public function edit(Faq $faq)
    {
        //Show a view to edit an existing resource.
        return view('faqs.edit', compact('faq'));
    }

    public function update(Faq $faq)
    {
        //Persist the edited resource.
        $faq->update(request()->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'required'
        ]));
        return redirect('/faq');
    }

    public function destroy(Faq $faq)
    {
        //Delete the resource.
        $faq->delete();
        return redirect('/faq');
    }
}
