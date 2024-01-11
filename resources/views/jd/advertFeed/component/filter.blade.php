<div class="filframe">
    <div class="filTitle">
        <span>Jobs Filter By</span>
        <span><i class="bi bi-funnel-fill"></i></span>
    </div>
    <div class="filterOptions">

    <form action="{{ route('jobs.filter') }}" method="GET">
        @foreach ($predefinedFilters  as $option)
            <div class="form-check option">
                <div>
                    <label class="form-check-label" for="{{ $option }}">
                        {{ $option }}
                    </label>
                </div>
                <div>
                    <input class="form-check-input" type="checkbox" name="filters[]" id="{{ $option }}" value="{{ $option }}">
                </div>
            </div>
        @endforeach

        <button type="submit">Apply Filters</button>
    </form>
    
        <!--option -->
        <div class="form-check option">
            <div>
                <label class="form-check-label" for="privsector">
                    Private Sector
                </label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="privsector">
            </div>  
        </div>

         <!--option -->
        <div class="form-check option">
            <div>
                <label class="form-check-label" for="govsector">
                    Government Sector
                </label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="govsector">
            </div>  
        </div>

         <!--option -->
        <div class="form-check option">
            <div>
                <label class="form-check-label" for="overseas">
                    Overseas
                </label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="overseas">
            </div>  
        </div>


         <!--option -->
         <div class="form-check option">
            <div>
                <label class="form-check-label" for="freelance">
                    Freelance Jobs
                </label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="freelance">
            </div>  
        </div>

         <!--option -->
         <div class="form-check option">
            <div>
                <label class="form-check-label" for="freelance">
                    Freelance Jobs
                </label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="freelance">
            </div>  
        </div>

         <!--option -->
         <div class="form-check option">
            <div>
                <label class="form-check-label" for="ngo">
                    NGO
                </label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="ngo">
            </div>  
        </div>


        <!--option -->
        <div class="form-check option">
            <div>
                <label class="form-check-label" for="workhome">
                    Work From Home
                </label>
            </div>
            <div>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="workhome">
            </div>  
        </div>

        

    </div>
</div>