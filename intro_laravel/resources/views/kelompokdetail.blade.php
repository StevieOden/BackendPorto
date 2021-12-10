@extends('layouts.main')

@section('container')
<center>
    <img src="/image/<?=$kelompokdetail["foto"]?>" height="120" width="90">
    <h2>
        {{ $kelompokdetail["nama"] }}
    </h2>
    <p>
        {{ $kelompokdetail["absen"]}}
    </p>
    <p>
        {{ $kelompokdetail["alamat"] }}
    </p>
    </center>
    <br>    
    <a href="/kelompok">Back to Kelompok</a>
@endsection