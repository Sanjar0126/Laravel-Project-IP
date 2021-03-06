<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Food;
use App\Category;

class FoodsController extends Controller {


    public function __construct()
    {
       $this->middleware('auth'); //verified
    }
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::paginate(6);
        return view('admin/food.index')->with('foods', $foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/food.create', [
            'categories' => $categories,
        ]);
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
            'price' => 'required',
            'food_image' => 'required|image|max:9999',
            'description' => 'required'
        ]);

        if($request->hasFile('food_image')) {
            $filenameWithExt = $request->file('food_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('food_image')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('food_image')->storeAs('public/food_images', $filenameToStore);
        }

        $food = new Food();
        $food->name=$request->input('name');
        $food->price=$request->input('price');
        $food->rank=$request->input('rank');
        $food->category_id=$request->input('category');
        $food->food_image=$filenameToStore;
        $food->description=$request->input('description');
        $food->save();
        
        return redirect('/admin/food/');

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
        $food = Food::findOrFail($id);
        $categories = Category::all();
        return view('admin/food/edit', [
            'categories' => $categories,
            'food' => $food
        ]);
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
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'food_image' => 'max:9999',
            'description' => 'required'
        ]);

        //Handle File Upload
        if($request->hasFile('food_image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('food_image')->getClientOriginalName();
            error_log($filenameWithExt);
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('food_image')->getClientOriginalExtension();
            //Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('food_image')->storeAs('public/food_images', $filenameToStore);
            error_log($path);
        }

        $food = Food::findOrFail($id);
        $food->name=$request->input('name');
        $food->price=$request->input('price');
        $food->rank=$request->input('rank');
        $food->category_id=$request->input('category');
        if($request->hasFile('food_image')) {
            Storage::delete('public/food_images/' . $food->food_image);
            $food->food_image=$filenameToStore;
        }
        $food->description=$request->input('description');
        $food->save();
        
        return redirect('/admin/food/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        Storage::delete('public/food_images/' . $food->food_image);
        $food->delete();
    }
}
