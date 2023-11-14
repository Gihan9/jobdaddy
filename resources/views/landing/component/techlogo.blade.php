<div class="techLogoStrip">
@foreach($brands as $brand)

    <img src="{{asset('uploads/'.$brand->brand_img)}}" class="techLogoImg" alt="">
    

@endforeach
</div>