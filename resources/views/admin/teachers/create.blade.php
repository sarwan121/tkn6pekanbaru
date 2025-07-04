<!-- resources/views/teachers/create.blade.php -->
@extends('layouts.admin') <!-- Gantilah sesuai nama layout yang Anda gunakan -->

@section('content')
<div class="row">
    {{-- <div class="col-md-6 offset-md-3"> --}}
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Tambah Teacher</div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Jabatan</label>
                        <input type="text" name="position" id="position" class="form-control" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" name="photo" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload Foto</label>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Teacher</button>
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    {{-- </div> --}}
</div>
@endsection
