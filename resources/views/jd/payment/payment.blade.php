@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')

    <div class="row paymentBox">
        <div class="backLinks">
            <!--<span class="backLink"><i class="bi bi-arrow-left"></i>Back</span>-->
            <a href="/company/profile/form"><img src="/jd_img/backbtn.png" alt="back button"></a>
        </div>
        <div class="payTitle">Payment</div>
        <div class="paySubDescrip">fill out the payment details</div>
        <div class="payContainer row" style="margin-top: 13px">
            @include('jd.payment.component.paydetail')
            @include('jd.payment.component.summary')
        </div>
    </div>

@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/payment/main.css">
<link rel="stylesheet" href="/jd_css/payment/paydetail.css">
<link rel="stylesheet" href="/jd_css/payment/summary.css">

<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')
@endsection
