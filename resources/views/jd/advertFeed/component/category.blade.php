<style>
    .form-check-label.selected {
    background-color: #007bff;
    color: #fff; 
  
}
</style>

<div class="catframe">
    <div class="filTitle">
        <span>Category</span>
    </div>

    <form action="{{ route('jobs.filterByCategory') }}" method="GET" id="categoryFilterForm">
        <div class="categorylist">
            <!-- All categories -->
            <div class="form-check category">
                <label class="form-check-label catlabel {{ $selectedCategory === 'all' ? 'selected' : '' }}" for="allcat">
                    <div>All categories</div>
                    <div><input class="form-check-input" type="radio" name="category" id="allcat" value="all"  onchange="submitFilterForm()"></div>
                </label>
            </div>

            <!-- Accounting and Finance -->
            <div class="form-check category">
                <label class="form-check-label catlabel {{ $selectedCategory === 'software' ? 'selected' : '' }}" for="accfin">
                    software engineer
                    <input class="form-check-input" type="radio" name="category" id="accfin" value="software"  onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Construction Jobs -->
            <div class="form-check category">
                <label class="form-check-label catlabel {{ $selectedCategory === 'data_Entry' ? 'selected' : '' }}" for="constr">
                    Data Entry
                    <input class="form-check-input" type="radio" name="category" id="constr" value="data_Entry"  onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Design Jobs -->
            <div class="form-check category">
                <label class="form-check-label catlabel {{ $selectedCategory === 'account' ? 'selected' : '' }}" for="dsgn">
                    Accountant
                    <input class="form-check-input" type="radio" name="category" id="dsgn" value="account"  onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Engineering -->
            <div class="form-check category">
                <label class="form-check-label catlabel {{ $selectedCategory === 'engineering' ? 'selected' : '' }}" for="engnr">
                    Engineering
                    <input class="form-check-input" type="radio" name="category" id="engnr" value="engineering" onchange="submitFilterForm()">
                </label>
            </div>
        </div>
        
    </form>
</div>

<!--<form action="{{ route('jobs.index') }}" method="GET">
  
    <select name="category" id="category">
        <option value="">All Categories</option>
        <option value="software_engineer">Software engineer</option>
        <option value="data_entry">Data analysis </option>
    
    </select>
    <button type="submit">Filter</button>
</form>-->


<script>
    function submitFilterForm() {
        document.getElementById('categoryFilterForm').submit();
    }
</script>
