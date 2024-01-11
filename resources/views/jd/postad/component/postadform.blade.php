<div class="postAdFormFrame">

    <form action="" class="row" >
        
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <label for="jbposition" class="form-label">Job Position *</label>
            <div class="inframe">
                <input class="form-control" id="jbposition" type="text" >
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <label for="emplytype" class="form-label formlab">Employment Type</label>
            <div class="inframe">
                <select name="emplytype" id="emplytype" class="form-select" aria-label="selected employement type">
                    <option value="fulltime" >Full-time</option>
                    <option value="parttime">Part-time</option>
                    <option value="internship">Internship</option>
                    <option value="remote">Remote</option>
                    
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <label for="comname" class="form-label formlab">Company Name *</label>
            <div class="inframe">
                <input class="form-control" id="comname" type="text"  >
            </div>
        </div>

        <div class="col-md-6 col-sm-12 mb-3">
            <label for="workplacement" class="form-label formlab">Work Placement Type</label>
            <div class="inframe">
                <select name="emplytype" id="emplytype" class="form-select" aria-label="selected employement type">
                    <option value=""></option>
                    <option value="other">Other</option>
                    
                    
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="url" class="form-label formlab">Company Website Url</label>
            <div class="inframe">
                <input class="form-control" id="url" type="text"  >
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="salary" class="form-label formlab">Salary Range</label>
            <div class="inframe">
                <input class="form-control" id="salary" type="text" >
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="location" class="form-label formlab">Location *</label>
            <div class="inframe">
                <input class="form-control" id="location" type="text">
            </div>
        </div>

        <div class="col-md-6 col-sm-12 mb-3">
            <label for="]contact" class="form-label formlab">Contact Number *</label>
            <div class="inframe">
                <input class="form-control" id="contact" type="text">
            </div>
        </div>

        <div class="col-md-12 col-sm-12 mb-3">
            <label for="aboutrole" class="form-label formlab">About the Role</label>
            <div class="">
                <textarea style="width:100%; "  name="aboutrole" rows="5" id="about"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12 col-sm-12 mb-3">
                <label class="form-label formlab">Upload your Artwork</label>
                <input type="file" name="uploadart" id="uploadart" hidden>

                 <!-- this disappears when file is added -->
                <div class="uploadFrame">
                    <div class="uploadBox">
                        <div class="uploadDetails">
                            <div class="uploadImg">
                                <img src="/jd_img/uploadimg.png" alt="uploadpic">
                            </div>
                            <div class="uploadTitle">Drag and Drop files here</div>
                            <div class="uploadDetails">Files Supported: .jpeg, .bmp</div>
                            <div class="uploadButton">
                                <label for="uploadart">
                                    <div class="upbtn">Choose File</div>
                                </label>
                            </div>
                        </div>
                </div>


                <!-- this appears when file is added -->
                <!--<div class="uploadFrame2">
                        <div class="artBox">
                            <div class="closeBtn">x</div>
                            <div class="uppedImg">
                                <img src="/jd_img/placeholdeimg.png" alt="uploadpic">
                            </div>
                        </div>
                    </div>-->

                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12 col-sm-12 mb-3">
                <label for="keyword" class="form-label formlab">Keywords</label>
                <div class="skillinputbox">
                    <div class="inframe">
                        <input class="form-control" id="keyword" type="text" placeholder="add a skill">
                    </div>
                    <div class="addbtn">
                        <i class="bi bi-plus-square-fill"></i>
                    </div>
                </div>
                <div class="tags">
                    <span class="skilltag" id="type">Data <span class="ico"><i class="bi bi-x"></i></span></span>
                    <span class="skilltag" id="type">Data Entry <span class="ico"><i class="bi bi-x"></i></span></span>
                </div>
                
            </div>
        </div>


        <div class=" PostAdbtnbox">
            <div class="nextBtn btn">Next</div>
            <div class="previewbtn btn" data-bs-toggle="modal" data-bs-target="#previewModal">Preview</div>

        </div>
        





       

       
        
    </form>


</div>