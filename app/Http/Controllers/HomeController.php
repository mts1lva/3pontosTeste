<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

final class HomeController extends Controller
{
    public function index(): View|Factory
    {
        // Mock data for posts - in a real application, this would come from the database
        $posts = [
            [
                'id' => 1,
                'title' => 'Petição pro Mc Poze do Rodo virar nosso embaixador',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget felis tincidunt, auctor leo quis, dictum neque. Proin convallis dictum hendrerit...',
                'community' => '/r/CRF - Clube de Regatas do Flamengo',
                'upvotes' => 42,
                'downvotes' => 3,
                'comments' => 15,
            ],
            [
                'id' => 2,
                'title' => 'Lorem Ipsum dolor sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget felis tincidunt, auctor leo quis, dictum neque. Proin convallis dictum hendrerit...',
                'community' => '/r/CRF - Clube de Regatas do Flamengo',
                'upvotes' => 28,
                'downvotes' => 1,
                'comments' => 8,
            ],
            [
                'id' => 3,
                'title' => 'Lorem Ipsum dolor sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget felis tincidunt, auctor leo quis, dictum neque. Proin convallis dictum hendrerit...',
                'community' => '/r/CRF - Clube de Regatas do Flamengo',
                'upvotes' => 35,
                'downvotes' => 2,
                'comments' => 12,
            ],
            [
                'id' => 4,
                'title' => 'Lorem Ipsum dolor sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget felis tincidunt, auctor leo quis, dictum neque. Proin convallis dictum hendrerit...',
                'community' => '/r/CRF - Clube de Regatas do Flamengo',
                'upvotes' => 19,
                'downvotes' => 0,
                'comments' => 5,
            ],
        ];

        return view('home', ['posts' => $posts]);
    }
}
