<div class="contentframe personalDetailsFrame" style="position: relative">
    <div class="editprofBtn" data-bs-toggle="modal" data-bs-target="#editComDetails"> <i class="bi bi-pencil-fill"></i><span>Edit Profile</span></div>
    <div class="form">
    <h5 style="margin-bottom: 30px; margin-top:10px">General Information</h5>
        <form action="" class="row" >
       
            <div class="col-lg-5 col-md-5 col-sm-12 mb-3">
                <div class="profdatatype">Established</div>
                @isset($companyProfile) 
                @if($companyProfile->date)
                <div class="profdata">&nbsp; &nbsp;{{ $companyProfile->date ?? old('date') }} </div> 
                @else
                <div class="profdata">&nbsp; &nbsp;11 Oct 2011</div> 
                @endif
                @else
                <div class="profdata">&nbsp; &nbsp;11 Oct 2011</div> 

                @endisset    
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 mb-3">
                <div class="profdatatype">Company email</div>
                @isset($companyProfile)
                @if($companyProfile->website)
                <div class="profdata">&nbsp; &nbsp;{{ $companyProfile->website ?? old('website') }} </div> 
                @else
                <div class="profdata">&nbsp; &nbsp;abc@contact.com.lk</div> 
                @endif
                @else
                <div class="profdata">&nbsp; &nbsp;abc@contact.com.lk</div> 
                @endisset    
            </div>
            <div class="col-md-5 col-sm-12 mb-3">
                <div class="profdatatype">Contact</div>
                @isset($companyProfile)
                @if($companyProfile->phone)
                <div class="profdata">&nbsp; &nbsp;{{ $companyProfile->phone ?? old('phone') }} </div> 
                @else
                <div class="profdata">&nbsp; &nbsp;0712345678</div> 
                @endif
                @else
                <div class="profdata">&nbsp; &nbsp;0712345678</div> 
                @endisset    
            </div>
            @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
            <div class="col-md-5 col-sm-12 mb-3">
                <div class="profdatatype">Location</div>
                @isset($companyProfile)
                @if($companyProfile->location)
                <div class="profdata">&nbsp; &nbsp;{{ $companyProfile->location ?? old('location') }} </div> 
                @else
                <div class="profdata">&nbsp; &nbsp;Enter your location</div> 
                @endif

                @else
                <div class="profdata">&nbsp; &nbsp;Enter your location</div> 
                @endisset    
            </div>
        
          

          
            
        </form>
    </div>


</div>