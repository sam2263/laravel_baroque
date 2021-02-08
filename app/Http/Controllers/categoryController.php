<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=new Category();
        $data= Category::all();
//        print_r($data);
         return view('admin.categories')->with('categories',$data);
//        return response()->json($data);
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
        $img = "";
        $categroy = new Category();
        if ($request->hasfile('file')){
            $image_array = $request->file('file');
            $image_ext = $image_array->getClientOriginalExtension();
            $image = "img_".rand(123456,999999). "." . $image_ext;
            $destination_path = public_path('/uploads/categories/');
            $image_array->move($destination_path, $image);
        }
        $categroy->title = $request->title;
        $categroy->image_url = $image;
        $categroy->description = $request->description;
        $categroy->save();
        return redirect('/categories');
//        return response()->json("Category insert successfully");
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // website function in this controller
    public function displayCategories()
    {
        // echo "calling";
        $category=new Category();
        $cat=Category::all();
        // print_r($cat);
        return view('baroque.home')->with('categories',$cat);
    }
    public function disp()
    {
        $category=new Category();
        $fdata=Category::all();
        return view('baroque.home')->with('all',$fdata);
    }
    public function getCategories()
    {
        $data= Category::all();
        return response()->json($data);
    }
    public function postCategories(Request $request)
    {
        $categroy = new Category();
        if ($request->hasfile('file'))
        {
            $image_array = $request->file('file');
            $image_ext = $image_array->getClientOriginalExtension();
            $image = "img_".rand(123456, 999999).".".$image_ext;
            $destination_path = public_path('/uploads/categories/');
            $image_array->move($destination_path,$image);
        }

        $categroy->title = $request->title;
        $categroy->image_url =$image;
        $categroy->description = $request->description;
        $categroy->save();

            return response()->json("Category added successfully");

    }
    public function editCategories($id)
    {
        $data= Category::find($id);
        return response()->json($data);
    }
    public function updateCategories(Request $request, $id)
    {
        $img = "";
        $categroy = new Category();
        if ($request->hasfile('file')){
            $image_array = $request->file('file');
            $image_ext = $image_array->getClientOriginalExtension();
            $image = "img_".rand(123456,999999). "." . $image_ext;
            $destination_path = public_path('/uploads/categories/');
            $image_array->move($destination_path, $image);
        }
        $find=Category::find($id);
        $categroy->title = $request->title;
        $categroy->image_url = $image;
        $categroy->description = $request->description;
        $categroy->save();
        return response()->json("Category update successfully");
    }
    public function deleteCategories($id)
    {
        $category =Category::destroy($id);
        return response()->json("Category Delete Successfully");
    }






}
