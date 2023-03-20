<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('backend.books.index')->with(compact('books'));
    }
}
