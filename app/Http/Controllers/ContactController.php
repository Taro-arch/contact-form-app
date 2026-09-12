<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\StoreContactRequest;


class ContactController extends Controller
{


    public function index()
    {

    $categories = Category::all();
    $tags       = Tag::all();

    return view('contact.index',
            [
            'tags'       => $tags,
            'categories' => $categories
            ]);

    }



    public function confirm(StoreContactRequest $request)
    {

    $validated  = $request->validated();

    $category = Category::find($validated['category_id']);

    $tags      = Tag::whereIn('id', $validated['tag_ids']??[])->get();


    return view('contact.confirm',
        [
            'validated' => $validated,
            'category'  => $category,
            'tags'      => $tags
        ]);



    }




}
