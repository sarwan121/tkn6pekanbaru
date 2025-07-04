<!-- resources/views/dashboard.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="row">
    <!-- Kotak untuk jumlah kegiatan -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-primary">
            <div class="inner">
                <h3>{{ $activityCount }}</h3>
                <p>Kegiatan</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-calendar-event" style="font-size: 2rem;"></i>
            </div>
            <a href="{{ route('activities.index') }}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>

    <!-- Kotak untuk jumlah kelas -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-success">
            <div class="inner">
                <h3>{{ $classCount }}</h3>
                <p>Kelas</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-building" style="font-size: 2rem;"></i>
            </div>
            <a href="{{ route('classes.index') }}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>

    <!-- Kotak untuk jumlah guru -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-warning">
            <div class="inner">
                <h3>{{ $teacherCount }}</h3>
                <p>Guru</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-person-video" style="font-size: 2rem;"></i>
            </div>
            <a href="{{ route('teachers.index') }}" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>

    <!-- Kotak untuk jumlah fasilitas -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-danger">
            <div class="inner">
                <h3>{{ $facilityCount }}</h3>
                <p>Fasilitas</p>
            </div>
            <div class="small-box-icon">
                <i class="bi bi-tools" style="font-size: 2rem;"></i>
            </div>
            <a href="{{ route('facilities.index') }}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>
</div>
@endsection
