<!-- resources/views/activities/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="row">
    <a href="{{ route('activities.create') }}" class="btn btn-primary float-right col-3 mb-2">Tambah Kegiatan</a>
    {{-- <div class="col-md-12"> --}}
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Daftar Kegiatan</h3>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Aktivitas</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $activity->activity_name }}</td>
                                <td><img src="{{ asset($activity->photo) }}" alt="Activity Photo" width="50"></td>
                                <td>{{ $activity->description }}</td>
                                <td>
                                    <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</button>
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
