<div class="profilepicFrame whiteframe">
    <div class="picBox mb-3">
        <!--<img src="/jd_img/prof.png" alt="profilepic">-->
        <img src="{{ asset('storage/' . $jobSeeker->jobseeker->profile_picture) }}" alt="">
    </div>
    <div class="userName mb-1">{{ $jobSeeker->name }}</div>
    <div class="userJob mb-3">{{ $jobSeeker->jobseeker->designation }}</div>
    <div class="cvDownloadBtn mb-3">Download CV</div>
</div>