<?php

namespace App\View\Components;

use Illuminate\View\Component;

class scripts extends Component
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
                <!-- JS here -->
                <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
                
                <!-- Jquery, Popper, Bootstrap -->
                <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
                <script src="{{ asset('js/popper.min.js') }}"></script>
                <script src="{{ asset('js/bootstrap.min.js') }}"></script>
                
                <!-- Jquery Mobile Menu -->
                <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
                
                <!-- Jquery Slick , Owl-Carousel Plugins -->
                <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
                <script src="{{ asset('js/slick.min.js') }}"></script>
                
                <!-- One Page, Animated-HeadLin -->
                <script src="{{ asset('js/wow.min.js') }}"></script>
                <script src="{{ asset('js/animated.headline.js') }}"></script>
                <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
                
                <!-- Date Picker -->
                <script src="{{ asset('js/gijgo.min.js') }}"></script>
                
                <!-- Nice-select, sticky -->
                <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
                <script src="{{ asset('js/jquery.sticky.js') }}"></script>
                
                <!-- Progress -->
                <script src="{{ asset('js/jquery.barfiller.js') }}"></script>
                
                <!-- counter , waypoint,Hover Direction -->
                <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
                <script src="{{ asset('js/waypoints.min.js') }}"></script>
                <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
                <script src="{{ asset('js/hover-direction-snake.min.js') }}"></script>
                
                <!-- contact js -->
                <script src="{{ asset('js/contact.js') }}"></script>
                <script src="{{ asset('js/jquery.form.js') }}"></script>
                <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
                <script src="{{ asset('js/mail-script.js') }}"></script>
                <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
                
                <!-- Jquery Plugins, main Jquery -->	
                <script src="{{ asset('js/plugins.js') }}"></script>
                <script src="{{ asset('js/main.js') }}"></script>
            blade;
    }
}
