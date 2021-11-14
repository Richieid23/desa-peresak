@extends('layouts.app')

@section('title')
    Berita Desa Peresak
@endsection

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-classic">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Berita Desa</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-static">
                        <h1 data-title-border>BERITA DESA PERESAK</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar">
                        <form action="page-search-results.html" method="get">
                            <div class="input-group mb-3 pb-1">
                                <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                                </span>
                            </div>
                        </form>
                        <h5 class="font-weight-semi-bold pt-4">Categories</h5>
                        <ul class="nav nav-list flex-column mb-5">
                            <li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Photos (4)</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">People</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="blog-posts">

                        <article class="post post-medium">
                            <div class="row mb-3">
                                <div class="col-lg-5">
                                    <div class="post-image">
                                        <a href="{{ route('berita.details', 'slug') }}">
                                            <img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="post-content">
                                        <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="{{ route('berita.details', 'slug') }}">This is a stardard post with preview image</a></h2>
                                        <p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="post-meta">
                                        <span><i class="far fa-calendar-alt"></i> January 10, 2021 </span>
                                        <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="post post-medium">
                            <div class="row mb-3">
                                <div class="col-lg-5">
                                    <div class="post-image">
                                        <div class="owl-carousel owl-theme show-nav-hover dots-inside nav-inside nav-style-1 nav-light mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}">
                                            <div>
                                                <div class="img-thumbnail border-0 p-0 d-block">
                                                    <img class="img-fluid border-radius-0" src="img/blog/medium/blog-24.jpg" alt="">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="img-thumbnail border-0 p-0 d-block">
                                                    <img class="img-fluid border-radius-0" src="img/blog/medium/blog-20.jpg" alt="">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="img-thumbnail border-0 p-0 d-block">
                                                    <img class="img-fluid border-radius-0" src="img/blog/medium/blog-21.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="post-content">
                                        <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="{{ route('berita.details', 'slug') }}">This is a stardard slider gallery post</a></h2>
                                        <p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="post-meta">
                                        <span><i class="far fa-calendar-alt"></i> January 10, 2021 </span>
                                        <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <ul class="pagination float-right">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                        </ul>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
