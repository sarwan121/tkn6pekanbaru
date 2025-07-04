<!-- resources/views/facilities/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="row">
    <a href="{{ route('facilities.create') }}" class="btn btn-primary float-right col-3 mb-2">Tambah Fasilitas</a>
    {{-- <div class="col-md-12"> --}}
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Daftar Fasilitas</h3>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($facilities as $facility)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $facility->name }}</td>
                                <td><img src="{{ asset($facility->image) }}" alt="Facility Image" width="50"></td>
                                <td>{{ $facility->description }}</td>
                                <td>
                                    <a href="{{ route('facilities.edit', $facility->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('facilities.destroy', $facility->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    {{-- </div> --}}
</div>
@endsection
