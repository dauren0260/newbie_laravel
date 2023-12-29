<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = "message as g";
    protected $primarykey = "commentNo";

    public static function list()
    {
        $list = self::join("member as m", "g.memberId","=","m.id")
        ->select("m.id", "m.memName" , "g.comment" , "g.commentTime")
        ->get();

        return $list;
    }
}
