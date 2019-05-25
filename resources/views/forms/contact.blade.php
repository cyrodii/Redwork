@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')

<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Profile</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Forms</a></li>
                <li class="breadcrumb-item" aria-current="page">Contact</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $contactus->subject }}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-2"></div>           
            <div class="col-md-8">
                <div class="card card-profile">
                    <div class="card-body text-center">
                        <h3 class="mb-3 text-blue">{{ $contactus->subject }}</h3>
                        <p class="mb-4 text-white">Name: <span class="text-info">{{ $contactus->name }}</span></p>
                        <p class="mb-4 text-white">Email: <span class="text-info">{{ $contactus->email }}</span></p>              
                    </div>
                    <div class="card-body text-white">
                            <p class="mb-4 text-white">{{  $contactus->message  }}</span></p>       
                    </div>                      
                </div>
            </div>
            <div class="col-md-2"> </div>
    </div>
</div>
</div>

@endsection