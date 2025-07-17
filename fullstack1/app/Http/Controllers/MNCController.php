<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MNCController extends Controller
{
    public function table(){
        $info=DB::table('managers')->get();
        return view('Manager.table',compact('info'));
    }
    public function web(){
        return view('Manager.insert');
    }
    public function store(Request $request){
        $file=$request->file('Image');
        $name=rand();
        $ext=$file->extension();
        $img_name=$name.'.'.$ext;
        $file->move(public_path('Uploads'),$img_name);

        DB::table('managers')->insert([
            'man_name'=>$request->Man_name,
            'man_mobile_num'=>$request->Man_mobile_num,
            'man_dept'=>$request->Man_dept,
            'image' => $img_name,
        ]);
        return redirect()->route('Manager.table');
    }
    public function edit($id){
        $cha = DB::table('managers')->where('id', $id)->first();
        return view('Manager.edit', compact('cha'));
    }
    public function destroy($id){
        DB::table('managers')->where('id', $id)->delete();
        return redirect()->route('Manager.table');
    }
    public function update(Request $request, $id){
        $file=$request->file('Image');
        $name=rand();
        $ext=$file->extension();
        $img_name=$name.'.'.$ext;
        $file->move(public_path('Uploads'),$img_name);
        DB::table('managers')
            ->where('id', $id)
            ->update([
                'man_name'=>$request->Man_name,
            'man_mobile_num'=>$request->Man_mobile_num,
            'man_dept'=>$request->Man_dept,
            'image'=>$img_name,
            ]);
        return redirect()->route('Manager.table');
    }


}
