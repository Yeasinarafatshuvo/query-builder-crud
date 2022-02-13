<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
class HomeController extends Controller
{
    public function index()
    {
        $data['user_data'] = DB::table('users')->get();
        return view('user_view', $data);
    }

    public function store(Request $request) {
        
        $validate_data = $request->validate([
            'name' => 'required',
            'email' => 'required |email',
            'password' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];


        if($validate_data){
            $result = DB::table('users')->insert($data);
           
            if($result){
                return "Insert Successfull";
            }else{
                return "Operation Fail";
            }
        }

    }


    public function edit($id)
    {
        $specefic_user_data = DB::table('users')->find($id);
        return view('user_edit', compact('specefic_user_data'));
    }

    public function update(Request $request, $id)
    {
        $validate_data = $request->validate([
            'name' => 'required',
            'email' => 'required |email',
        ]);


        if($validate_data){
            $result = DB::table('users')->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make(12345)

            ]);
           
            if($result){
                return "Insert Successfull";
            }else{
                return "Operation Fail";
            }
        }

    }

    public function delete($id){
        $delete_data = DB::table('users')->where('id', $id)->delete();

        if($delete_data){
            return "Delete Successful";
        }
    }
}
