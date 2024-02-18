<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (!View::exists('home')) {
        throw new NotFoundHttpException();
    }
    return view('home');
});

Route::get('/about', function () {
    if (!View::exists('about')) {
        throw new NotFoundHttpException();
    }
    return view('about');
});

Route::get('/services', function () {
    if (!View::exists('services')) {
        throw new NotFoundHttpException();
    }
    return view('services');
});

Route::get('/business-planning', function () {
    if (!View::exists('services')) {
        throw new NotFoundHttpException();
    }
    return view('business-planning');
});

Route::get('/market-research', function () {
    if (!View::exists('market-research')) {
        throw new NotFoundHttpException();
    }
    return view('market-research');
});

Route::get('/business-consulting', function () {
    if (!View::exists('business-consulting')) {
        throw new NotFoundHttpException();
    }
    return view('business-consulting');
});

Route::get('/audience-analysis', function () {
    if (!View::exists('audience-analysis')) {
        throw new NotFoundHttpException();
    }
    return view('audience-analysis');
});

Route::get('/testimonials', function () {
    if (!View::exists('testimonials')) {
        throw new NotFoundHttpException();
    }
    return view('testimonials');
});

Route::get('/pricing', function () {
    if (!View::exists('pricing')) {
        throw new NotFoundHttpException();
    }
    return view('pricing');
});

Route::get('/blog', function () {
    if (!View::exists('blog')) {
        throw new NotFoundHttpException();
    }
    return view('blog');
});

Route::get('/contact', function () {
    if (!View::exists('contact')) {
        throw new NotFoundHttpException();
    }
    return view('contact');
});