@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
            <p class="text-muted">Himpunan Mahasiswa Sistem Informasi</p>
        </div>
        <div class="col-md-4 text-end">
            <p class="text-muted">{{ auth()->user()->name }}</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                    <div class="text-primary font-weight-bold text-uppercase mb-1">Total Anggota</div>
                    <div class="h3 mb-0">125</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                    <div class="text-success font-weight-bold text-uppercase mb-1">Acara Aktif</div>
                    <div class="h3 mb-0">8</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-left-warning shadow h-100">
                <div class="card-body">
                    <div class="text-warning font-weight-bold text-uppercase mb-1">Pengumuman</div>
                    <div class="h3 mb-0">12</div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-left-info shadow h-100">
                <div class="card-body">
                    <div class="text-info font-weight-bold text-uppercase mb-1">Donasi</div>
                    <div class="h3 mb-0">Rp 5.2M</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row">
        <!-- Recent Activity -->
        <div class="col-md-8 mb-4">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="mb-0">Aktivitas Terbaru</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <span>Anggota baru terdaftar</span>
                                <small class="text-muted">2 jam lalu</small>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <span>Acara Workshop Frontend dibuat</span>
                                <small class="text-muted">5 jam lalu</small>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <span>Pengumuman ODP baru dipublikasikan</span>
                                <small class="text-muted">1 hari lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu Pintas -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="mb-0">Menu Pintas</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="/admin/members" class="btn btn-outline-primary">Kelola Anggota</a>
                        <a href="/admin/events" class="btn btn-outline-success">Kelola Acara</a>
                        <a href="/admin/announcements" class="btn btn-outline-warning">Kelola Pengumuman</a>
                        <a href="/admin/donations" class="btn btn-outline-info">Kelola Donasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection