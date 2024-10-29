@extends('layouts.wrapper')

@section('content')
<div class="p-4 rounded-md drop-shadow-lg bg-white">
        <div class="grid grid-rows-1 md:grid-cols-3 gap-4">
            <!-- Kolom Kiri: Gambar -->
            <div class="hidden col-span-1 md:flex justify-center items-center">
                <img alt="Logo" src="/files/foto/lose_knight.png" width="180px">
            </div>
            <!-- Kolom Kanan: Teks -->
            <div class="col-span-2 flex flex-col justify-center text-center">
                <div class="z-10 mb-4">
                    <h1 class="text-3xl font-bold text-red-600">Maaf, Anda Dinyatakan Tidak Lulus</h1>
                </div>
                <div class="grid grid-cols-2">
                    <div class="flex flex-col items-start">
                        <p class="text-lg font-bold">Nama : {{ $student->nama }}</p>
                        <p class="text-lg font-bold">Kelas : {{ $student->kelas }}</p>
                        <p class="text-lg font-bold">Gen : {{ $student->gen }}</p>
                    </div>
                    <div class="flex flex-col justift-center items-center">
                        <div class="text-lg">Nilai Total</div>
                        <div class="text-5xl font-bold">{{ $student->total_nilai }}</div>
                    </div>
                </div>
                <div class="stats bg-white mt-4">
                    <div class="stat place-items-center">
                        <div class="text-lg">Pra Opening</div>
                        <div class="text-2xl font-bold">{{ $student->pra_opening }}</div>
                    </div>

                    <div class="stat place-items-center">
                        <div class="text-lg">Week 1</div>
                        <div class="text-2xl font-bold">{{ $student->week1 }}</div>
                    </div>

                    <div class="stat place-items-center">
                        <div class="text-lg">Week 2</div>
                        <div class="text-2xl font-bold">{{ $student->week2 }}</div>
                    </div>

                    <div class="stat place-items-center">
                        <div class="text-lg">Nilai Keaktifan</div>
                        <div class="text-2xl font-bold">{{ $student->nilai_keaktifan }}</div>
                    </div>
                </div>
                <div class="mt-5 flex justify-end">
                    <a href="{{ url('/') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection