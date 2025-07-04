<!-- resources/views/facilities/edit.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="row">
    {{-- <div class="col-md-6 offset-md-3"> --}}
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Edit Fasilitas</div>
            </div>
            <form action="{{ route('facilities.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Fasilitas</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $facility->name }}" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Fasilitas</label>
                        <textarea name="description" id="description" class="form-control" required>{{ $facility->description }}</textarea>
                    </div>

                    <!-- Gambar -->
                    <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload Gambar</label>
                    </div>

                    @if($facility->image)
                        <div class="mb-3">
                            <label class="form-label">Foto Lama</label><br>
                            <img src="{{ asset($facility->image) }}" alt="Foto Lama" width="100">
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('facilities.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    {{-- </div> --}}
</div>
@endsection
