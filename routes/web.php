<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel',
            'title' => 'Judul Artikel',
            'author' => 'Ryan Fajri',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In
            expedita quaerat asperiores odit obcaecati distinctio sit quis
            impedit id, dicta perspiciatis velit porro debitis ex consectetur
            ratione? Aliquam, corrupti labore!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Ryan Fajri',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est
            eligendi aliquam nobis eius necessitatibus perferendis soluta veniam
            exercitationem possimus, doloremque nisi adipisci culpa fugit,
            aliquid voluptates. Voluptate voluptas ipsum sed!'
        ]
    ];

    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel',
            'title' => 'Judul Artikel',
            'author' => 'Ryan Fajri',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In
            expedita quaerat asperiores odit obcaecati distinctio sit quis
            impedit id, dicta perspiciatis velit porro debitis ex consectetur
            ratione? Aliquam, corrupti labore!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Ryan Fajri',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est
            eligendi aliquam nobis eius necessitatibus perferendis soluta veniam
            exercitationem possimus, doloremque nisi adipisci culpa fugit,
            aliquid voluptates. Voluptate voluptas ipsum sed!'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) {
        abort(404);
    }

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
