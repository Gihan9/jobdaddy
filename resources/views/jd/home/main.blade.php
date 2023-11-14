@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')
    @include('jd.splash')
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
<link rel="stylesheet" href="/jd_css/splash.css">
   
@endsection

@section('customJs')

<script>
    let intro = document.querySelector('.intro');
    let logo = document.querySelector('.logo-header');
    let logospan = document.querySelectorAll('.logo');

    window.addEventListener('DOMContentLoaded', ()=>{
        setTimeout(() => {
            logospan.forEach((span,idx) => {
                setTimeout(()=>{
                    span.classList.add('active');
                },(idx+1)*400)
            });

            setTimeout(()=>{
                logospan.forEach((span,idx)=>{
                    setTimeout(()=>{
                        span.classList.remove('active');
                        span.classList.add('fade');

                    },(idx+1)*50)
                })
            },2000);

            setTimeout(()=>{
                intro.style.top = '-100vh';
            },2300)

        });

        
    })
</script>
   
@endsection