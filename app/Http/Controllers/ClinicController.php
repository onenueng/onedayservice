<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Clinic;

class ClinicController extends Controller
{
    public function create()
    {
        return view('clinic');
    }



    public function store()
    {
        $data = request()->all(); //รับมาจาก form

    $nameAlready = Clinic::where('name',$data['name'])->count();
    //$cl = Clinic::where('name','โรคไต')->count();
    //return $nameAlready;

    if ($nameAlready > 0){
        return back()->with('feedback', 'ชื่อคลินิกนี้มีซ้ำ')->withInput();

    }


    $clinic = new Clinic();
    $clinic->code = $data['code'];
    $clinic->name = $data['name'];
    $clinic->save();

    //return $clinic;

    return redirect()->route('home')->with('feedback', 'เพิ่มคลินิกสำเร็จแล้ว');


    }
}
