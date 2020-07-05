<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class UserModel{


    public static function find_by_id($id_user){
        $user = DB::table('user')->where('userId', $id_user)->first();
        return $user;
    }



}


?>