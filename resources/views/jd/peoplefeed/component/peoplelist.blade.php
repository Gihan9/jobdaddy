<div class="peopleListBox ">

    <div class="peopleListFrame row">

        <!-- new card -->
        @foreach($jobSeekers as $jobSeeker)
            <div class="personCard col-5">
                <div class="personImgSet">
                    <div class="personImg">
                        
                        <img src="{{ asset('storage/' . $jobSeeker->profile_picture) }}" alt="">
                    </div>
                    <div class="personBtns">
                    <a href="{{ route('user.details', ['id' => $jobSeeker->user->id]) }}" class="viewProf smbtn">Profile</a>
                        
                        <div class="shortlist smbtn">Shortlist</div>
                    </div>
                </div>
        
                <div class="personDescrip">
                    <div class="personName">{{ $jobSeeker->name }}</div>
                    <div class="personJob">{{ $jobSeeker->designation }}</div>
                    <div class="personal">
                        <div class="salary"><i class="bi bi-wallet-fill"></i>{{ $jobSeeker->salary_range }} LKR</div>
                        <div class="location"><i class="bi bi-geo-alt-fill"></i>{{ $jobSeeker->location }}</div>
                    </div>
                    
                    <hr>
                    <div class="skills">Skills</div>
                    <div class="lookingFor">
                        @foreach($jobSeeker->user->skills as $ski)
                            <span class="tag">{{ $ski->skill }}</span>
                            
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

       



       






    </div>

    <!-- this is where pagination starts -->
    <div class="row pagination ">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>

              <li class="page-item"><a class="page-link" href="#">  {{ $jobSeekers->links() }}</a></li>
           
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
    </div>

   


    
</div>