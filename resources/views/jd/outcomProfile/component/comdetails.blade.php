<div>
<div class="descriptionBox contentframe mb-3" >
    <div class="aboutCompany profCard ">
        <div class="profCardTitle mb-3">
            <div class="contentFrameTitle">
                <h2>About Company</h2>
            </div>
        </div>
                <div class="profdata profAboutDescrip">
                {{ $company->about }}
        </div>  
        
    </div>
</div>

<div class="descriptionBox faqs mb-3" >
    <div class="aboutCompany profCard ">
        <div class="profCardTitle mb-3">
            <div class="contentFrameTitle">
                <h2>Frequently asked questions about the Company</h2>

            </div>
        </div>
        <hr>

        <div class="accordion accordion-flush " id="accordionFlushExample">

            <!--dynamicallly add each peice -->

            @foreach($qaList as $qa)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button style="font-weight: bold; color:#135FAF" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $qa->id }}" aria-expanded="false" aria-controls="flush-collapse{{ $qa->id }}">
                            {{ $qa->question }}
                        </button>
                    </h2>
                    <div id="flush-collapse{{ $qa->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {{ $qa->answer }}
                            <div class="subCardIcons" style="justify-content: right">
                                <!-- Edit and delete buttons here 
                                <div class="profCardEditbtn"><i class="bi bi-pencil-square"></i></div>
                                <div class="profCardEditbtn delbtn"><i class="bi bi-trash-fill"></i></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

       

</div>
</div>
</div>