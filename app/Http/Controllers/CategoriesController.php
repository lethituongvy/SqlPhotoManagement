<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoriesController extends Controller
{
    function index(){

        $category = Category::all();
        return view('/admin/categories/index',['cate'=>$category]);
        // foreach($category as $cate){
            // $cate -> photos;
            
        // }

        // <-- Lay 1 cai category-->
        // $firstCategory = Category::find(1);
        // $firstCategory->photos;

        // echo "<pre>".json_encode($firstCategory, JSON_PRETTY_PRINT)."</pre>";
        // return view('/categories',['show' => $index]);
    }
    function delete($id){
        $category = Category::find($id);
        $category->delete;
        return redirect('/admin/categories/index');
    }
    function create(){
        return view('categories.create');
    }
    function insert(Request $request){
        $name = $request->name;
        $category = new Category;
        $category->name = $name;
        $category->save();
    }
    function edit($id){
        $category = Category::find($id);
        return view('/admin.categories.edit',['cate'=>$category]);
    }
    function update($id, Request $request){
        $name = $request->name;
        $category = Category::find($id);
        $category->name =$name;
        $category->save();
        return redirect('/admin/categories/index');
    }
}
