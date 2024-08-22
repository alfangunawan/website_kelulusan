@extends('layouts.wrapper')

@section('content')
    <div class="tex-center mb-2">
        <img alt="Logo" src="/files/logo/knight.png" width="180px">
    </div>

    <br>
    @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if($setting->status == 1)
    <div class="max-w-sm bg-white rounded-lg overflow-hidden shadow-lg mx-auto">
        <div class="p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Check Status Kelulusan</h2>
            <p class="text-gray-700 mb-6">Silahkan isi kolom berikut</p>
            <form action="{{ route('check') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2" for="nim">
                        NIM
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nim" type="text" placeholder="NIM" required>
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Check
                    </button>
                </div>
            </form>
        </div>
    </div>
    @else
    <div id="kick-start" class="card text-center bg-warning">
        <div class="card-header">
            <h4 class="card-title text-white">PENGUMUMAN KELULUSAN BELUM DI BUKA</h4>
            <a class="heading-elements-toggle"></a>
        </div>
    </div>
    @endif
@endsection