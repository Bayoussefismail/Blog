<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'feature' => 'required|image'
        ]);
        $feature = $request->feature;
        $feature_new_name = time().$feature->getClientOriginalName();
        $feature->move('uploads/posts', $feature_new_name);

        $category = Category::create([
          'name' => $request->name,
          'feature' => 'uploads/posts/' . $feature_new_name,
          'slug' => Str::slug($request->name)
        ]);


        $category->save();
        Session::flash('success', 'You successfully added a category');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
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
      $category = Category::find($id);
      if($request->hasFile('feature'))
      {
    $feature = $request->feature;
    $feature_new_name = time() . $feature->getClientOriginalName();
    $feature->move('uploads/posts', $feature_new_name);
    $post->feature = 'uploads/posts/' . $feature_new_name;
      }
      $category->name = $request->name;
      $category->save();
      Session::flash('success', 'You successfully updated a category');
      return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        foreach($category->posts as $post){
          $post->delete();
        }
        $category->delete();
        Session::flash('success', 'You successfully deleted a category');
        return redirect()->route('categories');

    }
}
