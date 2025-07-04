<!-- resources/views/classes/edit.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="row">
    {{-- <div class="col-md-6 offset-md-3"> --}}
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Edit Class</div>
            </div>
            <form action="{{ route('classes.update', $class->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <!-- Nama Class -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Class</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $class->name }}" required>
                    </div>

                    <!-- Wali Kelas -->
                    <div class="mb-3">
                        <label for="homeroom_teacher_id" class="form-label">Wali Kelas</label>
                        <select name="homeroom_teacher_id" id="homeroom_teacher_id" class="form-control" required>
                            <option value="">Pilih Wali Kelas</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" 
                                    {{ $class->teacher_id == $teacher->id ? 'selected' : '' }}>
                                    {{ $teacher->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Foto Class -->
                    <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload Foto</label>
                    </div>

                    @if($class->image)
                        <div class="mb-3">
                            <label class="form-label">Foto Lama</label><br>
                            <img src="{{ asset($class->image) }}" alt="Foto Lama" width="100">
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('classes.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    {{-- </div> --}}
</div>
@endsection
