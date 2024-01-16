<div class="profiledetails whiteframe">
    <h5 style="margin-bottom: 30px; margin-top:10px">Personal Details </h5>

    <div class="row mb-5 ">


        <div class="col-lg-4 col-md-4 mb-3">
            <div class="profdatatype">Age</div>
        
            <div class="profdata">{{ $jobSeeker->jobseeker->age }} years</div> 
        </div>

        <div class="col-lg-4 col-md-4 mb-3">
            <div class="profdatatype">Sex</div>
        
            <div class="profdata">{{ $jobSeeker->jobseeker->sex }}</div> 
        </div>

        <div class="col-lg-4 col-md-4 mb-3">
            <div class="profdatatype">Marital Status</div>
        
            <div class="profdata">{{ $jobSeeker->jobseeker->marital_status }}</div> 
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6 col-md-6 mb-3">
            <div class="profdatatype">Contact Number (WhatsApp)</div>
        
            <div class="profdata">{{ $jobSeeker->jobseeker->phone }}</div> 
        </div>
        <div class="col-lg-6 col-md-6 mb-3">
            <div class="profdatatype">Location</div>
        
            <div class="profdata">{{ $jobSeeker->jobseeker->location }}</div> 
        </div>

    </div>





</div>