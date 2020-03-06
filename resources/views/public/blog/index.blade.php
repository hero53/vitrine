@extends('layouts.defaults')
@section('content')


    <div class="intro-section site-blocks-cover innerpage" style="background-image: url({{asset('img/public/hero_1.jpg')}});">
        <div class="container">
            <div class="row align-items-center text-center border">
                <div class="col-lg-12 mt-5" data-aos="fade-up">
                    <h1>Our Blog</h1>
                    <p class="text-white text-center">
                        <a href="index.html">Home</a>
                        <span class="mx-2">/</span>
                        <span>Blog</span>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry">
                        <a href="show.blade.php" class="img-link">
                            <img src="{{asset('img/public/hero_1.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry">
                        <a href="show.blade.php" class="img-link">
                            <img src="{{asset('img/public/hero_1.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry">
                        <a href="show.blade.php" class="img-link">
                            <img src="{{asset('img/public/hero_1.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry">
                        <a href="show.blade.php" class="img-link">
                            <img src="{{asset('img/public/hero_1.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry">
                        <a href="show.blade.php" class="img-link">
                            <img src="{{asset('img/public/hero_1.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry">
                        <a href="show.blade.php" class="img-link">
                            <img src="{{asset('img/public/hero_1.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="blog-entry-contents">
                            <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                            <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row text-center mt-5">
                <div class="col-12">
                    <a href="{{route('blog.show')}}" class="p-3 d-inline-block">1</a>
                    <a href="#" class="p-3 d-inline-block">2</a>
                    <span class="p-3 d-inline-block text-black">3</span>
                    <a href="#" class="p-3 d-inline-block">4</a>
                    <a href="#" class="p-3 d-inline-block">5</a>
                </div>
            </div>
        </div>
    </div>
@endsection

