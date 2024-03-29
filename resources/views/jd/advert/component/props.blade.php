<div class="aboutComFrame blueframe">
    <div class="blueframeTitle">About the Company</div>
    <div class="comBio">
        <div class="comBioImg">
        <img src="{{ asset('storage/' . $job->company_logo) }}" alt="advertisement picture">
        </div>
        <div class="comBioDetails">
            <div class="comTitle">{{ $job->company_name }}</div>
            <div class="verification"><span><i class="bi bi-shield-fill-check"></i></span>Verified Employer</div>
        </div>
    </div>
</div>

<div class="aboutSafety blueframe">
    <div class="blueframeTitle">Safety Tips</div>
    <div class="blueframeText">
        Beware of online scammers. Don't share sensitive information (credit/
        debit card details, OTP messages etc.) with 3rd parties.   
    </div>
    <div class="safetylinks">
        <div class="link">
            <span>See all safety tips</span>
        </div>
        <div class="linkImg">
            <img src="/jd_img/safety.png" alt="safety tips">
        </div>

    </div>
</div>