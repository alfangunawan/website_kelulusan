@extends('layouts.wrapper')

@section('content')
    <div class="text-center mb-4">
        <h1 class="text-3xl font-bold text-red-600">Maaf, Anda Tidak Lulus</h1>
        <p class="text-lg text-white mt-2">Kami menghargai usaha Anda. Jangan menyerah!</p>
    </div>
    <div class="tex-center mb-2">
        <img alt="Logo" src="/files/logo/knight.png" width="180px">
    </div>
    <div class="mt-4">
        <p class="text-md text-white">Berikut adalah beberapa langkah yang dapat Anda ambil:</p>
        <ul class="list-disc list-inside text-left text-white">
            <li>Periksa kembali hasil ujian Anda.</li>
            <li>Diskusikan dengan dosen atau pembimbing Anda.</li>
            <li>Persiapkan diri untuk ujian ulang.</li>
            <li>Jangan ragu untuk meminta bantuan jika diperlukan.</li>
        </ul>
    </div>
    <div class="mt-6">
        <a href="{{ url('/') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Kembali ke Beranda
        </a>
    </div>
@endsection