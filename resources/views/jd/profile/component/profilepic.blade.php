<div class="contentframe profilePicFrame">
    <div class="contentFrameTitle mb-4">
        <h2>Profile Picture</h2>
        <h4>Optional</h4>
    </div>
    <div class="imageFrame">
        <label for="profilePic">
        <div class="profImgHolder">
            <img src="/jd_img/profilepictemp.png" alt="">
        </div>
        </label>
        <input style="display:none;" name="profilePic" id="profilePic" type="file" accept="image/*">
        <div style="font-size: 12px; font-weight:500; text-align:center;">{{ Auth::user()->email }}</div>
    </div>

</div>