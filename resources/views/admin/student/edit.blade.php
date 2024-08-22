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


<div class="row">
    <div class="col-12">
        <div class="card box-shadow-0 border-info">
            <div class="card-header card-head-inverse bg-secondary">
                <h3 class="card-title text-center">Edit Data Peserta</h3>
            </div>
            <div class="card-content collpase show">
                <br>

                <div class="card-body card-dashboard">
                    <form method="post" action="/student/update/{{ $student->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $student->nim }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $student->nama }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $student->kelas }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="gen">Gen</label>
                            <input type="text" class="form-control" id="gen" name="gen" value="{{ $student->gen }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="1" {{ $student->status == 1 ? 'selected' : '' }}>Lulus</option>
                                <option value="0" {{ $student->status == 0 ? 'selected' : '' }}>Tidak Lulus</option>
                                <option value="2" {{ $student->status == 2 ? 'selected' : '' }}>Lulus Bersyarat</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" readonly>{{ $student->message }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success"> Save </button>
                        </div>
                    </form>
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