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
                                <h2><span>Contact</span> Us</h2>
                            </div>
                            <!-- Blog Post Title End -->
                            <!-- Blog Post Meta Start -->
                            <div class="blog--post-meta">
                            </div>
                            <!-- Blog Post Meta End -->
                            <!-- Blog Post Content Start -->
                            <div class="blog--post-content">        
                                <!-- Contact Area Start -->
                                <div id="contact">
                                    <div class="container">
                                        <div class="row">
                                            <!-- Contact Form Start -->
                                            <div class="col-md-8 contact--form">
                                                <form action="/contact" method="POST">
                                                    @csrf
                                                    <div class="contact--form-status"></div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                                                <span class="highlight"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                                                <span class="highlight"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                                                        <span class="highlight"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" id="message" placeholder="Message" required></textarea>
                                                        <span class="highlight"></span>
                                                    </div>
                                                    <div class="g-recaptcha" data-sitekey="6Le-c40UAAAAAOF8h8OOGPtgDjbSsIL-ju4z79E8"></div><br>
                                                    <button id="submitForm" type="submit" class="btn--primary btn--ripple">Send</button>
                                                </form>
                                            </div>
                                            <!-- Contact Form End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact Area End -->                        
                            </div>
                            <!-- Blog Post Content End -->
                        </article>
                        <!-- Blog Post End -->
                    </div>
                    <!-- Blog Content End -->
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(".contact-form").submit(function(event) {

            var recaptcha = $("#g-recaptcha-response").val();
            if (recaptcha === "") {
                event.preventDefault();
                swal({
                    position: 'center',
                    type: 'error',
                    title: 'Please Check the reCaptcha',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            });
        </script>

@endsection