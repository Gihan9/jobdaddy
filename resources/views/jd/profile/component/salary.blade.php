<div class="contentframe salaryFrame">
    <div class="contentFrameTitle mb-4">
        <h2>Salary</h2>
    </div>
    @if($profile && $profile->salary_range)
    <div class="subCardTitle jobExpType">
                    {{$profile->salary_range}} 
                    <span class="profdata"></span>
    </div>
    @else
    <div class="subCardTitle jobExpType">
                    Select Your Salary range 
                    <span class="profdata"></span>
    </div>
    @endif
    <form action="{{ route('jobseeker.updateSalary') }}" method="post">
    @csrf
    <label for="salary_range">Salary Range:</label>
    <select name="salary_range" id="salary_range">
        <option value="50000">RS.50000</option>
        <option value="100000">Rs.100000</option>
        <!-- Add more options as needed -->
    </select>

    <button type="submit">Update Salary</button>
</form>
    
    

</div>