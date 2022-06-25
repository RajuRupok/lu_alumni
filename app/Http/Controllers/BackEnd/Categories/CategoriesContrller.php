<?php

namespace App\Http\Controllers\BackEnd\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use Important Medels
use App\Models\Category\Category;

class CategoriesContrller extends Controller
{
    // add instance variable
    public $categories = null;
    // Added to Auth constructor
    public function __construct(){
        $this->middleware('auth', ['only' => 'index']);
        $this->categories = new Category();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display a view of all of our categories
        $categories = $this->categories->all();
        //it is also have a form to create a new category
        return view('backend.categories.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:191'
        ));

        $category = new Category();
        $category->name = $request->name;

        $category->save();

        Session::flash('success', 'New Category has been success');

        return 1;
        // return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find categories value from category model
        $category = $this->categories->find($id);

        //redirect view page
        return view('backend.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|max:191'
        ));

        $category = new Category();
        $category->name = $request->name;

        $category->save();

        Session::flash('success', 'New Category has been success');

        return 1;
        // return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find Category
        $category = $this->categories->find($id);

        $category->delete();

        Session::flash('success', "This Category was successfully deleted");

        return redirect()->route('index');

    }
}
