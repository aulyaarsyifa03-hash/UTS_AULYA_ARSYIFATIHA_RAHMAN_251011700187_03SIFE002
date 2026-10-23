@extends('layouts.app')

@section('title', 'Daftar Masakan | Galeri Kuliner Daerah')

@section('content')
    <header class="hero">
        <div class="container">
            <h1>Galeri Kuliner Daerah</h1>
            <p class="mt-3 mb-4">Delapan masakan khas dari Sumatera sampai Papua, lengkap dengan asal daerah, bahan, dan harganya.</p>
            <div class="meta">Aulya Arsyifatiha Rahman &middot; 251011700187 &middot; Sistem Informasi, Universitas Pamulang</div>
        </div>
    </header>

    <main class="container mt-5">
        <h2 class="mb-4">Daftar Masakan</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            @forelse ($dishes as $dish)
                <div class="col">
                    <div class="dish-card d-flex flex-column">
                        <img src="{{ asset('assets/images/' . $dish->image) }}" alt="{{ $dish->name }}">
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <div class="dish-region">{{ $dish->origin_region }}</div>
                            <h3 class="h5 dish-name my-1">{{ $dish->name }}</h3>
                            <div class="dish-price mb-3">Rp {{ number_format($dish->price, 0, ',', '.') }}</div>
                            <a href="{{ route('dishes.show', $dish) }}" class="btn btn-detail btn-sm mt-auto">Lihat detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Belum ada data. Jalankan <code>php artisan migrate:fresh --seed</code>.</p>
            @endforelse
        </div>
    </main>
@endsection
