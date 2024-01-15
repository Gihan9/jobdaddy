<div class="contentframe blueframe profilePicFrame">
   
    <div class="imageFrame mt-2">
        <label for="profilePic">
        <div style="position: relative">
        <div class="profImgHolder">
        <img src="{{ asset('storage/' . $company->profile_picture) }}" alt="Profile Picture">
        </div>
            
              
             
        </div>
        
        </label>       
    </div>
    <div class="contentFrameTitle mb-3 mt-2">
        <h2 style="text-align: center"  >{{ $company->name }}</h2>
        <div style="font-size: 12px; font-weight:500; text-align:center;" > 
                <span class="profdata">&nbsp; &nbsp;{{ $company->website }}</span> 
            <i  style="font-size: 15px; cursor: pointer;"  class="bi bi-box-arrow-up-right editsiteIcon"></i>
        </div>
    </div>
   

</div>
