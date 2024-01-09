<div class="contentframe workExpFrame mb-4">
    <div class="profCardTitle">
        <div class="contentFrameTitle mb-3">
            <h2>Work Experience</h2>
            <h4>Add your working history</h4>
        </div>
        <div  data-bs-toggle="modal" data-bs-target="#editWorkExp" class="profCardEditbtn mainAddIcon"><i class="bi bi-plus-square-fill"></i></div>
    </div>
    <div class="jobs">
        
 <!-- each card should be dynamically added -->
        @foreach($experiences as $ex)
        <div class="subCards profdata mb-3">
            <div class="profCardTitle">
                <div class="subCardTitle jobExpType">
                    {{$ex->job_title}} 
                    <span class="profdata"></span>
                </div>
                <div class="subCardIcons">
                    
                    <div  data-bs-toggle="modal" data-bs-target="#editWork" ><a href="{{ route('experiences.edit', ['id' => $ex->id]) }}"><i class="bi bi-pencil-square"></i></a></div>

                    <form action="{{ route('experiences.destroy', ['experience' => $ex->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this experience?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="profCardDeleteBtn"><i class="bi bi-trash"></i></button>
                    </form>
                </div>   
            </div>
            <div class="subCardTitle jobExpPlace">
           
                <span class="minidata"> {{$ex->company_name}} | {{$ex->location}} </span>
            </div>
            <div class="profdata jobExpDate">
            
                <span class="minidata">{{$ex->s_date}} TO {{$ex->e_date}}</span>
            </div>
        </div> 
        @endforeach
        <!--new card -->
       



    </div>

    
    

</div>