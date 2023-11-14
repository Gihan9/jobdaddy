@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')

    <div>
        <div class="optionList">
            <div class="item item1">
                <div class="gridtext">Jobs</div>
            </div>
            <div class="item item2">
                <div class="gridtext">People</div>
            </div>
            
            <div class="item item3">
                <div class="gridtext">Upload your vacancy</div>
            </div>
            <div class="item item4">
                <a href="jd/profile">
                <div class="gridtext">Upload your CV</div>
                </a>
            </div>
            <div class="item item5">
                <div class="gridtext">Customer Support</div>
                <div>0094 76 311 45 49</div>
            </div>
        </div>
           
       
    </div>


    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/home/home.css">
   
@endsection

@section('customJs')
   
@endsection