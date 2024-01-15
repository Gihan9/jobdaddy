@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')

<div class="row">
    <div class="comProfileInfo row mb-3 mt-3 order-sm-2 order-1">
        <div class="compLogoPic col-lg-4 col-md-4 col-sm-12">
            @include('jd.outcomProfile.component.comlogo')
        </div>
        <div class="comDetails col-lg-8 col-md-8 col-sm-12">
            @include('jd.outcomProfile.component.comprof')
        </div>
   </div>
   <div class="row">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
       
        <li class=" tabs" role="presentation">
          <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">About</button>
        </li>
        <li class=" tabs" role="presentation">
          <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Job Offers</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div> @include('jd.outcomProfile.component.comjobs')</div>
        </div>
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div> @include('jd.outcomProfile.component.comdetails')</div>

        </div>
      </div>
    
   </div>

</div>
   

    

    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/outcomprof/comprofile.css">
<link rel="stylesheet" href="/jd_css/outcomprof/comdetails.css">
<link rel="stylesheet" href="/jd_css/outcomprof/general.css">
<link rel="stylesheet" href="/jd_css/outcomprof/comlinks.css">
<link rel="stylesheet" href="/jd_css/outcomprof/faq.css">
<link rel="stylesheet" href="/jd_css/outcomprof/comjobs.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')

@endsection