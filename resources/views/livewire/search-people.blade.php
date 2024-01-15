<div>
    <!-- resources/views/livewire/search-people.blade.php -->

<div class="searchBarFrame">
    <div class="jobtitleFrame inputFrame">
        <label for="jobtitleInput"><i class="bi bi-search"></i></label>
       
        <form wire:submit.prevent="render" class="search-form">
            <input wire:model="query" type="text" name="query" class="jobtitleInput" id="jobtitleInput" placeholder="Search by Job Category...">
        </form>
    </div>
    
    <button wire:click="render" class="searchBtn">
        Find
    </button>
</div>

<div class="searchbarFooter">
    <!-- Display the search results -->
    @foreach($jobSeekers as $jobSeeker)
    <div class="personCard col-5">
                <div class="personImgSet">
                    <div class="personImg">
                        
                        <img src="{{ asset('storage/' . $jobSeeker->profile_picture) }}" alt="">
                    </div>
                    <div class="personBtns">
                        <div class="viewProf smbtn">Profile</div>
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
                        @foreach($jobSeeker->skills as $skill)
                            <span class="tag">{{ $skill->skill }}</span>
                            
                        @endforeach
                    </div>
                </div>
            </div>
    @endforeach

    <!-- Display pagination links -->
    {{ $jobSeekers->links() }}
</div>

</div>
