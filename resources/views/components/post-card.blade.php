<?php

declare(strict_types=1);

?>
@props([
    'post',
])

<div
    class="rounded-lg p-6 transition-colors"
    style="background-color: #1a1a1b; border: 1px solid #2d2d30"
    onmouseover="this.style.borderColor='#3A3A3C'"
    onmouseout="this.style.borderColor='#2D2D30'"
>
    <!-- Post Header -->
    <div class="mb-3 flex items-center space-x-2">
        <div class="flex h-6 w-6 items-center justify-center rounded-full bg-red-600">
            <span class="text-xs font-bold text-white">CRF</span>
        </div>
        <span class="text-sm" style="color: #d7dadc">
            {{ $post['community'] ?? '/r/CRF - Clube de Regatas do Flamengo' }}
        </span>
    </div>

    <!-- Post Title -->
    <h3
        class="mb-3 cursor-pointer text-lg font-semibold"
        style="color: #ffffff"
        onmouseover="this.style.color='#4A9EFF'"
        onmouseout="this.style.color='#FFFFFF'"
    >
        {{ $post['title'] ?? 'Lorem Ipsum dolor sit amet' }}
    </h3>

    <!-- Post Content -->
    <p class="mb-4 text-sm leading-relaxed" style="color: #d7dadc">
        {{ $post['content'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget felis tincidunt, auctor leo quis, dictum neque. Proin convallis dictum hendrerit...' }}
    </p>

    <!-- Post Actions -->
    <div class="flex items-center space-x-6">
        <!-- Upvote -->
        <button
            class="flex items-center space-x-1 transition-colors"
            style="color: #818384"
            onmouseover="this.style.color='#46D160'"
            onmouseout="this.style.color='#818384'"
        >
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    fill-rule="evenodd"
                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                    clip-rule="evenodd"
                ></path>
            </svg>
            <span class="text-sm">{{ $post['upvotes'] ?? '0' }}</span>
        </button>

        <!-- Downvote -->
        <button
            class="flex items-center space-x-1 transition-colors"
            style="color: #818384"
            onmouseover="this.style.color='#FF4500'"
            onmouseout="this.style.color='#818384'"
        >
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                ></path>
            </svg>
            <span class="text-sm">{{ $post['downvotes'] ?? '0' }}</span>
        </button>

        <!-- Comments -->
        <button
            class="flex items-center space-x-1 transition-colors"
            style="color: #818384"
            onmouseover="this.style.color='#4A9EFF'"
            onmouseout="this.style.color='#818384'"
        >
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    fill-rule="evenodd"
                    d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                    clip-rule="evenodd"
                ></path>
            </svg>
            <span class="text-sm">{{ $post['comments'] ?? '0' }}</span>
        </button>

        <!-- Reply Button -->
        <button
            class="rounded-full px-4 py-1 text-sm text-white transition-colors"
            style="background-color: #0079d3"
            onmouseover="this.style.backgroundColor='#1484D6'"
            onmouseout="this.style.backgroundColor='#0079D3'"
        >
            Responder
        </button>
    </div>
</div>
<?php 
