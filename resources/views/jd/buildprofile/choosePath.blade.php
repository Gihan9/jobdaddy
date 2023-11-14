@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')

@endsection
@section('content')
    <div class="choiceFrame">
        <div class="buttonFrame">
            <img src="/jd_img/findcom.png" alt="">
            <h5>Find a job</h5>
        </div>
        <div class="buttonFrame">
            <img src="/jd_img/choosecom.png" alt="">
            <h5>Hire employees</h5>
        </div>
       
    </div>


    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/profilebuilder/profilechoice.css">

   
@endsection

@section('customJs')


@endsection