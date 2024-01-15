<div class="relatedJobsFrame">
    <div class="blueframeTitle">Related Jobs</div>
    <hr>

    
    
    @forelse($relatedJobs as $relatedJob)
                 
              

        <div class="relatedJobsBox">
            <!--a related job card -->
            <a href="{{ route('jobs.show', $relatedJob->id) }}" class="view-details-btn" style="text-decoration:none">
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
                
                
            </div>
            </a>
    @empty
    No related jobs
    @endforelse
   

            
       
            <!--a related job card -->
           


        </div>
</div>