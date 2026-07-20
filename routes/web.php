<?php

use Illuminate\Support\Facades\Route;

// ----- Core -----
Route::view('/', 'customer.pages.home')->name('home');
Route::view('/search', 'customer.pages.search')->name('search');
Route::view('/contact', 'customer.pages.contact')->name('contact');
Route::view('/faq', 'customer.pages.faq')->name('faq');
Route::view('/track-order', 'customer.pages.track-order')->name('track-order');
Route::view('/policy', 'customer.pages.policy')->name('policy');

// ----- Categories & Products -----
Route::view('/categories', 'customer.pages.category.index')->name('categories.index');
Route::view('/categories/{category}', 'customer.pages.category.subcategory')->name('categories.show');
Route::view('/products/{product}', 'customer.pages.product.show')->name('products.show');

// ----- Cart & Wishlist -----
Route::view('/cart', 'customer.pages.cart.index')->name('cart.index');
Route::view('/wishlist', 'customer.pages.wishlist.index')->name('wishlist.index');

// ----- Checkout -----
Route::view('/checkout/address', 'customer.pages.checkout.address')->name('checkout.address');
Route::view('/checkout/review', 'customer.pages.checkout.review')->name('checkout.review');
Route::view('/checkout/payment', 'customer.pages.checkout.payment')->name('checkout.payment');
Route::view('/checkout/success', 'customer.pages.checkout.success')->name('checkout.success');

// ----- Auth -----
Route::view('/login', 'customer.auth.login')->name('login');
Route::view('/register', 'customer.auth.register')->name('register');
Route::view('/forgot-password', 'customer.auth.forgot-password')->name('password.request');
Route::view('/reset-password', 'customer.auth.reset-password')->name('password.reset');

// ----- Profile -----
Route::view('/profile', 'customer.pages.profile.dashboard')->name('profile.dashboard');
Route::view('/profile/edit', 'customer.pages.profile.edit')->name('profile.edit');
Route::view('/profile/addresses', 'customer.pages.profile.addresses')->name('profile.addresses');
Route::view('/profile/orders', 'customer.pages.profile.orders')->name('profile.orders');
Route::view('/profile/orders/{order}', 'customer.pages.profile.order-details')->name('profile.orders.show');
