@extends('jd.layout.mainlayout')
@section('header')
   @include('jd.header.header')
@endsection
@section('nav')
    @include('jd.header.nav')
@endsection
@section('content')

<div class="row mb-3">
    <div class="col-md-12 col-sm-12 mb-3">
        <label for="keyword" class="form-label formlab">Keywords</label>
        <div id="keyword-container">
        </div>
        <div class="skillinputbox">
        
         <div class="inframe">
            <input class="form-control" id="skillinput" type="text" name="skillinput">
        </div>
         
            <div class="addbtn">
                <i class="bi bi-plus-square-fill" type="button" onclick="addKeywordField()"></i>
            </div>
          
        </div>
        <div class="tags" id="display-keywords">
            
        </div>
        
    </div>
</div>


@endsection

@section('customCss')
<link rel="stylesheet" href="/jd_css/header/header.css">
<link rel="stylesheet" href="/jd_css/postad/main.css">
<link rel="stylesheet" href="/jd_css/postad/form.css">
<link rel="stylesheet" href="/jd_css/postad/preview.css">
<link rel="stylesheet" href="/jd_css/colors.css">
@endsection

@section('customJs')

<script>
    let keywordCount = 0;

    function addKeywordField() {
    if (keywordCount < 5) {
        const container = document.getElementById('keyword-container');
        const maininput = document.getElementById('skillinput');
        const input = document.createElement('input');
        input.classList.add('basicIn');
        input.type = 'text';
        input.readOnly = true;
        input.name = `keyword${keywordCount + 1}`; // Use a counter to generate unique names
        input.value = maininput.value;

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
        maininput.value = '';

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
@endsection
