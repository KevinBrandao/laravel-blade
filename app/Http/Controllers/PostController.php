<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function image(Request $request)
    {
        $request->image->storeAs('public/images','file1.jpg');
        $request->image->storeAs('public/images','file2.jpg');
        return "deu cerrto";
    }
}
//  $request->image->storeAs('public','images','file1.jpg');
//$request->image->storeAs('public','images','file2.jpg');
//return "deu cerrto";

/**
 *  $request->image->storeAs('public/images','file1.jpg');
  *      $request->image->storeAs('public/images','file2.jpg');
 *       return "deu cerrto";
 */