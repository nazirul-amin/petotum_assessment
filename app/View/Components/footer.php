<?php

namespace App\View\Components;

use Illuminate\View\Component;

class footer extends Component
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
                <footer>
                    <div class="footer-bottom-area">
                        <div class="container">
                            <div class="footer-border">
                                <div class="row d-flex align-items-center">
                                    <div class="col-xl-2">
                                        <div class="footer-logo mb-25">
                                            <a href="index.html"><img src="{{ asset('img/logo/logo2_footer.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="footer-copy-right text-center">
                                            <p>
                                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                                Copyright &copy;<script>
                                                    document.write(new Date().getFullYear());
                                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Scroll Up -->
                <div id="back-top">
                    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
                </div>
            blade;
    }
}
