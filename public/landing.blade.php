@extends('layouts.main_layout')

@section('content')
<div class="container">
      <section>
        @include('landing.component.opening')
        @include('landing.component.techlogo')
      </section>

</div>
@endsection
@section('customCss')
    <link rel="stylesheet" href="../css/landing/opening.css">
    <link rel="stylesheet" href="../css/landing/searchbar.css">
    <link rel="stylesheet" href="../css/landing/techlogo.css">
@endsection
@section('customJs')
<script>
  const animationContainer = document.getElementById('landingLottieBox');
  const animationData = {
    container: animationContainer, // The container element
    renderer: 'svg', // 'svg', 'canvas', or 'html'
    loop: true, // Set to true if you want the animation to loop
    autoplay: true, // Set to true if you want the animation to start automatically
    path: '{{ asset('mylanding.json') }}'

  const anim = lottie.loadAnimation(animationData);
</script>

@endsection