<div class="descriptionBox contentframe mb-3" >
    <div class="aboutCompany profCard ">
        <div class="profCardTitle mb-3">
            <div class="contentFrameTitle">
                <h2>About Company</h2>
            </div>
            <!--modal target data -->
            <div data-bs-toggle="modal" data-bs-target="#editAbout"  class="profCardEditbtn"><i class="bi bi-pencil-square"></i></div>
        </div>

        @isset($companyProfile) 
                @if($companyProfile->about)
                <div class="profdata profAboutDescrip">{{ $companyProfile->about ?? old('about') }} </div> 
                @else 
                <div class="profdata profAboutDescrip">
                Curabitur sit amet maximus ligula. Nam a nulla ante. Nam sodalesCurabitur sit amet maximus ligula. Nam a nulla ante. Nam sodales Nam a nulla ante. Nam sodalesgCurabitur sit amet maximus ligula. Nam a nulla ante. Nam sodalesCurabitur sit amet maximus ligula. Nam a nulla ante. Nam sodalesCurabitur sit amet maximus ligula. Nam a nulla ante. Nam sodales Nam a maximus ligula.
        </div>
                @endif
                @else
                <div class="profdata profAboutDescrip">
                Curabitur sit amet maximus ligula. Nam a nulla ante. Nam sodalesCurabitur sit amet maximus ligula. Nam a nulla ante. Nam sodales Nam a nulla ante. Nam sodalesgCurabitur sit amet maximus ligula. Nam a nulla ante. Nam sodalesCurabitur sit amet maximus ligula. Nam a nulla ante. Nam sodalesCurabitur sit amet maximus ligula. Nam a nulla ante. Nam sodales Nam a maximus ligula.
        </div>
                @endisset    
        
    </div>
</div>