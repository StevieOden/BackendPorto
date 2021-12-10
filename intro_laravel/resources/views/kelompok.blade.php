@extends('layouts.main')

@section('container')
<h1>
    Halaman Anggota Kelompok
</h1>

@foreach($kelompok as $item)
    <h2>
        <a href="/kelompok/{{ $item["link"] }}">
          {{ $item["nama"] }}  
        </a>
    </h2>
    <p>
        {{ $item["alamat"] }}
    </p>
    @endforeach
@endsection