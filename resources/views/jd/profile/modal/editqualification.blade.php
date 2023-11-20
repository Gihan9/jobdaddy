<!-- Modal -->
<div class="modal fade" id="editAcademic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
            <div class="contentFrameTitle">
                <h2 style="text-align: center">Add New Academic Qualification</h2>
            </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="form">
            <form action="{{ url('/jd/profile/storeed') }}" method="POST">
                    @csrf
        
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="degree" class="form-label">Degree*</label>
                        <div class="inframe">
                        <input type="text" name="degree" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="school" class="form-label formlab">University or College*</label>
                        <div class="inframe">
                        <input type="text" name="university" class="form-control" required>
                        </div>
                    </div>
        
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="startdate" class="form-label">Start Date*</label>
                        <div class="inframe row">
                            <div class="col-5">
                            <input type="text" name="start_date" class="form-control date-format" required>
                            </div>
                           
                        </div> 
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="enddate" class="form-label">End Date*</label>
                        <div class="inframe row">
                            <div class="col-5">
                            <input type="text" name="end_date" class="form-control date-format" required>
                            </div>
                            
                        </div> 
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="grade" class="form-label formlab">GPA / Grade*</label>
                        <div class="inframe">
                        <input type="text" name="grade" class="form-control">
                        </div>
                    </div>

                    <div class="modalBtns">
                        <button type="button" class="btn btn-secondary cancelBtn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn saveBtn">Save</button>
                    </div>
                </form>
            </div>

        </div>
      </div>
    </div>
  </div>