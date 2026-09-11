<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Tag;


class ContactController extends Controller
{


    public function index()
    {

    $categories = Category::all();

    return view('contact.index', ['categories' => $categories]);

    }


    public function confirm()
    {

    $tags = Tag::all();

    return view('contact.confirm', ['tags' => $tags]);


    }



}
