<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function all()
    {
        $quotes = Quote::all();
        return view('pages.all', [
            'quotes' => $quotes,
        ]);
    }
}
