<!-- resources/views/activities/edit.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="row">
    {{-- <div class="col-md-6 offset-md-3"> --}}
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Edit Kegiatan</div>
            </div>
            <form action="{{ route('activities.update', $activity->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kegiatan</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $activity->activity_name }}" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" required>{{ $activity->description }}</textarea>
                    </div>

                    <!-- Foto -->
                    <div class="input-group mb-3">
                        <input type="file" name="photo" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload Foto</label>
                    </div>

                    @if($activity->photo)
                        <div class="mb-3">
                            <label class="form-label">Foto Lama</label><br>
                            <img src="{{ asset($activity->photo) }}" alt="Foto Lama" width="100">
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('activities.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    {{-- </div> --}}
</div>
@endsection
