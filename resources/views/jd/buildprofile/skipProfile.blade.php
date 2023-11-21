@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.skipheader')
@endsection
@section('nav')

@endsection
@section('content')
<div class="thankimgBox mb-2">
    <img src="/jd_img/thanku.png" style="width: 70%" alt="">
</div>
<h2 style="text-align: center; " class="thankuTitle ">Thank you for registering !</h2>
<h5 style="text-align: center;  margin-top:15px;" class="thankuSubTitle">How about we create a profile ?</h5>
<div class="choiceFrame mt-4">
    <div class="buttonFrame skip">
        <a href="/jd/profile"><h5>Will do it later</h5></a>
    </div>
    <div class="buttonFrame create">
       <a href="/jd/build"> <h5>Create a profile</h5></a> 
    </div>
   
</div>


    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/colors.css">
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/profilebuilder/skipprofile.css">

   
@endsection

@section('customJs')


@endsection