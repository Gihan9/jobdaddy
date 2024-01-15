<div class="profiledetails whiteframe">
    <h5 style="margin-bottom: 30px; margin-top:10px">Work Experience</h5>

  <div class="row mb-3 databox">

  @foreach($jobSeeker->experiences as $ex)
        <!--new card -->
        <div class="col-12 mb-3">
            <div class="profdatatype">{{ $ex->job_title }}</div>
            <div class="profdata">
                <span class="company">{{ $ex->company_name }}</span>
                    &nbsp;|&nbsp;
                <span class="location">{{ $ex->location }}</span>
            </div>
            <div class="profdata">
                <span class="time">{{ $ex->s_date }} - {{ $ex->e_date }}</span>

            </div> 
        </div>
   @endforeach

         <!--new card 
         <div class="col-12 mb-3 ">
            <div class="profdatatype">Data Analyst</div>
            <div class="profdata">
                <span class="company">Techno Lanka</span>
                    &nbsp;|&nbsp;
                <span class="location">Colombo, Sri Lanka</span>
            </div>
            <div class="profdata">
                <span class="time">Mar 2021 - Present | 2 yrs 4 mos</span>

            </div> 
        </div>-->


         <!--new card
         <div class="col-12  mb-3">
            <div class="profdatatype">Data Analyst</div>
            <div class="profdata">
                <span class="company">Techno Lanka</span>
                    &nbsp;|&nbsp;
                <span class="location">Colombo, Sri Lanka</span>
            </div>
            <div class="profdata">
                <span class="time">Mar 2021 - Present | 2 yrs 4 mos</span>

            </div> 
        </div> -->
     
    </div>





</div>