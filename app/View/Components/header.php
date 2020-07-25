<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
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
                <header>
                    <!-- Header Start -->
                    <div class="header-area">
                        <div class="main-header header-sticky">
                            <div class="container-fluid">
                                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                                    <!-- Logo -->
                                    <div class="logo">
                                        <a href="index.html" class="text-black">{{ config('app.name', 'Laravel') }}</a>
                                    </div>
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.html">Home</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-btns d-none d-lg-block f-right">
                                        <a href="#" class="border-btn"><i class="fas fa-phone"></i>01151875376</a>
                                    </div>
                                    <!-- Mobile Menu -->
                                    <div class="col-12">
                                        <div class="mobile_menu d-block d-lg-none"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header End -->
                </header>
            blade;
    }
}
