<form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="position">Position:</label>
    <input type="text" name="position" ><br>

    <label for="company_name">Company Name:</label>
  
    <input type="text" name="company_name" value="{{ $companyProfile->name ?? old('name') }}" readonly><br>

    <input type="text" name="company_logo" value="{{ $companyProfile->profile_picture ?? old('profile_picture') }}" readonly style="display: none"><br>

    <label for="description">Description:</label>
    <textarea name="description" rows="4" ></textarea><br>

    <label for="website">Website:</label>
    <input type="text" name="website"><br>

    <label for="em_type">Employment Type:</label>
    <select name="em_type">
        <option value="full_time">Full Time</option>
        <option value="part_time">Part Time</option>
        <!-- Add other employment types as needed -->
    </select><br>

    <label for="category">Category:</label>
    <select name="category">
        <option value="Data_Entry">Data Entry</option>
        <option value="Software_Engineer">Software Engineer</option>
        <!-- Add other employment types as needed -->
    </select><br>

    <label for="work_type">Work Type:</label>
    <select name="work_type">
        <option value="remote">Remote</option>
        <option value="office">Office</option>
        <!-- Add other work types as needed -->
    </select><br>

    <label for="category">job type</label>
    <select name="filter">
        <option value="freelancer">Freelancer</option>
        <option value="goverment">Goverment</option>
        <option value="private">Private</option>
        <option value="overseas">overseas</option>
        <option value="NGO">NGO</option>
        <option value="workfromhome">Work from home</option>
        <!-- Add other employment types as needed -->
    </select><br>


    <label for="salary">Salary:</label>
    <input type="text" name="salary"><br>

    <label for="salary">Location:</label>
    <input type="text" name="location"><br>

    <label for="salary">contact:</label>
    <input type="text" name="phone"><br>
    <label for="artwork">Artwork:</label>
    <input type="file" name="artwork" id="artwork" accept="image/*" onchange="previewArtwork(event)">
    
    <!-- Artwork preview -->
    <div id="artworkPreviewContainer">
        <img id="artworkPreview" alt="Artwork Preview">
    </div>br>


    
    <label for="keywords">Keywords:</label>
    <div id="keyword-container">
        <!-- Keyword fields will be dynamically added here -->
    </div>
    <button type="button" onclick="addKeywordField()">+ Add Keyword</button>

    <div id="display-keywords">
        <!-- Display entered keywords above the table -->
    </div>
    <button type="submit">Create Job</button>
</form>


<div class="postAdFormFrame">

    <form action="" class="row" >
        
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <label for="jbposition" class="form-label">Job Position *</label>
            <div class="inframe">
                <input class="form-control" id="jbposition" type="text" name="position"  >
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <label for="emplytype" class="form-label formlab">Employment Type</label>
            <div class="inframe">
                <select name="em_type" id="emplytype" class="form-select" aria-label="selected employement type">
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
                <input class="form-control" id="comname" type="text" name="company_name"  >
            </div>
        </div>

        <div class="col-md-6 col-sm-12 mb-3">
            <label for="workplacement" class="form-label formlab">Work Placement Type</label>
            <div class="inframe">
                <select name="work_type" id="emplytype" class="form-select" aria-label="selected employement type">
                <option value="remote">Remote</option>
        <option value="office">Office</option>
                    
                    
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="url" class="form-label formlab">Company Website Url</label>
            <div class="inframe">
                <input class="form-control" id="url" type="text"  name="website">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="salary" class="form-label formlab">Salary Range</label>
            <div class="inframe">
                <input class="form-control" id="salary" type="text" name="salary">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="location" class="form-label formlab">Location *</label>
            <div class="inframe">
                <input class="form-control" id="location" type="text" name="location">
            </div>
        </div>

        <div class="col-md-6 col-sm-12 mb-3">
            <label for="]contact" class="form-label formlab">Contact Number *</label>
            <div class="inframe">
                <input class="form-control" id="contact" type="text" name="phone">
            </div>
        </div>

        <div class="col-md-12 col-sm-12 mb-3">
            <label for="aboutrole" class="form-label formlab">About the Role</label>
            <div class="">
                <textarea style="width:100%; "  name="description" rows="5" id="about"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12 col-sm-12 mb-3">
                <label class="form-label formlab">Upload your Artwork</label>
                <input type="file" name="artwork" id="uploadart" hidden>

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

      
    <button type="submit">Create Job</button>
        <div class="row mb-3">
            <div class="col-md-12 col-sm-12 mb-3">
                <label for="keyword" class="form-label formlab">Keywords</label>
                <div class="skillinputbox">
                <div id="keyword-container">
        <!-- Keyword fields will be dynamically added here -->
                 </div>
                    <div class="addbtn">
                        <i class="bi bi-plus-square-fill"><button type="button" onclick="addKeywordField()"></button></i>
                    </div>
                  
                </div>
                <div class="tags" id="display-keywords">
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
































<script>
    let keywordCount = 0;

    function addKeywordField() {
        if (keywordCount < 5) {
            const container = document.getElementById('keyword-container');
            const input = document.createElement('input');
            input.type = 'text';
            input.name = `keyword${keywordCount + 1}`; // Use a counter to generate unique names
            input.placeholder = 'Enter keyword';

            // Log the generated name to the console
            console.log(`Generated name: ${input.name}`);

            const deleteButton = document.createElement('button');
            deleteButton.type = 'button';
            deleteButton.textContent = 'Delete';
            deleteButton.addEventListener('click', function () {
                container.removeChild(keywordField);
                keywordCount--;
            });

            const keywordField = document.createElement('div');
            keywordField.appendChild(input);
            keywordField.appendChild(deleteButton);
            container.appendChild(keywordField);

            keywordCount++;
        } else {
            alert('You can add a maximum of 5 keywords.');
        }
    }

    // Function to display entered keywords above the table
    function displayKeywords() {
        const displayContainer = document.getElementById('display-keywords');
        displayContainer.innerHTML = '';

        const keywords = document.getElementsByName('keyword');
        for (let i = 0; i < keywords.length; i++) {
            const keywordValue = keywords[i].value;

            const keywordColumn = document.createElement('div');
            keywordColumn.textContent = `Keyword ${i + 1}: ${keywordValue}`;

            displayContainer.appendChild(keywordColumn);
        }
    }
</script>
<script>
    function previewArtwork(event) {
        const input = event.target;
        const preview = document.getElementById('artworkPreview');
        const previewContainer = document.getElementById('artworkPreviewContainer');

        // Check if a file is selected
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                // Set the source of the preview image
                preview.src = e.target.result;
                // Show the preview container
                previewContainer.style.display = 'block';
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(input.files[0]);
        } else {
            // Hide the preview container if no file is selected
            previewContainer.style.display = 'none';
        }
    }
</script>
