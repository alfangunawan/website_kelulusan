@extends('layouts.wrapper')
@section('content')
    <div class="p-4 rounded-md drop-shadow-lg bg-white">
        <div class="grid grid-rows-1 md:grid-cols-3 gap-4">
            <!-- Kolom Kiri: Gambar -->
            <div class="hidden col-span-1 md:flex justify-center items-center">
                <img alt="Logo" src="/files/foto/winning_knight.png" width="180px">
            </div>
            <!-- Kolom Kanan: Teks -->
            <div class="col-span-2 flex flex-col justify-center text-center">
                <div class="z-10 mb-4">
                    <h1 class="text-3xl font-bold text-green-600">Selamat, Anda Dinyatakan Lulus!</h1>
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
                    <button class="btn bg-[#84cc16] hover:bg-[#4d7c0f] text-white font-bold mr-2"><a href="{{ route('komponen.penilaian') }}">
                        Komponen Penilaian
                    </a></button>
                    <button class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold"><a href="{{ url('/') }}">
                        Kembali
                    </a></button>
                </div>
            </div>
        </div>
    </div>
@endsection