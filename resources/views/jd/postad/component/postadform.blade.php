<!--<form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
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
       
    </select><br>

    <label for="category">Category:</label>
    <select name="category">
        <option value="Data_Entry">Data Entry</option>
        <option value="Software_Engineer">Software Engineer</option>
       
    </select><br>

    <label for="work_type">Work Type:</label>
    <select name="work_type">
        <option value="remote">Remote</option>
        <option value="office">Office</option>
       
    </select><br>

    <label for="category">job type</label>
    <select name="filter">
        <option value="freelancer">Freelancer</option>
        <option value="goverment">Goverment</option>
        <option value="private">Private</option>
        <option value="overseas">overseas</option>
        <option value="NGO">NGO</option>
        <option value="workfromhome">Work from home</option>
    
    </select><br>


    <label for="salary">Salary:</label>
    <input type="text" name="salary"><br>

    <label for="salary">Location:</label>
    <input type="text" name="location"><br>

    <label for="salary">contact:</label>
    <input type="text" name="phone"><br>
    <label for="artwork">Artwork:</label>
    <input type="file" name="artwork" id="artwork" accept="image/*" onchange="previewArtwork(event)">
    
  
    <div id="artworkPreviewContainer">
        <img id="artworkPreview" alt="Artwork Preview">
    </div>br>


    
    <label for="keywords">Keywords:</label>
    <div id="keyword-container">
        
    </div>
    <button type="button" onclick="addKeywordField()">+ Add Keyword</button>

    <div id="display-keywords">
        
    </div>
    <button type="submit">Create Job</button>
</form>-->


<div class="postAdFormFrame">

<form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <label for="jbposition" class="form-label">Job Position *</label>
            <div class="inframe">
                <input class="form-control" id="jbposition" type="text" name="position"  >
            </div>
            @error('position')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
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
                <input class="form-control" id="comname" type="text" name="company_name"  value="{{ $companyProfile->name ?? old('name') }}" readonly>
            </div>
        </div>
            <input type="text" name="company_logo" id="comimg" value="{{ $companyProfile->profile_picture ?? old('profile_picture') }}" readonly style="display: none">
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="workplacement" class="form-label formlab">Work Placement Type</label>
            <div class="inframe">
                <select name="work_type" id="work_type" class="form-select" aria-label="selected employement type">
                <option value="remote">Remote</option>
                <option value="office">Office</option>
                    
                    
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="workplacement" class="form-label formlab">Job category</label>
            <div class="inframe">
                <select name="category" id="emplytype" class="form-select" aria-label="selected employement type">
                <option value="Data_Entry">Data Entry</option>
                <option value="Software_Engineer">Software Engineer</option>
                    
                </select>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 mb-3">
            <label for="workplacement" class="form-label formlab">Job category</label>
            <div class="inframe">
                <select name="filter" id="emplytype" class="form-select" aria-label="selected employement type">
                    <option value="freelancer">Freelancer</option>
                    <option value="goverment">Goverment</option>
                    <option value="private">Private</option>
                    <option value="overseas">overseas</option>
                    <option value="NGO">NGO</option>
                    <option value="workfromhome">Work from home</option>
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
            @error('salary')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="col-md-6 col-sm-12 mb-3">
            <label for="location" class="form-label formlab">Location *</label>
            <div class="inframe">
                <input class="form-control" id="location" type="text" name="location">
            </div>
            @error('location')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="col-md-6 col-sm-12 mb-3">
            <label for="]contact" class="form-label formlab">Contact Number *</label>
            <div class="inframe">
                <input class="form-control" id="contact" type="text" name="phone">
            </div>
            @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="col-md-12 col-sm-12 mb-3">
            <label for="aboutrole" class="form-label formlab">About the Role</label>
            <div class="">
                <textarea style="width:100%; "  name="description" rows="5" id="about"></textarea>
            </div>
            @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="row mb-3">
            <div class="col-md-12 col-sm-12 mb-3">
                <label class="form-label formlab">Upload your Artwork</label>
                <input type="file" name="artwork"  id="uploadart" accept="image/*" onchange="previewArtwork(event)" hidden>

                 <!-- this disappears when file is added -->
                <div class="uploadFrame">
                    <div class="uploadBox">
                        <div class="uploadDetails">
                            <div class="uploadImg">
                                 <div id="artworkPreviewContainer">
                                    <img id="artworkPreview" alt="Artwork Preview">
                                </div>
                            </div>
                            <div class="uploadTitle">Drag and Drop files here</div>
                            <div class="uploadDetails">Files Supported: .jpeg, .bmp</div>
                            <div class="uploadButton">
                                <label for="uploadart">
                                     <!-- Artwork preview -->
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
                <div id="keyword-container">
        <!-- Keyword fields will be dynamically added here -->
                 </div>
                    <div class="addbtn">
                        <i class="bi bi-plus-square-fill" type="button" onclick="addKeywordField()"></i>
                    </div>
                  
                </div>
                <div class="tags" id="display-keywords">
                    
                </div>
                
            </div>
        </div>


        <div class=" PostAdbtnbox">
           <button> <div class="nextBtn btn" type="submit">Next</div></button>
            <div class="previewbtn btn" data-bs-toggle="modal" data-bs-target="#previewModal">Preview</div>

        </div>
        





       
      
       
        
    </form>


