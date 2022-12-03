<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CateController extends Controller
{
    // public function index(){
    //     return view("admin.cat");
    // }
    public function store(Request $req){
        $category = new Categories();
        $category->category_name = $req["add_cate"];
        $category->save();

        return redirect("/show_cate");
    }
    public function show(){
        $categories = Categories::all();
        $url = url("/add_cate");
        $title = "Add";
        $data = compact("categories", "url", "title");

        return view("admin.cat", $data);
    }
    public function delete($id){
        Categories::find($id)->delete();
        return redirect("/show_cate");
    }
    public function update($id){
        $categories = Categories::find($id);
        $url = url("/edit_cate")."/"."$id";
        $title = "Update";
        $data = compact("categories", "url", "title");

        return view("admin.cat", $data);
    }
    public function edit($id, Request $req){
        $category = Categories::find($id);
        $category->category_name = $req["add_cate"];
        $category->save();

        return redirect("/show_cate");
    }
}
