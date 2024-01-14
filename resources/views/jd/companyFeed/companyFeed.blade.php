@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')
    <div class="row companiesBox">
        <div class="companiesTitle">Companies</div>
        <div class="pageSubDescrip">Discover excellent workplaces to work</div>
        <div class="companySearch row">
            @include('jd.companyFeed.component.search')
        </div>
        <div class="companyList">
            @include('jd.companyFeed.component.companylist')
            @include('jd.companyFeed.component.categories')
        </div>  


        {{--this part is only visisble when search is active}}
        <div class="comsearchList">
            @include('jd.companyFeed.component.filteredlist')
        </div>

        --}}
    </div>

@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/companyfeed/main.css">
<link rel="stylesheet" href="/jd_css/companyfeed/search.css">
<link rel="stylesheet" href="/jd_css/companyfeed/companies.css">
<link rel="stylesheet" href="/jd_css/companyfeed/categories.css">
<link rel="stylesheet" href="/jd_css/companyfeed/filteredlist.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')
@endsection