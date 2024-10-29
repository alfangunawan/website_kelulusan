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
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $student->nim }}">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $student->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $student->kelas }}">
                        </div>

                        <div class="form-group">
                            <label for="gen">Gen</label>
                            <input type="text" class="form-control" id="gen" name="gen" value="{{ $student->gen }}">
                        </div>

                        <div class="form-group">
                            <label for="gen">Pra Opening</label>
                            <input type="text" class="form-control" id="pra_opening" name="pra_opening" value="{{ $student->pra_opening }}">
                        </div>

                        <div class="form-group">
                            <label for="gen">Week 1</label>
                            <input type="text" class="form-control" id="week1" name="week1" value="{{ $student->week1 }}">
                        </div>

                        <div class="form-group">
                            <label for="gen">Week 2</label>
                            <input type="text" class="form-control" id="week2" name="week2" value="{{ $student->week2 }}">
                        </div>

                        <div class="form-group">
                            <label for="gen">Nilai Keaktifan</label>
                            <input type="text" class="form-control" id="nilai_keaktifan" name="nilai_keaktifan" value="{{ $student->nilai_keaktifan }}">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="1" {{ $student->status == 1 ? 'selected' : '' }}>Lulus</option>
                                <option value="0" {{ $student->status == 0 ? 'selected' : '' }}>Tidak Lulus</option>
                            </select>
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