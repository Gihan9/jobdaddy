<div class="contentframe skillsFrame">
    <div class="contentFrameTitle mb-4">
        <h2>Skills</h2>
    </div>
    @if($user->skills->isNotEmpty())
    <ul>
        @foreach($user->skills as $skill)
        <div class="multiTypes row">
        <div class="jobtype">
        <form method="post" action="{{ route('skills.delete', ['skillId' =>      $skill->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit"> <i class="bi bi-x"></i></button>
        </form>
          
            <span>{{ $skill->skill }}</span>
        </div>
       
    </div>
        @endforeach
        </ul>
    @else
        <p>No skills added</p>
    @endif

    <div  data-bs-toggle="modal" data-bs-target="#skills" class="profCardEditbtn mainAddIcon"> <div class="addTypeBtn">
        Add New Skill
    </div></div>
    

</div>