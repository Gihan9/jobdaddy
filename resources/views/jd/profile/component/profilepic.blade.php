<div class="contentframe profilePicFrame">
    <div class="contentFrameTitle mb-4">
        <h2>Profile Picture</h2>
        <h4>Optional</h4>
         <!--modal target data -->
         <div data-bs-toggle="modal" data-bs-target="#propic" class="profCardEditbtn"><i class="bi bi-pencil-square"></i></div>
   
    </div>
    <div class="imageFrame">
        <label for="profilePic">
        <div class="profImgHolder">
        @if($profile && $profile->profile_picture)
            <img src="{{ asset('storage/' . $profile->profile_picture) }}" alt="">
        @else
            <img src="/jd_img/profilepictemp.png" alt="Default Profile Picture">
        @endif
            
        </div>
        </label>
        
       
        <div style="font-size: 12px; font-weight:500; text-align:center;">{{ Auth::user()->email }}</div>
    </div>

</div>