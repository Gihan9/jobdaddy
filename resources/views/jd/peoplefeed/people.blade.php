@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')
    <div class="row peopleBox">
        <div class="pageTitle">People</div>
        <div class="pageSubDescrip">Identify the most suitable employer for your company</div>
        <div class="peopleSearch row">
            @include('jd.peoplefeed.component.search')
        </div>
        <div class="peopleList">
            @include('jd.peoplefeed.component.peoplelist')
        </div>
    </div>

@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/people/main.css">
<link rel="stylesheet" href="/jd_css/people/search.css">
<link rel="stylesheet" href="/jd_css/people/peoplelist.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')
@endsection
