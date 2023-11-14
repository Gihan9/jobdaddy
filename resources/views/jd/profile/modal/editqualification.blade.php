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
                <form action="" class="row">
        
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="degree" class="form-label">Degree*</label>
                        <div class="inframe">
                            <input class="form-control" id="degree" type="text" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="school" class="form-label formlab">University or College*</label>
                        <div class="inframe">
                            <input class="form-control" id="school" type="text" >
                        </div>
                    </div>
        
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="startdate" class="form-label">Start Date*</label>
                        <div class="inframe row">
                            <div class="col-5">
                                <select  id="startmonth" class="form-select" placeholder="Month" >
                                    <option value="">Month</option>  
                                </select>
                            </div>
                            <div class="col-5">
                                <select  id="startyear" class="form-select" placeholder="Year" >
                                    <option value="">Year</option>  
                                </select>
                            </div>
                        </div> 
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="enddate" class="form-label">End Date*</label>
                        <div class="inframe row">
                            <div class="col-5">
                                <select  id="endmonth" class="form-select" placeholder="Month" >
                                    <option value="">Month</option>  
                                </select>
                            </div>
                            <div class="col-5">
                                <select  id="endyear" class="form-select" placeholder="Year" >
                                    <option value="">Year</option>  
                                </select>
                            </div>
                        </div> 
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="grade" class="form-label formlab">GPA / Grade*</label>
                        <div class="inframe">
                            <input class="form-control" id="grade" type="text" >
                        </div>
                    </div>

                    <div class="modalBtns">
                        <button type="button" class="btn btn-secondary cancelBtn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn saveBtn">Save</button>
                    </div>
                </form>
            </div>

        </div>
      </div>
    </div>
  </div>