<?php


namespace App\Models;

use Illuminate\Support\Facades\DB;


class ArtikelModel{
    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data){
        unset($data["_token"]);
        $new_artikel = DB::table('artikel')->insert([
                        'user_id' => 1,
                        'judul'=> $data["judul"],
                        'isi'=> $data["isi"],
                        'slug'=> str_replace(" ", "-", $data["judul"]),
                        'tag'=> $data["tag"],
        ]);
        return $new_artikel;
    }

    public static function find_by_id($id_artikel){
        $artikel = DB::table('artikel')->where('artikelId', $id_artikel)->first();
        return $artikel;
    }

    public static function update($id, $request){
        $artikel = DB::table('artikel')
                    ->where('artikelId', $id)
                    ->update([
                        'judul'=> $request["judul"],
                        'isi'=> $request["isi"],
                        'slug'=> $request["slug"],
                        'tag'=> $request["tag"],
                    ]);
        return $artikel;
    }
}

?>