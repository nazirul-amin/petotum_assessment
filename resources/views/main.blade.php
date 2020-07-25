<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-styles />
    <style>
        .bg-01 {
            background-color: #848ccf!important;
        }
        .bg-02 {
            background-color: #be5683!important;
        }
        .bg-03 {
            background-color: #cbeaed!important;
        }
        .bg-04 {
            background-color: #ffe0f7!important;
        }
        .bg-05 {
            background-color: #f9d56e!important;
        }
        .phrase_container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            font-size: 25px;
        }
        .text-background {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -1;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            font-size: 50px;
        }
    </style>
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/logo/loader.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <main>
        <!-- slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__img">
                        </div>
                        <div class="hero__caption">
                            <h1 data-animation="fadeInLeft" data-delay=".4s"><span>Petotum Sdn Bhd</span> Assessment</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="hero-shape ">
                <img src="{{ asset('img/gallery/heor_shape.png') }}" alt="">
            </div>
        </div>
        <!-- slider Area End-->
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-xl-8">
                <div class="row">
                    <div id="A1" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">A1</div>
                    </div>
                    <div id="A2" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">A2</div>
                        <div id="phrase3" class="bg-01 phrase_container" draggable="true" ondragstart="drag(event)" style="font-family: {{ $phrases[2]->style }}; color: {{$phrases[2]->color}}">
                            <span>{{$phrases[2]->phrase}}</span>
                        </div>
                    </div>
                    <div id="A3" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">A3</div>
                    </div>
                    <div id="A4" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">A4</div>
                        <div id="phrase5" class="bg-02 phrase_container" draggable="true" ondragstart="drag(event)" style="font-family: {{ $phrases[4]->style }}; color: {{$phrases[4]->color}}">
                            <span>{{$phrases[4]->phrase}}</span>
                        </div>
                    </div>
                    <div id="B1" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">B1</div>
                    </div>
                    <div id="B2" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">B2</div>
                    </div>
                    <div id="B3" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">B3</div>
                        <div id="phrase2" class="bg-03 phrase_container" draggable="true" ondragstart="drag(event)" style="font-family: {{ $phrases[1]->style }}; color: {{$phrases[1]->color}}">
                            <span>{{$phrases[1]->phrase}}</span>
                        </div>
                    </div>
                    <div id="B4" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">B4</div>
                    </div>
                    <div id="C1" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">C1</div>
                        <div id="phrase1" class="bg-04 phrase_container" draggable="true" ondragstart="drag(event)" style="font-family: {{ $phrases[0]->style }}; color: {{$phrases[0]->color}}">
                            <span>{{$phrases[0]->phrase}}</span>
                        </div>
                    </div>
                    <div id="C2" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">C2</div>
                    </div>
                    <div id="C3" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">C3</div>
                    </div>
                    <div id="C4" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">C4</div>
                    </div>
                    <div id="D1" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">D1</div>
                    </div>
                    <div id="D2" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">D2</div>
                    </div>
                    <div id="D3" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">D3</div>
                    </div>
                    <div id="D4" class="col-xl-3 border border-black" ondrop="drop(event)" ondragover="allowDrop(event)" style="min-height: 100px;">
                        <div class="text-background">D4</div>
                        <div id="phrase4" class="bg-05 phrase_container" draggable="true" ondragstart="drag(event)" style="font-family: {{ $phrases[3]->style }}; color: {{$phrases[3]->color}}">
                            <span>{{$phrases[3]->phrase}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? About 1 Start-->
        <section class="about-low-area section-padding40">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-2 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <h2><span class="tittle-light">Manage your phrases</span> using the most engaging technology</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-10 col-md-12">
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">#</div>
                                    <div class="country">Phrases</div>
                                    <div class="visit">Color</div>
                                    <div class="visit">Style</div>
                                    <div class="serial">Position</div>
                                </div>
                                @foreach($phrases as $key => $phrase)    
                                    <div id="{{$phrase->id}}" class="table-row">
                                        <div class="serial">{{$key+1}}</div>
                                        <div class="country">{{$phrase->phrase}}</div>
                                        <div class="visit">
                                            <div class="default-select" id="default-select" "="">
                                                <select name="font_color" style="display: none;">
                                                    <option value="Black">Black</option>
                                                    <option value="White">White</option>
                                                    <option value="Red">Red</option>
                                                </select>
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">{{$phrase->color}}</span>
                                                    <ul class="list">
                                                        <li data-value="Black" class="option {{ ($phrase->color == 'Black') ? 'selected focus' : ''}}">Black</li>
                                                        <li data-value="White" class="option {{ ($phrase->color == 'White') ? 'selected focus' : ''}}">White</li>
                                                        <li data-value="Red" class="option {{ ($phrase->color == 'Red') ? 'selected focus' : ''}}">Red</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="visit">
                                            <div class="default-select" id="default-select" "="">
                                                <select name="font_style" style="display: none;">
                                                    <option value="Roboto">Roboto</option>
                                                    <option value="Verdana">Verdana</option>
                                                    <option value="Arial">Arial</option>
                                                    <option value="Luminari">Luminari</option>
                                                    <option value="Didot">Didot</option>
                                                    <option value="fantasy">fantasy</option>
                                                    <option value="Bookman">Bookman</option>
                                                </select>
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">{{$phrase->style}}</span>
                                                    <ul class="list">
                                                        <li data-value="Roboto" class="option {{ ($phrase->style == 'Roboto') ? 'selected focus' : ''}}">Roboto</li>
                                                        <li data-value="Verdana" class="option {{ ($phrase->style == 'Verdana') ? 'selected focus' : ''}}">Verdana</li>
                                                        <li data-value="Arial" class="option {{ ($phrase->style == 'Arial') ? 'selected focus' : ''}}">Arial</li>
                                                        <li data-value="Luminari" class="option {{ ($phrase->style == 'Luminari') ? 'selected focus' : ''}}">Luminari</li>
                                                        <li data-value="Didot" class="option {{ ($phrase->style == 'Didot') ? 'selected focus' : ''}}">Didot</li>
                                                        <li data-value="fantasy" class="option {{ ($phrase->style == 'fantasy') ? 'selected focus' : ''}}">fantasy</li>
                                                        <li data-value="Bookman" class="option {{ ($phrase->style == 'Bookman') ? 'selected focus' : ''}}">Bookman</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="position_row{{$phrase->id}}" class="serial">{{$phrase->position}}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->
    </main>

    <x-footer />
    <x-scripts />
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
            var phrase_id = data.replace("phrase", "");
            var position_id = ev.target.id;
            $("#position_row"+phrase_id+"").html(position_id);
            
            $.ajax({
                url:'{{Route("ChangePosition")}}',
                type:'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": phrase_id,
                    "data": position_id
                },
                dataType:'json',
                success:function(data) {
                    console.log(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                }
            });
        }

        $("select[name=font_style]").on('change', function() {
            var phrase_style = $(this).val();
            var phrase_id = $(this).closest('.table-row').attr('id');
            $('#phrase'+phrase_id+'').css("font-family", $(this).val());
            
            $.ajax({
                url:'{{Route("ChangeStyle")}}',
                type:'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": phrase_id,
                    "data": phrase_style
                },
                dataType:'json',
                success:function(data) {
                    console.log(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                }
            });
        });

        $("select[name=font_color]").on('change', function() {
            var phrase_color = $(this).val();
            var phrase_id = $(this).closest('.table-row').attr('id');
            $('#phrase'+phrase_id+'').css("color", $(this).val());
            
            $.ajax({
                url:'{{Route("ChangeColor")}}',
                type:'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": phrase_id,
                    "data": phrase_color
                },
                dataType:'json',
                success:function(data) {
                    console.log(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                }
            });
        });
    </script>
</body>
</html>