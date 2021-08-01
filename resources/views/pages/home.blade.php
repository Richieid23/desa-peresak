@extends('layouts.app')

@section('title')
    Beranda Desa Peresak
@endsection

@section('content')
<div role="main" class="main">
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 1000}" data-dynamic-height="['650px','650px','650px','550px','500px']" style="height: 650px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="blurIn" data-appear-animation-duration="5s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(img/slider-2.jpg); background-size: cover; background-position: center;"></div>
                    <div class="container position-relative z-index-3 h-100" data-appear-animation="blurIn" data-appear-animation-delay="500" style="background: rgba(0, 0, 0, 0.5)">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-7">
                                <div class="d-flex flex-column align-items-center">
                                    <h2 class="text-color-light font-weight-extra-bold text-12-5 line-height-1 text-center mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">INCREDIBLE DESIGNS</h2>
                                    <p class="text-4-5 text-color-light font-weight-light text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1500, 'minWindowWidth': 0, 'animationSpeed': 30}">Porto is a huge success in the one of largest world's MarketPlace</p>
                                    <a href="{{ route('profile.sejarah') }}" class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500" data-plugin-options="{'minWindowWidth': 0}">Profil Desa <i class="fas fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="blurIn" data-appear-animation-duration="5s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(img/image-2.jpg); background-size: cover; background-position: center;"></div>
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100" style="background: rgba(0, 0, 0, 0.5); display: show">
                            <div class="col-lg-7">
                                <div class="d-flex flex-column align-items-center">
                                    <h2 class="text-color-light font-weight-extra-bold text-12-5 line-height-1 text-center mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">INCREDIBLE DESIGNS</h2>
                                    <p class="text-4-5 text-color-light font-weight-light text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Porto is a huge success in the one of largest world's MarketPlace</p>
                                    <a href="{{ route('profile.sejarah') }}" class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500" data-plugin-options="{'minWindowWidth': 0}">Profil Desa <i class="fas fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>
        </div>
        <div class="owl-dots mb-5">
            <button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
        </div>
    </div>

    <div class="home-intro mb-0" id="home-intro">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p>
                        Dapatkan kemudahan pelayanan tanpa birokrasi dan cepet dengan mendaftarkan diri anda pada program <span class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">Layanan Mandiri</span>
                        <span>Hubungi admin untuk mendapatkan PIN</span>
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="get-started text-left text-lg-right">
                        <a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Masuk</a>
                        <div class="learn-more">atau <a href="#"> Tanya Desa</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="section section-parallax section-height-3 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 7, 'parallaxHeight': '150%', 'offset': 50}" data-image-src="img/image-1.jpg">
        <div class="container pb-5 mb-5">
            <div class="row text-center pb-5 mb-5">
                <div class="col-md-10 mx-md-auto pb-5 mb-5" style="background: rgba(255, 255, 255, 0.705)">
                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        <span>Desa Peresak </span>
                        <span class="word-rotator-words bg-dark">
                            <b class="is-visible">AKUR</b>
                            <b>Aman</b>
                            <b>Kompetitif</b>
                            <b>Unggul</b>
                            <b>Religius</b>
                        </span>
                        <span> beautiful and fully responsive.</span>
                    </h1>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row counters counters-sm py-4 mt-5">
            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="counter">
                    <i class="icons icon-user text-color-dark"></i>
                    <strong class="text-color-dark font-weight-extra-bold" data-to="40000">0</strong>
                    <label class="text-4 mt-1">Penduduk</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="counter">
                    <i class="icons icon-badge text-color-dark"></i>
                    <strong class="text-color-dark font-weight-extra-bold" data-to="15" data-append="+">0</strong>
                    <label class="text-4 mt-1">BUMDES</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                <div class="counter">
                    <i class="icons icon-location-pin text-color-dark"></i>
                    <strong class="text-color-dark font-weight-extra-bold" data-to="178">0</strong>
                    <label class="text-4 mt-1">Dusun</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter">
                    <i class="icons icon-chart text-color-dark"></i>
                    <strong class="text-color-dark font-weight-extra-bold" data-to="352">0</strong>
                    <label class="text-4 mt-1">Potensi Desa</label>
                </div>
            </div>
        </div>

        <hr class="solid my-3">

        <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
            <div class="col-md-4 mb-4 mb-md-0">
                <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="img/logo.jpg" alt="layout styles" />
            </div>
            <div class="col-md-8 pl-md-5">
                <h2 class="font-weight-normal text-6 mb-3">Profile Singkat <strong class="font-weight-extra-bold">Desa Peresak</strong></h2>
                <p class="text-4">There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
            </div>
        </div>

        <hr class="solid my-3">

        <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
            <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                <h2 class="font-weight-normal text-6 mb-3">Desa Peresak <strong class="font-weight-extra-bold">AKUR</strong></h2>
                <p class="text-4">With our exlusive Style Switcher you will be able to choose any color you want for your website, choose the layout style (wide / boxed), website type (one page / normal), then generate the css that will be compiled by a {less} proccessor.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
            </div>
            <div class="col-md-4 px-5 px-md-3">
                <img class="img-fluid scale-2 my-4" src="img/slider.jpg" alt="style switcher" />
            </div>
        </div>

        <hr class="solid my-3">
    </div>

    <div class="container">
        <div class="row py-5 my-5">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-left appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
                <div class="owl-carousel owl-theme nav-style-1 mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Sahirudin</h3>
                        <p class="text-2 mb-0">Kepala Desa</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                        <p class="text-2 mb-0">Sekertaris Desa</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-3.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                        <p class="text-2 mb-0">Staff</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-4.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                        <p class="text-2 mb-0">Staff</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-5.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                        <p class="text-2 mb-0">Staff</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2"> <strong class="font-weight-extra-bold">Staf Dan Aparatur </strong>Desa</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
                <a href="{{ route('profile.perangkat') }}" class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2 p-relative bottom-3">LIHAT PERANGKAT DESA</a>
            </div>
        </div>
    </div>

    <section class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <h2 class="font-weight-bold text-color-light text-6 mb-4">Berita Desa Terbaru</h2>
                </div>
            </div>
            <div class="row recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="blog-post.html" class="text-decoration-none">
                                    <img src="img/blog/blog-corporate-3-1.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto pr-0">
                                <div class="date">
                                    <span class="day bg-color-light text-color-dark font-weight-extra-bold">15</span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
                                </div>
                            </div>
                            <div class="col pl-1">
                                <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="/" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="blog-post.html" class="text-decoration-none">
                                    <img src="img/blog/blog-corporate-3-2.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto pr-0">
                                <div class="date">
                                    <span class="day bg-color-light text-color-dark font-weight-extra-bold">14</span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
                                </div>
                            </div>
                            <div class="col pl-1">
                                <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="/" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="blog-post.html" class="text-decoration-none">
                                    <img src="img/blog/blog-corporate-3-3.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto pr-0">
                                <div class="date">
                                    <span class="day bg-color-light text-color-dark font-weight-extra-bold">13</span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
                                </div>
                            </div>
                            <div class="col pl-1">
                                <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="/" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="blog-post.html" class="text-decoration-none">
                                    <img src="img/blog/blog-corporate-3-4.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto pr-0">
                                <div class="date">
                                    <span class="day bg-color-light text-color-dark font-weight-extra-bold">12</span>
                                    <span class="month bg-color-light font-weight-semibold text-color-primary text-1">JAN</span>
                                </div>
                            </div>
                            <div class="col pl-1">
                                <h4 class="line-height-3 text-4"><a href="blog-post.html" class="text-light">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                <p class="text-color-light line-height-5 opacity-6 pr-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="/" class="read-more text-color-light font-weight-semibold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-normal text-center text-6 pb-3"><strong class="font-weight-extra-bold">Layanan </strong>Desa</h2>
                </div>
            </div>
            <div class="row mb-lg-4">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-support text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Customer Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-layers text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Sliders</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-menu text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Buttons</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-doc text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">HTML5 / CSS3 / JS</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-user text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Icons</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-screen-desktop text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Lightbox</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
