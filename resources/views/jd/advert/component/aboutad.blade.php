<div class="aboutFrame blueframe">
    <div class="rolebox blueframesection">
        <div class="blueframeTitle">About the role</div>
        <div class="blueframeText">
        {{ $job->description }}
        </div>
    </div>
    <div class="contactbox blueframesection">
        <div class="blueframeTitle">Contact Us</div>
        <div class="blueframeText">
        {{ $job->phone }}
        </div>
    </div>
    <!-- only visible if image exists -->
    <div class="posterBox">
    <img src="{{ asset('storage/' . $job->artwork) }}" alt="advertisement picture">
    </div>

    <div class="aboutAdButtons">
        <div class="applybtn">Apply Now</div>
        <div class="reportbtn"><span><i class="bi bi-bookmark-x-fill"></i></span>Report this Ad</div>
    </div>

</div>