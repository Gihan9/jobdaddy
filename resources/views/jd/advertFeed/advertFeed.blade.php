@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')
    <div class="row searchBox">
        @include('jd.advertFeed.component.search')
    </div>
    <div class="row adSquare">
        <div class="filterCol">
            <div class="filterFrame">
                @include('jd.advertFeed.component.filter')
                @include('jd.advertFeed.component.category')
            </div>
           
        </div>
        <div class="adCol">
            @include('jd.advertFeed.component.adcard')
        </div>
    </div>    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/advertFeed/search.css">
<link rel="stylesheet" href="/jd_css/advertFeed/main.css">
<link rel="stylesheet" href="/jd_css/advertFeed/adcard.css">
<link rel="stylesheet" href="/jd_css/advertFeed/filter.css">
<link rel="stylesheet" href="/jd_css/advertFeed/category.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')

<script>
    function radioSelect(radioId) {
    var labels = document.querySelectorAll('.catlabel');
    
    labels.forEach(function(label) {
        if (label.htmlFor === radioId) {
            label.style.color = 'white'; 
            label.style.background = '#1c1c52';
        } else {
            label.style.color = '#1c1c52'; 
            label.style.background = '#EAEAFF';
        }
    });
}
</script>


@endsection