<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controlle

{
    public function table(){
        $info = DB::table('students')->get();
        return view('product.table', compact('info'));
    }
    public function form(){
        return view('Product.form');
    }
    public function storeform(Request $request){
        $form = new student();
        $form ->stu_name =$request ->stu_name;
        $form ->stu_email =$request ->stu_email;
        $form ->stu_age =$request ->stu_age;
        $form ->stu_grade =$request ->stu_grade;
        $form -> save();
        return redirect()->route('Product.table');
    }
    public function editform($id){
        $form = student::find($id);
        return view('Product.editform', compact('form'));
    }
    public function deleteform($id){
        $form = student::find($id);
        $form->delete();
        return redirect()->route('Product.table');
    }
    public function updateform(Request $request, $id){
        $form = student::find($id);
        $form ->stu_name =$request ->stu_name;
        $form ->stu_email =$request ->stu_email;
        $form ->stu_age =$request ->stu_age;
        $form ->stu_grade =$request ->stu_grade;
        $form->save();
        return redirect()->route('Product.table');
    }
}



