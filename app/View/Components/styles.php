<?php

namespace App\View\Components;

use Illuminate\View\Component;

class styles extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return
            <<<'blade'
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <link rel="manifest" href="site.webmanifest">
                <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

                <title>{{ config('app.name', 'Laravel') }}</title>

                <!-- CSS here -->
                <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
                <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
                <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
                <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
                <link rel="stylesheet" href="{{ asset('css/progressbar_barfiller.css') }}">
                <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
                <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
                <link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}">
                <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
                <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
                <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
                <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
                <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
                <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            blade;
    }
}
