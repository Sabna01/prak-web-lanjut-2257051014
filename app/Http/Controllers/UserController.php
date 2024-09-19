<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($nama = ""){
        $data = [
            'nama' => $nama,
            'kelas' => 'D',
            'npm' => '2257051014'
        ];
        return view('profile', $data);
    } 
    public function create(){
        return view('create_user');
       }
}
