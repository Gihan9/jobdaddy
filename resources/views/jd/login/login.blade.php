@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.loginheader')
@endsection


@section('content')
    <div class="loginFrame mt-5">
        <div class="whyAnime hidden cards">
            <img src="/jd_img/realloginpic.png" alt="">
        </div>
        @include('jd.login.component.loginform')
    </div>

@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/colors.css">
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/forms.css">
<link rel="stylesheet" href="/jd_css/login/login.css">

   
@endsection

@section('customJs')
<script>
    //to toggle password visibility
    document.addEventListener('DOMContentLoaded', function() {
        const eyebtn = document.getElementById('eyebtn');

        eyebtn.addEventListener('click', function(){
            const icon = document.getElementById('eyeicon');
            const pwd = document.getElementById('passwordLogin');
            icon.classList.toggle('bi-eye-slash-fill');

            if(pwd.getAttribute('type')==='password'){
                pwd.setAttribute('type','text')
            }
            else{
                pwd.setAttribute('type','password');
            }

        });
    });
</script>
<script>
    let typed2 = new Typed(".whyTypingBoxSpan",{
     strings: ["Software Engineer",  "Project manager","Doctor", "Graphic Designer"],
     typeSpeed:100,
     backspeed:400,
     loop:true
    });
  </script>
  
   
@endsection