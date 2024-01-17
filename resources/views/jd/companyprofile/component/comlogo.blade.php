<div class="contentframe blueframe profilePicFrame">
   
    <div class="imageFrame mt-2">
        <label for="profilePic">
        <div style="position: relative">
        <div class="profImgHolder">
         @isset($companyProfile)
            @if($companyProfile && $companyProfile->profile_picture)
                <img src="{{ asset('storage/' . $companyProfile->profile_picture) }}" alt="Profile Picture">
            @else
                <img src="/jd_img/profilepictemp.png" alt="Default Profile Picture">
            @endif
            @else
            <img src="/jd_img/profilepictemp.png" alt="Default Profile Picture">
        @endisset  
        </div>
            <label for="comphoto" class="editprofphotbtn" style="font-size: 25px; cursor: pointer; color:rgb(241, 236, 236);" d> 
            <div  data-bs-toggle="modal" data-bs-target="#companypropic"  class="profCardEditbtn" >
                <i class="bi bi-plus"></i></div>
            </label>
            
            <input ata-bs-toggle="modal" data-bs-target="#companypropic" style="display:none;" name="comphoto" id="comphoto" />
              
             
        </div>
        
        </label>       
    </div>
    <div class="contentFrameTitle mb-3 mt-2">
    @isset($companyProfile)
        @if($companyProfile->name)
        <h2 style="text-align: center"  >{{ $companyProfile->name ?? old('name') }} </h2>
        @else
        <h2 style="text-align: center"  >Company Name</h2>
        @endif
        @else
        <h2 style="text-align: center"  >Company Name</h2>
    @endisset  
        <div style="font-size: 12px; font-weight:500; text-align:center;" > 
        @isset($companyProfile) 
        @if($companyProfile->website)
                <div class="profdata">&nbsp; &nbsp;{{ $companyProfile->website ?? old('website') }} </div> 
                @else
                <div class="profdata">&nbsp; &nbsp;abc@contact.com.lk</div> 
                @endif &nbsp; 
                
                @else
                <div class="profdata">&nbsp; &nbsp;abc@contact.com.lk</div>
                @endisset   
            <i  style="font-size: 15px; cursor: pointer;"  class="bi bi-box-arrow-up-right editsiteIcon"></i>
        </div>
    </div>
  
   

</div>
