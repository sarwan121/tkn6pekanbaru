<!-- resources/views/classes/create.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="row">
    {{-- <div class="col-md-6 offset-md-3"> --}}
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Tambah Class</div>
            </div>
            <form action="{{ route('classes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Class</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="homeroom_teacher_id" class="form-label">Wali Kelas</label>
                        <select name="homeroom_teacher_id" id="homeroom_teacher_id" class="form-control" required>
                            <option value="">Pilih Wali Kelas</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload Foto</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('classes.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    {{-- </div> --}}
</div>
@endsection
