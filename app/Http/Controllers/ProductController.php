<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Gaming Laptop',
                'price' => '₱65,000',
                'description' => 'High performance RTX gaming laptop',
                'image' => 'images/laptop.jpg'
            ],
            [
                'name' => 'iPhone 15',
                'price' => '₱55,000',
                'description' => 'Latest Apple smartphone',
                'image' => 'images/iphone15.jpg'
            ],
            [
                'name' => 'Mechanical Keyboard',
                'price' => '₱4,500',
                'description' => 'RGB mechanical gaming keyboard',
                'image' => 'images/keyboard.jpg'
            ],
            [
                'name' => 'Gaming Mouse',
                'price' => '₱2,500',
                'description' => 'Ultra lightweight RGB mouse',
                'image' => 'images/mouse.jpg'
            ],
        ];

        return view('products', compact('products'));
    }
}
