<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller

{

    public function index()
    {
        $galleries = DB::table('galleries')->get();



        return view('welcome' , compact('galleries'));
    }


    public function slider()
    {
        $galleries = DB::table('galleries')->get();
        return view('slides', compact('galleries'));

    }





    public function store(Request $request)
    {
    	//$name = new Photos();
    	$name = $request->input('name');
    	$description = $request->input('description');
    	$cover_image = $request->file('cover_image');

    	if($cover_image){


    		$cover_imageName = $cover_image->getClientOriginalName();

    		$cover_image->move('photos/fourth/',$cover_imageName);


    	}else{
            $cover_imageName = 'noimage.jpg';

        }
//insert photo to the database

        DB::table('galleries')->insert(
            [
                'name' => $name,
                'description' => $description,
                'cover_image' => $cover_imageName
            ]
        );

    	  return view('home');



    }
}
