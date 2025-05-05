@extends('dashboard.master')

@section('title', 'Home')

@section('content')
<div class="dashboard">
    <div class="dashboard-header">
        <h1>Selamat Datang di TulisAja!</h1>
        <p>Ini adalah ringkasan aktivitas terbaru Anda.</p>
    </div>

    <div class="dashboard-cards">
        <div class="card">
            <h3>Total Artikel</h3>
            <p>12</p>
        </div>
        <div class="card">
            <h3>Artikel Terbit</h3>
            <p>8</p>
        </div>
        <div class="card">
            <h3>Komentar Masuk</h3>
            <p>25</p>
        </div>
    </div>

    <div class="recent-articles">
        <h2>Artikel Terbaru</h2>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cara Menulis Artikel Berkualitas</td>
                    <td>Terbit</td>
                    <td>01 Mei 2025</td>
                    <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                </tr>
                <tr>
                    <td>Tips SEO untuk Pemula</td>
                    <td>Draft</td>
                    <td>28 April 2025</td>
                    <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
