<div class="contentframe workExpFrame">
    <div class="profCardTitle">
        <div class="contentFrameTitle mb-3">
            <h2>Academic Qualification</h2>
            <h4>Add your academic qualification</h4>
        </div>
        <div data-bs-toggle="modal" data-bs-target="#editAcademic" class="profCardEditbtn mainAddIcon"><i class="bi bi-plus-square-fill"></i></div>
    </div>
    <div class="educations">
        
 <!-- each card should be dynamically added -->
            @foreach($educations as $ed)
            <div class="subCards profdata mb-3">
                <div class="profCardTitle">
                    <div class="subCardTitle">{{$ed->degree}} </div>
                    <div class="subCardIcons">
                        <div class="profCardEditbtn "><i class="bi bi-pencil-square"></i></div>
                    <form action="{{ route('educations.destroy', ['education' => $ed->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this education qualification?')" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="profCardDeleteBtn delbtn"><i class="bi bi-trash"></i></button>
                    </form>
                    </div>
                    
                </div>
                <div class="profdata jobExpPlace">{{$ed->university}}</div>
                <div class="profdata jobExpDate">
                    <span class="minidata">{{$ed->start_date}} TO {{$ed->end_date}} | {{$ed->grade}}</span>
                </div>
            </div> 
            @endforeach
           





    </div>

    
    

</div>