</div>


<!-- Preview Modal -->
<div class="modal fade" id="previewModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="closeModalbtn" data-bs-dismiss="modal">x</div>
            <div class="modal-body" id="previewContent">
                <!-- Preview content will be dynamically updated here -->
            </div>
        </div>
    </div>
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

        const deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.innerHTML = '<i class="bi bi-x"></i>'; // Use Bootstrap icon for 'x'
        deleteButton.classList.add('delete-button');
        deleteButton.addEventListener('click', function () {
            container.removeChild(keywordField);
            keywordCount--;
        });

        const keywordField = document.createElement('div');
        keywordField.classList.add('skilltag'); // Add class for styling
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


<script>
    function updatePreview() {
        // Gather form input values
        const position = document.getElementById('jbposition').value;
        const emType = document.getElementById('emplytype').value;
        const companyName = document.getElementById('comname').value;
        const workType = document.getElementById('work_type').value;
        const website = document.getElementById('url').value;
        const salary = document.getElementById('salary').value;
        const location = document.getElementById('location').value;
        const phone = document.getElementById('contact').value;
        const description = document.getElementById('about').value;
        const cname = document.getElementById('comname').value;
       
        
      

        const artwork = document.getElementById('uploadart').files[0]; // Get the file object



        // Update preview modal content
        const previewContent = document.getElementById('previewContent');
        previewContent.innerHTML = `
            <div class="adSummary mb-3">
                <div class="summaryFrame">
                    <div class="adcomImg">
                    <img src="{{ asset('storage/' . $companyProfile->profile_picture) }}" alt="Profile Picture">
                    </div>
                    <div class="adcomDescrip">
                        <div class="time">Posted now</div>
                        <div class="adTitle">${position}</div>
                        <div class="comName">${companyName}</div>
                        <div class="tags">
                            <div class="tag jobtype">
                                <span class="ico"><i class="bi bi-bullseye"></i></span>
                                <span>${emType}</span>
                            </div>
                            <div class="tag location">
                                <span class="ico"><i class="bi bi-geo-alt"></i></span>
                                <span>${location}</span>
                            </div>
                            <div class="tag salary">
                                <span class="ico"><i class="bi bi-aspect-ratio-fill"></i></span>
                                <span>LKR ${salary}</span>
                            </div>
                        </div>
                        <div class="bookmark">
                            <i class="bi bi-bookmark"></i>
                        </div>
                        <div class="sharebtn"><span class="ico"><i class="bi bi-share-fill"></i></span><span>Share</span></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="adDetails">
                <div class="row">
                    <div class="col-8 aboutAd">
                        <div class="aboutFrame blueframe">
                            <div class="rolebox blueframesection">
                                <div class="blueframeTitle">About the role</div>
                                <div class="blueframeText">${description}</div>
                            </div>
                            <div class="contactbox blueframesection">
                                <div class="blueframeTitle">Contact Us</div>
                                <div class="blueframeText">${phone}</div>
                            </div>
                            <!-- only visible if image exists -->
                            <div class="posterBox" id="artworkPreviewContainer">
                            <img src="${artwork ? URL.createObjectURL(artwork) : '/jd_img/samplead2.png'}" alt="Profile Picture">
                          
                            </div>
                        
                            <div class="aboutAdButtons">
                                <div class="applybtn">Apply Now</div>
                                <div class="reportbtn"><span><i class="bi bi-bookmark-x-fill"></i></span>Report this Ad</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 adProps">
                        <div class="aboutComFrame blueframe">
                            <div class="blueframeTitle">About the Company</div>
                            <div class="comBio">
                                <div class="comBioImg">
                                <img src="{{ asset('storage/' . $companyProfile->profile_picture) }}" alt="Profile Picture">
                                </div>
                                <div class="comBioDetails">
                                    <div class="comTitle">${companyName}</div>
                                    <div class="verification"><span><i class="bi bi-shield-fill-check"></i></span>Verified Employer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Trigger the updatePreview function when the user clicks the "Preview" button
    document.querySelector('.previewbtn').addEventListener('click', updatePreview);
</script>