<div class="profilepicFrame whiteframe ">
    <h5 style="margin-bottom: 30px; margin-top:10px">Looking For</h5>

    @foreach($jobSeeker->jobPreferences as $jobPre)
    <div class="row">
        <div class="tags">
            <span class="adtag" >{{ $jobPre->job }}</span>
            
        </div>
    </div>
    @endforeach
</div>