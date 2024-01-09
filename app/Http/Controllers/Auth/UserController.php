<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {   //設定全部UserController中的函數皆使用auth中介層，也就是將函數加入Laravel認證機制中
        $this->middleware("auth");
    }

    public function modifyUser(){
        return view("auth.modify-user",["hint"=>"0"]);
    }

    // 修改一筆會員資料
    public function modifyUserData(Request $data)
    {
        $user = User::findOrFail($data["id"]);
        if(!(Hash::check($data["password"], $user->password)))
        {
            // 密碼錯誤，導頁
            return view("auth.modify-user", ["hint"=>"2"]);
        }else{
            $update_data = [
                "name" => $data["name"],
                "sex" => $data["sex"],
                "telephone" => $data["telephone"],
                "birthday"=> $data["birthday"],
            ];
            $user->update($update_data);
        }
        return view("auth.modify-user", ["hint"=>"1"]);
    }

    public function modifyUserPwd(){
        return view("auth.modify-pwd",["hint"=>"0"]);
    }

    public function modifyUserPwdData(Request $data)
    {
        $user = User::findOrFail($data["id"]);
        if(!(Hash::check($data["password-old"], $user->password)))
        {
            return view("auth.modify-pwd", ["hint"=>"2"]);
        }else{
            if($data["password-new"]===$data["password-conf"]){
                $update_data = [
                    "password" => Hash::make($data["password-new"]),
                ];
                $user->update($update_data);
                return view("auth.modify-pwd",["hint"=>"1"]);
            }else{
                return view("auth.modify-pwd",["hint"=>"3"]);
            }
        }
    }

    public function deleteUser()
    {
        return view("auth.delete-user", ["hint"=> "0"]);
    }

    public function deleteUserData(Request $data)
    {
        $user = User::findOrFail($data["id"]);
        if(!(Hash::check($data["password"], $user->password)))
        {
            return view("auth.delete-user", ["hint"=>"2"]);
        }else{
            $user->delete();
            return view("auth.delete-user",["hint"=>"1"]);
        }
    }

}
