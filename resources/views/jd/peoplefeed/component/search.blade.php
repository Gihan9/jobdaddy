<div class="searchBarFrame">
    <div class="jobtitleFrame inputFrame">
        <label for="jobtitleInput"><i class="bi bi-search"></i></label>
       
        <form action="{{ route('people.search') }}" method="GET" class="search-form">
        <input type="text" name="query" class="jobtitleInput" id="jobtitleInput" placeholder="Search by Job Category...">
      
    </div>
    
    <button class="searchBtn">
        Find
    </button>
</form>
</div>
<div class="searchbarFooter">
   
</div>