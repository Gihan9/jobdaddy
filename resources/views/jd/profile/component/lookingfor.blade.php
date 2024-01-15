<div class="contentframe lookingForFrame">
    <div class="contentFrameTitle mb-4">
        <h2>Looking For</h2>
    </div>
    @if($user->jobpreferences->isNotEmpty())
    <ul>
        @foreach($user->jobPreferences as $job)
        <div class="multiTypes row">
        <div class="jobtype">
        <form method="post" action="{{ route('jobPreferences.delete', ['jobPreferenceId' =>      $job->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="icon-button">
                <i class="bi bi-x" ></i>
            </button>
        </form>
          
            <span>{{ $job->job }}</span>
        </div>
       
    </div>
        @endforeach
        </ul>
    @else
        <p>No positions added</p>
    @endif
   
    <div  data-bs-toggle="modal" data-bs-target="#jobpref" class="profCardEditbtn mainAddIcon"> <div class="addTypeBtn">
    Add Preferred Job Roles
    </div></div>
    

</div>

<style>
    .icon-button {
        border: none;
        background: none;
        padding: 0;
        cursor: pointer;
    }
</style>