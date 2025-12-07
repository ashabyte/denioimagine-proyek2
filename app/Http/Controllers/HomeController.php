<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Halaman home untuk guest
    }

    public function dashboard()
    {
        return view('dashboard'); // Halaman dashboard untuk user yang login
    }

    public function about()
    {
        return view('about');
    }

    public function categories()
    {
        $categories = [
            [
                'slug' => 'self-photo',
                'name' => 'Self Photo',
                'description' => 'Professional self photography services',
                'icon' => 'camera',
                'color' => 'blue'
            ],
            [
                'slug' => 'yearbooks', 
                'name' => 'Yearbooks',
                'description' => 'Custom yearbook design and printing',
                'icon' => 'book',
                'color' => 'green'
            ],
            [
                'slug' => 'rental-properties',
                'name' => 'Rental Properties', 
                'description' => 'Property rental photography services',
                'icon' => 'home',
                'color' => 'purple'
            ],
            [
                'slug' => 'print',
                'name' => 'Print',
                'description' => 'High quality printing services', 
                'icon' => 'print',
                'color' => 'yellow'
            ]
        ];

        return view('categories', compact('categories'));
    }

    public function categoryDetail($slug)
    {
        // Logic untuk detail kategori
        $category = [
            'slug' => $slug,
            'name' => ucfirst(str_replace('-', ' ', $slug)),
            'description' => 'Detail description for ' . $slug
        ];

        return view('category-detail', compact('category'));
    }
}