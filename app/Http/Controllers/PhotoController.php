<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Photo;
use App\PhotoDescription;
use App\Tag;
use App\Category;

class PhotoController extends Controller
{
    function index()
    {
        $photos = Photo::all();
        foreach($photos as $photo) {
            $photo->description;
            $photo->category['name'];
            $photo->tags;
        }

        // echo "<pre>".json_encode($photos, JSON_PRETTY_PRINT)."</pre>";

         return view('/photos', ['photo' => $photos]);
    }
    function delete($id){
        PhotoDescription::where("id",$id)->delete();
        Tag::where("id",$id)->delete();
        Photo::where("id",$id)->delete();
        // Category::find($id)->delete();s
        // return redirect('/admin/categories/index');
    }
}
