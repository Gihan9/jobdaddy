<div class="adfeedFrame">

    <!-- example card -->

    @forelse($jobs as $job)
  <a href="{{ route('jobs.show', $job->id) }}" class="job-details-link" style="text-decoration:none" >
    <div class="adCard">
        <div class="bookmark">
            <!-- need to handle click logic here 
            <i class="bi bi-bookmark"></i>
            <i class="bi bi-bookmark-fill"></i>-->
        </div>
        <div class="adImg">
            
            <img src="{{ asset('storage/' . $job->company_logo) }}" alt="advertisement picture">
        </div>
        <div class="adDescrip">
        <div class="time">Posted {{ $job->created_at->diffForHumans() }}</div>
            <div class="adTitle">{{ $job->position }} - {{ $job->work_type }}</div>
            <div class="Adcom">{{ $job->company_name }}</div>
            <div class="adLoc"><span class="ico"><i class="bi bi-geo-alt-fill"></i></span>{{ $job->location }}</div>
            <div class="tags">
                <span class="adtag" id="type">{{ $job->em_type }}</span>
                <span class="adtag" id="salary">LKR{{ $job->salary }}</span>
                <span class="adtag" id="jobcategory">{{ $job->category }}</span>
            </div>
             
        </div>
       
    </div>
    
    </a>
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
