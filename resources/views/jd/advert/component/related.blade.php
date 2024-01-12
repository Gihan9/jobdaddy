<div class="relatedJobsFrame">
    <div class="blueframeTitle">Related Jobs</div>
    <hr>

    
    @foreach($relatedJobs as $relatedJob)
                 
              

        <div class="relatedJobsBox">
            <!--a related job card -->
            <div class="relatedJobCard">
                <div class="relatedImg">
                <img src="{{ asset('storage/' . $relatedJob->company_logo) }}" alt="advertisement picture">
                </div>
                <div class="relatedJobDescrip">
                    <div class="relJobTitle">{{ $relatedJob->position }}</div>
                    <div class="relCom">{{ $relatedJob->company_name }}</div>
                    <div class="relLoc">
                        <span class="ico"></span>
                        <span>{{ $relatedJob->Location }}</span>
                    </div>
                    <div class="tags">
                        <span class="adtag" id="type">{{ $relatedJob->em_type }}</span>
                        <span class="adtag" id="salary">LKR {{ $relatedJob->salary }}</span>
                    </div>
                    <div class="tags">
                        <span class="adtag" id="jobcategory">{{ $relatedJob->category }}</span>
                    </div>

                </div>
                
                <a href="{{ route('jobs.show', $relatedJob->id) }}" class="view-details-btn">View Details</a>
            </div>
    @endforeach
    No related jobs
   

            
       
            <!--a related job card -->
           


        </div>
</div>