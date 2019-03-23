@extends('main.layout')

@section('title', 'Charity')

@section('content')

       <!-- Blog Area Start -->
       <div id="blog">
        <div class="container">
            <div class="row white--background">
                <!-- Blog Content Start -->
                <div class="blog--content col-md-8 col-md-offset-2 text-center">
                    <!-- Blog Post Start -->
                    <article class="blog--post">
                        <!-- Blog Post Image Start -->
                        <div class="blog--post-img">
                        </div>
                        <!-- Blog Post Image End -->
                        <!-- Blog Post Title Start -->
                        <div class="blog--post-title">
                            <h2>Charity's we support!</h2>
                        </div>
                        <!-- Blog Post Title End -->
                        <!-- Blog Post Meta Start -->
                        <div class="blog--post-meta">
                        </div>
                        <!-- Blog Post Meta End -->
                        <!-- Blog Post Content Start -->
                        <div class="blog--post-content">
                            <p>Here at RedWork we like to give back to the local communities that support us!</p>
                            <p>First and foremost, Every project whether big or small that we handle whether it be a website, web application, or even fixing your networking & computer issues, a % of our profits goes to charity. For the most part, we allow our clients to choose the charity of choice they would like to support, however we have a list of preselected charities that we support. Donations are rounded and made monthly to the charities of choice.</p>
                            <div class="blog--post-meta">
                                <div class="charity--row">
                                    <div class="charity--image">
                                        <a href="https://www.hslm.ca" target="_blank"><img src="/img/charity-img/lhs.png" alt="" class="img-responsive center-block"></a> 
                                    </div>
                                    <div class="charity--image">
                                        <a href="https://www.rmhc-swo.ca/" target="_blank"><img src="/img/charity-img/ronald.png" alt="" class="img-responsive center-block"></a> 
                                    </div>
                                    <div class="charity--image">
                                        <a href="http://childhealth.ca/" target="_blank"><img src="/img/charity-img/children.png" alt="" class="img-responsive center-block"></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Post Content End -->
                    </article>
                    <!-- Blog Post End -->
                </div>
                <!-- Blog Content End -->
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

@endsection