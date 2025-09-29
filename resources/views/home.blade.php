<?php

declare(strict_types=1);

?>
@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-4xl">
        <!-- Page Title -->
        <h1 class="mb-8 text-3xl font-bold text-white">Bem-vindo ao Reddit Clone</h1>

        <!-- Statistics Cards -->
        <div class="mb-8 grid grid-cols-1 gap-6 md:grid-cols-3">
            <x-stats-card />
            <x-stats-card />
            <x-stats-card />
        </div>

        <!-- Posts Section -->
        <div class="mb-6">
            <h2 class="mb-6 text-xl font-semibold text-white">Veja os últimos posts das comunidades que você segue</h2>

            <!-- Posts List -->
            <div class="space-y-6">
                @foreach ($posts as $post)
                    <x-post-card :post="$post" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
<?php 
