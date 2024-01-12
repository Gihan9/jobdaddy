<div class="summaryFrame">
    <div class="adcomImg">
    <img src="{{ asset('storage/' . $job->company_logo) }}" alt="advertisement picture">
    </div>
    <div class="adcomDescrip">
        <div class="time">Posted 3 days ago</div>
        <div class="adTitle">{{ $job->position }} - {{ $job->work_type }}</div>
        <div class="comName">{{ $job->company_name }}</div>
        <div class="tags">
            <div class="tag jobtype">
                <span class="ico"><i class="bi bi-bullseye"></i></span>
                <span>{{ $job->em_type }}</span>
            </div>
            <div class="tag location">
                <span class="ico"><i class="bi bi-geo-alt"></i></span>
                <span>{{ $job->location }}</span>
            </div>
            <div class="tag salary">
                <span class="ico"><i class="bi bi-aspect-ratio-fill"></i></span>
                <span>LKR{{ $job->salary }}</span>
            </div>
        </div>
        <div class="bookmark">
            <!-- need to handle click logic here -->
            <i class="bi bi-bookmark"></i>
            <i class="bi bi-bookmark-fill"></i>
        </div>
        <div class="sharebtn"><span class="ico"><i class="bi bi-share-fill"></i></span><span>Share</span></div>

    </div>

</div>