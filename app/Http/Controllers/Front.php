<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Controllers\Controller;

class Front extends Controller {

    var $categories;
    var $products;
    var $title;
    var $description;

    public function __construct() {
        $this->categories = Category::all(array('name'));
        $this->products = Product::all(array('id','name','price'));
    }

    public function index() {
        return view('home', array('title' => 'Welcome','description' => '','page' => 'home', 'categories' => $this->categories, 'products' => $this->products));
    }

    public function products() {
        return view('products', array('title' => 'Products Listing','description' => '','page' => 'products', 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_details($id) {
        $product = Product::find($id);
        return view('product_details', array('product' => $product, 'title' => $product->name,'description' => '','page' => 'products', 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_categories($name) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products', 'categories' => $this->categories, 'products' => $this->products));
    }

    public function contact_us() {
        return view('contact_us', array('title' => 'Welcome','description' => '','page' => 'contact_us'));
    }

    public function login() {
        return view('login', array('title' => 'Welcome','description' => '','page' => 'home'));
    }

    public function logout() {
        return view('login', array('title' => 'Welcome','description' => '','page' => 'home'));
    }

    public function cart() {
        return view('cart', array('title' => 'Welcome','description' => '','page' => 'home'));
    }

    public function checkout() {
        return view('checkout', array('title' => 'Welcome','description' => '','page' => 'home'));
    }

    public function search($query) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products'));
    }
}
