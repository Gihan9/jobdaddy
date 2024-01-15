<div class="searchBarFrame">
    <div class="jobtitleFrame inputFrame">
        <label for="jobtitleInput"><i class="bi bi-search"></i></label>
  
        <form action="{{ route('jobs.search') }}" method="GET" class="search-form">
        <input type="text" name="query" class="jobtitleInput" id="jobtitleInput" placeholder="I am Looking For...">
         <button type="submit" class="searchBtn">Find Job</button>
      </form>
    
    </div>
 
</div>
<div class="searchbarFooter">
   
</div>