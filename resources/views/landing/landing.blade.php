@extends('layouts.main_layout')

@section('content')
<div class="container">
      <section>
        @include('landing.component.opening')
        @include('landing.component.techlogo')
      </section>
     
</div>
<div class="topCatContainer">
  <section class="container">
    @include('landing.component.topcat')
  </section>
</div>
<div class="instructionGuideFrame">
  <section class="container">
    @include('landing.component.howguide')
  </section>
</div>
<div class="whyGuideContainer">
  <section class="container">
    @include('landing.component.whyguide')
  </section>
</div>


@endsection
@section('customCss')
    <link rel="stylesheet" href="../css/landing/opening.css">
    <link rel="stylesheet" href="../css/landing/searchbar.css">
    <link rel="stylesheet" href="../css/landing/techlogo.css">
    <link rel="stylesheet" href="../css/landing/topcat.css">
    <link rel="stylesheet" href="../css/landing/howguide.css">
    <link rel="stylesheet" href="../css/landing/whyguide.css">
@endsection
@section('customJs')
<script>
  var anime = bodymovin.loadAnimation({
    container: document.getElementById('landingLottieBox'),
    renderer: 'svg', 
    loop: true, 
    autoplay: true, 
    path: '/img/sampleImg/anime.json' 
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      const cards = document.querySelectorAll(".hidden"); 

      
      const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  
                  entry.target.classList.add("show");
                  console.log('spotted');
              }
              else{
                entry.target.classList.remove("show");
                console.log('hidden');
              }
          });
      });

      cards.forEach(card => {
          observer.observe(card);
      });
  });
</script>

<script>
  let typed = new Typed(".autoType",{
    strings: ["Find and Hire Experts",  "Find Your Dream Job"],
    typeSpeed:100,
    backspeed:400,
    loop:true
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