@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')

    <div class="row outpeopleBox">
        <div class="backLinks">
            <!--<span class="backLink"><i class="bi bi-arrow-left"></i>Back</span>-->
            <img src="/jd_img/backbtn.png" alt="back button">
        </div>
        <div class="userFrame row">
            <div class="col-4 frames">
                @include('jd.outpeople.component.profilepic')
                @include('jd.outpeople.component.lookingfor')
                @include('jd.outpeople.component.skills')
                
            </div>
            <div class="col-8 frames">
                @include('jd.outpeople.component.profiledetails')
                @include('jd.outpeople.component.workexp')
                @include('jd.outpeople.component.edu')
            </div>
        </div>
       
    </div>

@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/outpeople/main.css">
<link rel="stylesheet" href="/jd_css/outpeople/profilepic.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')
@endsection
