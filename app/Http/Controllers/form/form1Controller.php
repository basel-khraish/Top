<?php

namespace App\Http\Controllers\form;

use App\Mail\TestMail;
use App\Rules\BioLength;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class form1Controller extends Controller
{


    //form1
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_submit(Request $request)
    {
        // dd($request->all());
        $name=htmlspecialchars($request->name);
        $age=htmlspecialchars($request->age);

        return 'Welcom '.$name.' Iam age '.$age;
    }


    //form2
    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_submit(Request $req)
    {
        // dd($req -> all());
        $name = $req->name;
        $cv = $req->cv;
        $new_name = rand().'_'.time().'_'.rand().'_'.$req->file('cv')->getClientOriginalName();
        $req->file('cv')->move(public_path('uploads'), $new_name);
    }


    //form3
    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_submit(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required | confirmed',
            'age'=> 'required',
            'bio'=>[new BioLength()]
        ]);
        return ' Done' ;
    }





    //form4
    public function form4()
    {
        return view('forms.form4');
    }


    public function form4_submit(Request $req)
    {
        $req->validate([
            'name' =>'required',
            'txt' => 'required|max:100',
        ]);

        $name = $req->name;
        $msg = $req->txt;

        Mail::to('info@Basel.com')->send(new TestMail($name, $msg));

        return 'Hi';
    }

}

