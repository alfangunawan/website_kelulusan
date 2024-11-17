@extends('layouts.wrapper')
@section('content')
<div class="flex min-h-screen items-center justify-center">
  <div class="overflow-x-auto">
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 rounded ">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">Komponen Penilaian</h3>
                </div>
            </div>
        </div>

        <div class="block w-full overflow-x-auto">
            <table class="min-w-ful bg-transparent rounded-xl">
            <thead class="bg-[#f1f5f9]">
                <tr class="bg-blue-gray-100 text-gray-700">
                <th class="py-3 px-4 text-left">Nama Kegiatan</th>
                <th class="py-3 px-4 text-left">Nilai MAKS</th>
                </tr>
            </thead>
            <tbody class="text-blue-gray-900">
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">PRA OPENING</td>
                <td class="py-3 px-4">100</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">WEEK 1 ( Awakening The Inner Knight )</td>
                <td class="py-3 px-4">100</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">WEEK 2 ( The Path To Hidden Strengths ) </td>
                <td class="py-3 px-4">100</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">WEEK 3 ( Forging Knights For A Glorious Destiny )</td>
                <td class="py-3 px-4">100</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">NILAI KEAKTIFAN PESERTA</td>
                <td class="py-3 px-4">100</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4 font-bold">TOTAL NILAI</td>
                <td class="py-3 px-4 font-bold">500</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4 font-bold">NILAI MINIMUM KELULUSAN (KKM)</td>
                <td class="py-3 px-4 font-bold">70</td>
                </tr>
            </tbody>
            </table>
        </div>

    </div>
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 rounded ">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">Bobot Penilaian</h3>
                </div>
            </div>
        </div>
        <div class="block w-full overflow-x-auto">
            <table class="min-w-full bg-transparent rounded-xl">
            <thead class="bg-[#f1f5f9]">
                <tr class="bg-blue-gray-100 text-gray-700">
                <th class="py-3 px-4 text-left">Nama Kegiatan</th>
                <th class="py-3 px-4 text-left">%</th>
                </tr>
            </thead>
            <tbody class="text-blue-gray-900">
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">PRA OPENING</td>
                <td class="py-3 px-4">20</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">WEEK 1 ( Awakening The Inner Knight )</td>
                <td class="py-3 px-4">25</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">WEEK 2 ( The Path To Hidden Strengths ) </td>
                <td class="py-3 px-4">20</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">WEEK 3 ( Forging Knights For A Glorious Destiny )</td>
                <td class="py-3 px-4">25</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4">NILAI KEAKTIFAN PESERTA</td>
                <td class="py-3 px-4">10</td>
                </tr>
                <tr class="border-b border-blue-gray-200">
                <td class="py-3 px-4 font-bold">TOTAL NILAI</td>
                <td class="py-3 px-4 font-bold">100</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <button class="btn  bg-blue-500 hover:bg-blue-700 text-white font-bold"><a href="{{ url('/') }}">Kembali</a</button>
  </div>
</div>
@endsection