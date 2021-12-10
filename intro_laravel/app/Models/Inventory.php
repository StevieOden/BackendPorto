<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory 
{
    private static $data_inventory = [
        [
            "judul" => "Webcam",
            "link"  => "post-webcam",
            "deskripsi" => "Webcam adalah ..."
        ],
        [
            "judul" => "Printer",
            "link" => "post-printer",
            "deskripsi" => "Printer adalah ..." 
        ]
    ];

    public static function all()
    {
        return collect(self::$data_inventory);
    }

    public static function find($link)
    {
        $post = static::all();
        return $post->firstWhere('link', $link);
    }
}
