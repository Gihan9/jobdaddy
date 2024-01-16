<div class="profilepicFrame whiteframe ">
    <h5 style="margin-bottom: 30px; margin-top:10px">Skills</h5>

    
   
    @foreach($jobSeeker->skills as $skill)
    <div class="row">
        <div class="tags">
            <span class="adtag" >{{ $skill->skill }}</span>
         
        </div>
    </div>
    @endforeach
</div>