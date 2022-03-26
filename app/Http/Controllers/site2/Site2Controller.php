<?php

namespace App\Http\Controllers\site2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Site2Controller extends Controller
{

public function index()
{
    $title = "This Is a new Title";
    $desc = "Graphic Artist - Web Designer - Illustrator nnnnnn";
    //1 return view('site2.index')->with('title',$title)->with('desc',$desc);
    //2 return view('site2.index',compact('title','desc'));
    //3 return view('site2.index',[
    //     'main_title'=>$title,
    //     'main_desc' =>$desc
    // ]);
    $prtfolios = [
        [1 , 'Title 1' , 'Loream 1 ' , 'cake.png'],
        [2 , 'Title 2' , 'Loream 2 ' , 'cabin.png'],
        [3 , 'Title 3' , 'Loream 3 ' , 'circus.png'],
    ];
    return view('site2.index',compact('title','desc','prtfolios'));
}

public function portfolio()
{
    $prtfolios = [
        [1 , 'Title 1' , 'Loream 1 ' , 'cake.png'],
        [2 , 'Title 2' , 'Loream 2 ' , 'cabin.png'],
        [3 , 'Title 3' , 'Loream 3 ' , 'circus.png'],
    ];
    return view('site2.portfolio',compact('prtfolios'));
}

public function about()
{
    return view('site2.about');
}

public function contact()
{
    return view('site2.contact');
}


}
