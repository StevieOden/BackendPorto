<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok 
{
    private static $data_kelompok = [
        [
            "nama" => "Stevie",
            "link"  => "post-stevie",
            "alamat" => "Kudus",
            "absen" => "31",
            "foto" => "stevie.jpg"
        ],
        [
            "nama" => "Wahyu",
            "link"  => "post-wahyu",
            "alamat" => "Pati",
            "absen" => "33",
            "foto" => "wahyu.jpeg" 
        ],
        [
            "nama" => "Robert",
            "link"  => "post-robert",
            "alamat" => "Surabaya",
            "absen" => "26",
            "foto" => "robert.jpg"
        ]
    ];

    public static function all()
    {
        return collect(self::$data_kelompok);
    }

    public static function find($link)
    {
        $kelompokdetail = static::all();
        return $kelompokdetail->firstWhere('link', $link);
    }
}
