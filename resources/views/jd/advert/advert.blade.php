@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')
    <div class="row advertBox">
        <div class="backLinks">
            <!--<span class="backLink"><i class="bi bi-arrow-left"></i>Back</span>-->
            <a href="{{ url()->previous() }}"><img src="/jd_img/backbtn.png" alt="back button"></a>
          
        </div>
        <div class="adSummary">
            @include('jd.advert.component.summary')
        </div>
        <div class="adDetails">
            <div class="row">
                <div class="col-8 aboutAd">
                    @include('jd.advert.component.aboutad')
                </div>
                <div class="col-4 adProps">
                    @include('jd.advert.component.props')
                </div>
            </div>

        </div>
        <div class="similarlinks">
            @include('jd.advert.component.related')
        </div>
    
    </div>    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/advert/main.css">
<link rel="stylesheet" href="/jd_css/advert/summary.css">
<link rel="stylesheet" href="/jd_css/advert/detailcards.css">
<link rel="stylesheet" href="/jd_css/advert/related.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')

@endsection
