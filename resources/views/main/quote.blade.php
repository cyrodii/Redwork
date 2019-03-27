@extends('main.layout')

@section('title', 'Quote')

@section('content')

       <!-- Blog Area Start -->
       <div id="blog">
            <div class="container" id="app">
                <div class="row white--background">
                    <div class="blog--content col-md-8 col-md-offset-2 text-center">
                        <article class="blog--post">
                            <div class="blog--post-title">
                              <h2><span>Quote</span> Bot</h2>                    
                            </div>
                            <div class="blog--post-meta">
                            </div>
                            <div id="botui-app" class="blog--post-content">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <div class="botui-app-container" id="quote-bot">
                                            <bot-ui></bot-ui>
                                    </div>
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </div>
@endsection