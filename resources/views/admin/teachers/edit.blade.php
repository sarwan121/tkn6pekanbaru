<!-- resources/views/teachers/edit.blade.php -->
@extends('layouts.admin') <!-- Gantilah sesuai nama layout yang Anda gunakan -->

@section('content')
<div class="row">
    {{-- <div class="col-md-6 offset-md-3"> --}}
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Edit Teacher</div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $teacher->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Jabatan</label>
                        <input type="text" name="position" id="position" class="form-control" value="{{ $teacher->position }}" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" name="photo" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload Foto</label>
                    </div>

                    @if($teacher->photo)
                        <div class="mb-3">
                            <label class="form-label">Foto Lama</label><br>
                            <img src="{{ asset($teacher->photo) }}" alt="Foto Lama" width="100">
                        </div>
                    @endif

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    {{-- </div> --}}
</div>
@endsection
