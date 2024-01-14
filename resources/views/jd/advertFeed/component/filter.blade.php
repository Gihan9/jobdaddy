<style>
    .form-check-label.selected {
    background-color: #007bff; 
    color: #fff;
   
}
</style>
<form action="{{ route('jobs.filterByCategory') }}" method="GET" id="FilterForm">
<div class="filframe">
        <div class="filTitle">
            <span>Jobs Filter By</span>
            <span><i class="bi bi-funnel-fill"></i></span>
        </div>
        <div class="filterOptions">
            <div class="form-check option">
                <label class="form-check-label {{ $filters === 'private' ? 'selected' : '' }}" for="privsector" >
                    Private Sector
                </label>
                 <div>
                <input class="form-check-input" type="radio" name="filter" value="private" {{ (request('filter_option') == 'option1') ? 'checked' : '' }} onchange="FilterForm()"  >
                 </div>
            </div>

            <!-- Option for Government Sector -->
            <div class="form-check option">
                <label class="form-check-label {{ $filters === 'goverment' ? 'selected' : '' }}" for="govsector">
                    Government Sector
                </label> <div>
                <input class="form-check-input" type="radio" name="filter" value="goverment" {{ (request('filter_option') == 'option1') ? 'checked' : '' }} onchange="FilterForm()"  ></div>
            </div>
             <!--option -->
        

        

    </div>
</div>
</form>


<script>
    function FilterForm() {
        document.getElementById('FilterForm').submit(); 
        
    }

   
</script>
<script>
    function selectFilter(filter) {
        document.getElementById(filter).checked = true;
    }
</script>