@extends('layouts.admin.app')

@section('title')
Admin
@endsection


@section('head')
<style>
    [v-cloak]>* {
        display: none;
    }

    [v-cloak]::before {
        content: "loading...";
    }
</style>
@endsection

@section('content')


<div id="kick-start" class="card">
    <div class="card-header">
        <h4 class="card-title">Selamat datang di Web admin KELULUSAN PESERTA GENESIS !</h4>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

    </div>
    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-lg">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="icon-user text-4xl"></i>
                    </div>
                    <div class="ml-4 text-right">
                        <h3 class="text-2xl font-bold">{{ $total_student }}</h3>
                        <span>Jumlah Peserta</span>
                    </div>
                </div>
            </div>
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="icon-user-following text-4xl"></i>
                    </div>
                    <div class="ml-4 text-right">
                        <h3 class="text-2xl font-bold">{{ $student_graduated }}</h3>
                        <span>Peserta Lulus</span>
                    </div>
                </div>
            </div>
            <div class="bg-red-500 text-white p-4 rounded-lg shadow-lg">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="icon-user-unfollow text-4xl"></i>
                    </div>
                    <div class="ml-4 text-right">
                        <h3 class="text-2xl font-bold">{{ $student_pending }}</h3>
                        <span>Kelulusan Bersyarat</span>
                    </div>
                </div>
            </div>
            <div class="bg-red-500 text-white p-4 rounded-lg shadow-lg">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="icon-user-unfollow text-4xl"></i>
                    </div>
                    <div class="ml-4 text-right">
                        <h3 class="text-2xl font-bold">{{ $student_pending }}</h3>
                        <span>Peserta Tidak Lulus</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('pagescript')

<script>
    new Vue({
        el: '#app',
        data: {

        },
        methods: {


        }
    })
</script>



@endsection