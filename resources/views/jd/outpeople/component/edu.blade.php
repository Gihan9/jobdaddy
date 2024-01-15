<div class="profiledetails whiteframe">
    <h5 style="margin-bottom: 30px; margin-top:10px">Academic Qualification</h5>

  <div class="row mb-3 databox">

        <!--new card -->
        @foreach($jobSeeker->educations as $edu)
        <div class="col-12 mb-4">
            <div class="profdatatype">{{ $edu->degree }}</div>
            <div class="profdata">
                <span class="college">{{ $edu->university }}</span>
            </div> 
            <div class="profdata">
                <span class="date">{{ $edu->start_date }} - {{ $edu->end_date }}</span>
                    &nbsp;|&nbsp;
                <span class="grade"> {{ $edu->grade }}</span>
            </div>
            
        </div>
        @endforeach

        <!--new card 
        <div class="col-12 mb-4">
            <div class="profdatatype">BEng (Hons) In Software Engineering</div>
            <div class="profdata">
                <span class="college">University of Colombo, Sri Lanka</span>
            </div> 
            <div class="profdata">
                <span class="date">Oct 2016 - 2017</span>
                    &nbsp;|&nbsp;
                <span class="grade"> First Class (Honor)</span>
            </div>
            
        </div>-->


       <!--new card 
       <div class="col-12 mb-3">
        <div class="profdatatype">BEng (Hons) In Software Engineering</div>
        <div class="profdata">
            <span class="college">University of Colombo, Sri Lanka</span>
        </div> 
        <div class="profdata">
            <span class="date">Oct 2016 - 2017</span>
                &nbsp;|&nbsp;
            <span class="grade"> First Class (Honor)</span>
        </div>
        
    </div>-->
     
    </div>





</div>