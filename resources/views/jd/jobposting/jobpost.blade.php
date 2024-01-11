<form action="{{ route('jobs.store') }}" method="POST">
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

    <label for="category">Employment Type:</label>
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
