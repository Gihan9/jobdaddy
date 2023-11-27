<div class="contentframe cvUploadFrame">
    <div class="contentFrameTitle mb-3">
        <h2 style="text-align: center">Upload CV</h2>
    </div>

    <div class="uploadCVBox">
        <div class="addCVBtn">
            @if($profile && $profile->cv_path)
            <p>CV: <a href="{{ asset('storage/' . $profile->cv_path) }}" target="_blank">View CV</a></p>
            @else
            <span class="btntext">No CV Added </span>
            @endif
            
            
        </div>
        <div data-bs-toggle="modal" data-bs-target="#cv" class="profCardEditbtn"><span class="btntext" style="color:white">ADD CV</span>
            <i class="bi bi-upload" style="color:white"></i></div>
        <input style="display:none;" name="cv" id="cv" type="file" accept="image/*">
    </div>
    

</div>