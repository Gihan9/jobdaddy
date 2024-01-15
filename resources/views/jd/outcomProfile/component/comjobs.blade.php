<div class="outcomjobsFrame">

        @forelse($jobs as $job)
            <div class="summaryFrame mb-3">
                <div class="adcomDescrip">
                    <div class="time">Posted {{ $job->created_at->diffForHumans() }}</div>
                    <div class="adTitle">{{ $job->position }}</div>
                    <div class="comName">{{ $job->company_name }}</div>
                    <div class="tags">
                        <span class="adtag" id="type">{{ $job->em_type }}</span>
                        <span class="adtag" id="salary">LKR {{ $job->salary }}</span>
                        <span class="adtag" id="jobcategory">{{ $job->category }}</span>
                    </div>
                    <!-- Add other job details as needed -->
                    <div class="bookmark">
                        <!-- Bookmark logic here -->
                        <i class="bi bi-bookmark"></i>
                        <i class="bi bi-bookmark-fill"></i>
                    </div>
                    <div class="sharebtn"><span class="ico"><i class="bi bi-share-fill"></i></span><span>View Offer</span></div>
                </div>
            </div>
            @empty
            No jobs Posted
        @endforelse


   


   

</div>