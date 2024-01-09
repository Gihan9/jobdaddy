@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')
@include('jd.companyprofile.modal.editComDetails')
@include('jd.companyprofile.modal.editabout')
@include('jd.companyprofile.modal.addfaq')
@include('jd.companyprofile.modal.companypropic')
<div class="row">
    <div class="comProfileInfo row mb-3 mt-3 order-sm-2 order-1">
        <div class="compLogoPic col-lg-4 col-md-4 col-sm-12">
            @include('jd.companyprofile.component.comlogo')
        </div>
        <div class="comDetails col-lg-8 col-md-8 col-sm-12">
            @include('jd.companyprofile.component.comprofdetails')
        </div>
   </div>
   <div class="row order-sm-1 order-md-2">
    @include('jd.companyprofile.component.comlinks')
   </div>

</div>
   
   <div class="row mb-3" style="padding-left: 10px; padding-right:10px">
    @include('jd.companyprofile.component.comdetails')
   </div>
   <div class="row mb-3" style="padding-left: 10px; padding-right:10px">
    @include('jd.companyprofile.component.faq')
   </div>
   

    

    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/comprofile/comprofile.css">
<link rel="stylesheet" href="/jd_css/comprofile/comdetails.css">
<link rel="stylesheet" href="/jd_css/comprofile/general.css">
<link rel="stylesheet" href="/jd_css/comprofile/comlinks.css">
<link rel="stylesheet" href="/jd_css/comprofile/faq.css">
<link rel="stylesheet" href="/jd_css/modal.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.date-format').on('input', function() {
            // Get the entered value
            var enteredValue = $(this).val();

            // Remove any non-digit characters
            var cleanedValue = enteredValue.replace(/\D/g, '');

            // Format the date as MM/YYYY
            if (cleanedValue.length >= 2) {
                var formattedDate = cleanedValue.substring(0, 2) + '/' + cleanedValue.substring(2, 6);
                $(this).val(formattedDate);
            }
        });
    });
</script>
@endsection