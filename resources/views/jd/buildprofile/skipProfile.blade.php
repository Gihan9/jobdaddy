@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')

@endsection
@section('content')
<h2 style="text-align: center;  margin-top:25px;">Thank you for Registering</h2>
<h5 style="text-align: center;  margin-top:15px;">How about we create a profile ?</h5>
<div class="choiceFrame">
    <div class="buttonFrame skip">
        <a href="/jd/profile"><h5>Will do it later</h5></a>
    </div>
    <div class="buttonFrame create">
       <a href="/jd/build"> <h5>Create a profile</h5></a> 
    </div>
   
</div>


    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/profilebuilder/skipprofile.css">

   
@endsection

@section('customJs')


@endsection