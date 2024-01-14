<div class="searchBarFrame">
    <div class="comnpaniesFrame inputFrame">
        <label for="companiesInput"><i class="bi bi-search"></i></label>
        <form action="{{ route('company.search') }}" method="GET" class="search-form">
            <input type="text" name="query" class="jobtitleInput" id="jobtitleInput" placeholder="I am Looking For...">

            <button class="searchBtn">
                Search
            </button>
        </form>  
    </div>
    
   
</div>
<div class="searchbarFooter">
   
</div>