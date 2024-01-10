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
        </div>
        <a href="{{ route('jobs.show', $job) }}" class="job-details-link">View Details</a>
    </div>
    @empty
            <p>No job posts available.</p>
        @endforelse

     <!-- example card -->
     <div class="adCard">
        <div class="bookmark">
            <!-- need to handle click logic here -->
            <i class="bi bi-bookmark"></i>
            <i class="bi bi-bookmark-fill"></i>
        </div>
        <div class="adImg">
            <img src="/jd_img/samplead.png" alt="advertisement picture">
        </div>
        <div class="adDescrip">
            <div class="adTitle">Data Entry Operator (Remote) - Part Time</div>
            <div class="Adcom">Express IT Pvt LTD</div>
            <div class="adLoc"><span class="ico"><i class="bi bi-geo-alt-fill"></i></span>Kurunagala, Sri Lanka</div>
            <div class="tags">
                <span class="adtag" id="type">Part-Time</span>
                <span class="adtag" id="salary">LKR 70,000 - 100,000</span>
                <span class="adtag" id="jobcategory">Data Entry Jobs</span>
            </div>
        </div>
    </div>


     <!-- example card -->
     <div class="adCard">
        <div class="bookmark">
            <!-- need to handle click logic here -->
            <i class="bi bi-bookmark"></i>
            <i class="bi bi-bookmark-fill"></i>
        </div>
        <div class="adImg">
            <img src="/jd_img/samplead3.png" alt="advertisement picture">
        </div>
        <div class="adDescrip">
            <div class="adTitle">Data Entry Operator (Remote) - Part Time</div>
            <div class="Adcom">Express IT Pvt LTD</div>
            <div class="adLoc"><span class="ico"><i class="bi bi-geo-alt-fill"></i></span>Kurunagala, Sri Lanka</div>
            <div class="tags">
                <span class="adtag" id="type">Part-Time</span>
                <span class="adtag" id="salary">LKR 70,000 - 100,000</span>
                <span class="adtag" id="jobcategory">Data Entry Jobs</span>
            </div>
        </div>
    </div>

     <!-- example card -->
     <div class="adCard">
        <div class="bookmark">
            <!-- need to handle click logic here -->
            <i class="bi bi-bookmark"></i>
            <i class="bi bi-bookmark-fill"></i>
        </div>
        <div class="adImg">
            <img src="/jd_img/samplead4.png" alt="advertisement picture">
        </div>
        <div class="adDescrip">
            <div class="adTitle">Data Entry Operator (Remote) - Part Time</div>
            <div class="Adcom">Express IT Pvt LTD</div>
            <div class="adLoc"><span class="ico"><i class="bi bi-geo-alt-fill"></i></span>Kurunagala, Sri Lanka</div>
            <div class="tags">
                <span class="adtag" id="type">Part-Time</span>
                <span class="adtag" id="salary">LKR 70,000 - 100,000</span>
                <span class="adtag" id="jobcategory">Data Entry Jobs</span>
            </div>
        </div>
    </div>


</div>
<div class="paginationBox">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
</div>