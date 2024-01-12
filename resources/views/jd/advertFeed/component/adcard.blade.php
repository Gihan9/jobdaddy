<div class="adfeedFrame">

    <!-- example card -->

    @forelse($jobs as $job)
    <div class="adCard">
        <div class="bookmark">
            <!-- need to handle click logic here -->
            <i class="bi bi-bookmark"></i>
            <i class="bi bi-bookmark-fill"></i>
        </div>
        <div class="adImg">
            
            <img src="{{ asset('storage/' . $job->company_logo) }}" alt="advertisement picture">
        </div>
        <div class="adDescrip">
            <div class="adTitle">{{ $job->position }} - {{ $job->work_type }}</div>
            <div class="Adcom">{{ $job->company_name }}</div>
            <div class="adLoc"><span class="ico"><i class="bi bi-geo-alt-fill"></i></span>{{ $job->location }}</div>
            <div class="tags">
                <span class="adtag" id="type">{{ $job->em_type }}</span>
                <span class="adtag" id="salary">LKR{{ $job->salary }}</span>
                <span class="adtag" id="jobcategory">{{ $job->keyword1 }}</span>
            </div>
             <a href="{{ route('jobs.show', $job->id) }}" class="job-details-link">View Details</a>
        </div>
       
    </div>
    @empty
            <p>No job posts available.</p>
        @endforelse


     


</div>

<div class="paginationBox">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
        
          {{ $jobs->links() }} 
          <li class="page-item">
          {{-- Pagination links --}}
          </li>
        </ul>
      </nav>
</div>
