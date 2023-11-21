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
    @include('jd.profile.modal.propic')
    @include('jd.profile.modal.cv')
    @include('jd.profile.modal.skills')
    @include('jd.profile.modal.jobpef')


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