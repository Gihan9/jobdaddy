<div class="descriptionBox  mb-3" >
    <div class="aboutCompany profCard ">
        <div class="profCardTitle mb-3">
            <div class="contentFrameTitle">
                <h2>Frequently asked questions about the Company</h2>

            </div>
            <!--modal target data -->
            <div  data-bs-toggle="modal" data-bs-target="#addfaq"  class="profCardEditbtn"><i class="bi bi-pencil-square"></i></div>
        </div>
        <hr>

        <div class="accordion accordion-flush " id="accordionFlushExample">

            <!--dynamicallly add each peice -->
            <div class="accordframe">
    @forelse($companyQnAs as $qna)
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" style="font-weight: bold; color:#135FAF" type="button" data-bs-toggle="collapse" data-bs-target="#qna{{ $qna->id }}" aria-expanded="false" aria-controls="qna{{ $qna->id }}">
                    {{ $qna->question }}
                </button>
            </h2>
            <div id="qna{{ $qna->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div>{{ $qna->answer }}</div>
                    <div class="subCardIcons" style="justify-content: right">
                        <div class="profCardEditbtn"><i class="bi bi-pencil-square"></i></div>
                        <form method="post" action="{{ route('company.qna.destroy', ['qna' => $qna->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="profCardEditbtn delbtn"><i class="bi bi-trash-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="font-weight: bold; color:#135FAF" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Lorem ipsum dolor sit amet consectetur. Maecenas cras risus nunc diam ?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div>Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    <div class="subCardIcons" style="justify-content: right">
                        <div class="profCardEditbtn"><i class="bi bi-pencil-square"></i></div>
                        <div class="profCardEditbtn delbtn"><i class="bi bi-trash-fill"></i></div>    
                    </div>
                </div>    
            </div>     
        </div>
    @endforelse
</div>



           
        
            
          </div>

    </div>
    
</div>