@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')
    <!--modals-->
    @include('jd.profile.modal.editpersonal')
    @include('jd.profile.modal.editworkexp')
    @include('jd.profile.modal.editqualification')


    <div class="personalBox row " >
        <div class="personalUploadsbox box col-lg-3 col-md-3 col-sm-12 mb-3">
            @include('jd.profile.component.profilepic')
            @include('jd.profile.component.cvupload')
        </div>
        <div class="personalDetailsbox box col-lg-9 col-md-9 col-sm-12 mb-3">
            @include('jd.profile.component.personaldetails')
        </div>
           
    </div>

    <div class="personalBox row" style="margin-top:-18px ">
        <div class="personalUploadsbox box col-lg-3 col-md-3 col-sm-12 mb-3">
            @include('jd.profile.component.lookingfor')
            @include('jd.profile.component.skills')
            @include('jd.profile.component.salary')
           
        </div>
        <div class="personalDetailsbox box col-lg-9 col-md-9 col-sm-12 mb-3">
            @include('jd.profile.component.workexp')
            @include('jd.profile.component.educationexp')
        </div>
           
       
    </div>


    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/profile/jobseeker.css">
<link rel="stylesheet" href="/jd_css/profile/general.css">
<link rel="stylesheet" href="/jd_css/modal.css">
   
@endsection

@section('customJs')
   
@endsection