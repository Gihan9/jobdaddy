@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')

@endsection
@section('content')
    <div>
        <div class="formBox formFrame">
            <form action="">
                <div class="actionBody">
                    <div class="progressBar">
                        <div class="number active">1</div>
                        <div class="bar"></div>
                        <div class="number">2</div>
                        <div class="bar"></div>
                        <div class="number">3</div>
                        <div class="bar"></div>
                        <div class="number">4</div>
                        <div class="bar"></div>
                        <div class="number">5</div>
                        
                    </div>

                    <div class="steps">
                        @include('jd.buildprofile.component.mydetails')
                        @include('jd.buildprofile.component.currentposition')
                        @include('jd.buildprofile.component.lookingfor')
                        @include('jd.buildprofile.component.workexp')
                        @include('jd.buildprofile.component.academic')

                        
                </div>
            </form>  
        </div>
        <div class="toggleBtns">
            <button class="prev formBtn" disabled>Previous</button>
            <button class="next formBtn">Next</button>
        </div>
    </div>


    
@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/profilebuilder/profileforms.css">
<link rel="stylesheet" href="/jd_css/forms.css">

   
@endsection

@section('customJs')
<script>

    document.addEventListener('DOMContentLoaded', function(){
        const prevbtn = document.querySelector('.toggleBtns .prev');
        const nextbtn = document.querySelector('.toggleBtns .next');
        let currentPage = 1;

        let pageMove = ()=>{
            prevbtn.disabled = false;
            nextbtn.disabled = false;
            if (currentPage === 1){
                prevbtn.disabled = true;
            }
            else if(currentPage === 5){
                nextbtn.disabled = true;
            }
            document.querySelector('.progressBar .active').classList.remove('active');
            document.querySelectorAll('.progressBar .number')[currentPage-1].classList.add('active');
            const stepNode = document.querySelector('.actionBody .steps .step');
            const width = ((currentPage-1)*stepNode.offsetWidth*-1)+"px";
            stepNode.parentNode.style.marginLeft = width;


        }

        prevbtn.addEventListener('click',function(){
            currentPage -= 1;
            pageMove();
        })

        nextbtn.addEventListener('click',function(){
            currentPage += 1;
            pageMove();
        })
    })

</script>   

@endsection