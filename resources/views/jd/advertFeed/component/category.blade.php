<div class="catframe">
    <div class="filTitle">
        <span>Category</span>
    </div>

    <form action="{{ route('jobs.filterByCategory') }}" method="GET" id="categoryFilterForm">
        <div class="categorylist">
            <!-- All categories -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="allcat">
                    <div>All categories</div>
                    <div><input class="form-check-input" type="radio" name="category" id="allcat" value="all" onchange="submitFilterForm()"></div>
                </label>
            </div>

            <!-- Accounting and Finance -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="accfin">
                    Accounting and Finance
                    <input class="form-check-input" type="radio" name="category" id="accfin" value="accounting_finance" onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Construction Jobs -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="constr">
                    Construction Jobs
                    <input class="form-check-input" type="radio" name="category" id="constr" value="construction" onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Design Jobs -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="dsgn">
                    Design Jobs
                    <input class="form-check-input" type="radio" name="category" id="dsgn" value="design" onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Engineering -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="engnr">
                    Engineering
                    <input class="form-check-input" type="radio" name="category" id="engnr" value="engineering" onchange="submitFilterForm()">
                </label>
            </div>
        </div>
    </form>
</div>

<form action="{{ route('jobs.index') }}" method="GET">
  
    <select name="category" id="category">
        <option value="">All Categories</option>
        <option value="software_engineer">Software engineer</option>
        <option value="data_entry">Data analysis </option>
        <!-- Add other categories as needed -->
    </select>
    <button type="submit">Filter</button>
</form>

<form action="{{ route('jobs.filterByCategory') }}" method="GET" id="categoryFilterForm">
<div class="categorylist">
            <!-- All categories -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="allcat">
                    <div>All categories</div>
                    <div><input class="form-check-input" type="radio" name="category" id="allcat" value="all" onchange="submitFilterForm()"></div>
                </label>
            </div>

            <!-- Accounting and Finance -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="accfin">
                    Accounting and Finance
                    <input class="form-check-input" type="radio" name="category" id="accfin" value="accounting_finance" onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Construction Jobs -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="constr">
                    Construction Jobs
                    <input class="form-check-input" type="radio" name="category" id="constr" value="construction" onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Design Jobs -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="dsgn">
                    Design Jobs
                    <input class="form-check-input" type="radio" name="category" id="dsgn" value="design" onchange="submitFilterForm()">
                </label>
            </div>

            <!-- Engineering -->
            <div class="form-check category">
                <label class="form-check-label catlabel" for="engnr">
                    Engineering
                    <input class="form-check-input" type="radio" name="category" id="engnr" value="engineering" onchange="submitFilterForm()">
                </label>
            </div>
        </div>
    </form>
<script>
    function submitFilterForm() {
        document.getElementById('categoryFilterForm').submit();
    }
</script>
