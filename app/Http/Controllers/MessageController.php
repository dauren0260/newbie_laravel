<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Message as MessageModel;

class MessageController extends Controller
{
    public function index(){
        // 渲染view
        // return view("message/index", compact("lists"));
        return view(
            "message/index",
            ['name'=>'<s>Hello</s>', 'sex'=>'male', 'age'=>40,'point'=>95, 'abc'=>'English']
        );
    }

    public function dbtest(){
        // 原生語句
        $lists = DB::select("select * from member");
        dump($lists);

        // 連貫操作
        $lists = DB::table("message")->get();
        dump($lists);

        // first 查詢第一條數據
        $lists = DB::table("member")
            ->where("id","=","1")
            ->first();
        dump($lists);

        // value 查詢一個值
        $lists = DB::table("member")
        ->where("id","=","1")
        ->value("memName");
        dump($lists);

        // pluck 獲取一列
        $lists = DB::table("message")
        ->where("memberId","=","2")
        ->pluck("comment");
        dump($lists);

        // 設置字段/連表/排序/限制/分組
        $lists = DB::table("message")
        ->select("commentNo","comment","commentTime")
        ->get();

        dump($lists);


    }

    public function list()
    {
        $list = MessageModel::list();
        return view("message/list",["list"=>$list]);
    }
}



?>