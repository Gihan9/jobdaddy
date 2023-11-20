    <!-- Modal -->
    <div class="modal fade" id="editWorkExp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header">
                <div class="contentFrameTitle">
                    <h2 style="text-align: center">Add New Work Experience</h2>
                </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    
                <div class="form">
                    <form action="{{ url('/jd/profile/store') }}" method="POST">
                        @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <label for="position" class="form-label">Position*</label>
                            <div class="inframe">
                            <input type="text" name="job_title" id="job_title" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <label for="comName" class="form-label formlab">Company Name*</label>
                            <div class="inframe">
                            <input type="text" name="company_name" id="company_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <label for="location" class="form-label formlab">Location*</label>
                            <div class="inframe">
                                <input class="form-control" name="location" id="location" type="text" required >
                            </div>
                        </div>
                        
            
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <label for="startdate" class="form-label">Start Date*</label>
                            <div class="inframe row">
                                <div class="col-5">
                                <input type="text" name="s_date" id="s_date"  class="form-control date-format" required>
                                </div>
                               
                            </div> 
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                            <label for="enddate" class="form-label">End Date*</label>
                            <div class="inframe row">
                                <div class="col-5">
                                <input type="text" name="e_date" id="e_date"  class="form-control date-format" required>
                                </div>
                               
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