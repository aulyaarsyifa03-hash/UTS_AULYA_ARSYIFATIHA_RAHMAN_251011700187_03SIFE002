@extends('layouts.app')

@section('title', $dish->name . ' | Galeri Kuliner Daerah')

@section('content')
    <main class="container mt-5">
        <a href="{{ route('dishes.index') }}" class="btn btn-outline-dark btn-sm mb-4">Kembali ke daftar</a>

        <div class="row g-5">
            <div class="col-md-6">
                <img class="detail-img" src="{{ asset('assets/images/' . $dish->image) }}" alt="{{ $dish->name }}">
            </div>
            <div class="col-md-6">
                <div class="dish-region">{{ $dish->origin_region }}</div>
                <h1 class="dish-name display-5">{{ $dish->name }}</h1>
                <div class="dish-price fs-4 mb-4">Rp {{ number_format($dish->price, 0, ',', '.') }}</div>

                <h2 class="h5">Deskripsi</h2>
                <p>{{ $dish->description }}</p>

                <h2 class="h5 mt-4">Bahan</h2>
                <p>{{ $dish->ingredients }}</p>
            </div>
        </div>
    </main>
@endsection
