@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')

    <div class="row postadBox">
        <div class="backLinks">
            <!--<span class="backLink"><i class="bi bi-arrow-left"></i>Back</span>-->
            <a href="/company/profile/form"><img src="/jd_img/backbtn.png" alt="back button"></a>
        </div>
        <div class="pageTitle">Create a Job Post</div>
        <div class="pageSubDescrip">Fill following details to post your job</div>
        <div class="pageForm row">
            @include('jd.postad.component.postadform')
        </div>
    </div>

@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/postad/main.css">
<link rel="stylesheet" href="/jd_css/postad/form.css">
<link rel="stylesheet" href="/jd_css/postad/preview.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')
@endsection
