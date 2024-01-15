


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
        
        


        
        
        <div class="comsearchList">
        <div class="filteredlistFrame">

<div class="searchStatement">Showing Search Results For “{{$query}}” ...</div>

<div class="searchList">

 @forelse($savedCompanies as $company)
    <div class="searchCard">
        <div class="imgSet">
        <img src="{{ asset('storage/' . $company->profile_picture) }}" alt="Profile Picture">
        </div>
        <div class="searchDescrip">
            <div class="comName">{{ $company->name }}</div>
            <div class="comLoc">{{ $company->location }}</div>
            <a href="{{ route('company.show', ['id' => $company->id]) }}"><div class="viewBtn"> View Details</div></a>
        </div>
    </div>
    <hr>
    @empty
    No results found
    @endforelse


 <!--   <div class="searchCard">
        <div class="imgSet">
            <img src="/jd_img/samplead2.png" alt="company logo">
        </div>
        <div class="searchDescrip">
            <div class="comName">Tech Lanka</div>
            <div class="comLoc">Colombo, Sri Lanka</div>
            <div class="viewBtn">View Details</div>
        </div>
    </div>
    <hr>




    <div class="searchCard">
        <div class="imgSet">
            <img src="/jd_img/samplead.png" alt="company logo">
        </div>
        <div class="searchDescrip">
            <div class="comName">Tech Lanka</div>
            <div class="comLoc">Colombo, Sri Lanka</div>
            <div class="viewBtn">View Details</div>
        </div>
    </div>
    <hr>
-->


</div>
</div>
        </div>

        
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