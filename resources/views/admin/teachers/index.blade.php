<!-- resources/views/dashboard.blade.php -->
@extends('layouts.admin') <!-- Gantilah sesuai nama layout yang Anda gunakan -->

@section('content')
<div class="row">
    <a href="{{ route('teachers.create') }}" class="btn btn-primary float-right col-3 mb-2">Tambah Teacher</a>
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Daftar Guru</h3>
            <!-- Tombol untuk menambah Teacher -->
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->position }}</td>
                            <td>
                                @if($teacher->photo)
                                    <img src="{{ asset($teacher->photo) }}" alt="Foto" width="50">
                                @else
                                    <span>No Photo</span>
                                @endif
                            </td>
                            <td class="actions">
                                <!-- Edit -->
                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                
                                <!-- Delete -->
                                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus guru ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
