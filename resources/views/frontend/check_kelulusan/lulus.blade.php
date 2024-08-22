@extends('layouts.wrapper')

@section('content')
    <div class="text-center mb-4">
        <h1 class="text-3xl font-bold text-green-600">Selamat! Anda Lulus!</h1>
        <p class="text-lg text-white mt-2">Kami sangat bangga dengan pencapaian Anda.</p>
    </div>
    <div class="tex-center mb-2">
        <img alt="Logo" src="/files/logo/knight.png" width="180px">
    </div>
    <div class="mt-4">
        <p class="text-md text-white">Berikut adalah beberapa langkah selanjutnya:</p>
        <ul class="list-disc list-inside text-left text-white">
            <li>Ambil sertifikat kelulusan Anda di kantor administrasi.</li>
            <li>Persiapkan diri untuk acara wisuda.</li>
            <li>Jelajahi peluang karir yang tersedia.</li>
            <li>Terus belajar dan kembangkan keterampilan Anda.</li>
        </ul>
    </div>
    <div class="mt-6">
        <a href="{{ url('/') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Kembali ke Beranda
        </a>
    </div>
@endsection