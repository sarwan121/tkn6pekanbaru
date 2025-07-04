<!-- resources/views/classes/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="row">
    <a href="{{ route('classes.create') }}" class="btn btn-primary float-right col-3 mb-2">Tambah Class</a>

    {{-- <div class="col-md-12"> --}}
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Daftar Class</h3>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Class</th>
                            <th>Foto</th>
                            <th>Wali Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $class)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $class->name }}</td>
                                <td>
                                    @if($class->image)
                                        <img src="{{ asset($class->image) }}" width="50">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>{{ $class->teacher->name }}</td>
                                <td>
                                    <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus class ini?')">Hapus</button>
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
