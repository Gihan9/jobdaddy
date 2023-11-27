<div class="modal fade" id="editComDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
            <div class="contentFrameTitle">
                <h2 style="text-align: center">Edit Company Details</h2>
            </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="form">
            <form method="POST" action="">
                @csrf
                  
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="comname" class="form-label">Company Name</label>
                        <div class="inframe">
                        <input type="text" name="comname" id="comname" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="comwebaddress" class="form-label formlab">Company Website URL (If have any)</label>
                        <div class="inframe">
                            
                            <input type="email" name="comemail" id="comwebaddress" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mb-3">
                        <label for="sex" class="form-label formlab">Established Date</label>
                        <div class="row">
                            <div class="inframe col-4">
                                <select name="mStatus" id="mStatus" class="form-select" aria-label="Default select example">
                                    <option value="undisclosed" selected>01</option>
                                    <option value="1">02</option>
                                    <option value="2">03</option>
                                    
                                </select>
                            </div>
                            <div class="inframe col-4">
                                <select name="mStatus" id="mStatus" class="form-select" aria-label="Default select example">
                                    <option value="undisclosed" selected>January</option>
                                    <option value="single">February</option>
                                    <option value="married">March</option>
                                    
                                </select>
                            </div>
                            <div class="inframe col-4">
                                <select name="mStatus" id="mStatus" class="form-select" aria-label="Default select example">
                                    <option value="undisclosed" selected>2023</option>
                                    <option value="single">2024</option>
                                    <option value="married">2025</option>
                                    
                                </select>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="comemail" class="form-label formlab">Company Email</label>
                        <div class="inframe">
                            
                            <input type="email" name="comemail" id="comemail" class="form-control" >
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 mb-3">
                        <label for="phone" class="form-label formlab">Contact Number </label>
                        <div class="inframe">

                            <input type="text" name="marital_status" id="phone"  class="form-control" >
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 mb-3">
                        <label for="location" class="form-label formlab">Location </label>
                        <div class="inframe">

                            <input type="text" name="location" id="location"  class="form-control" >
                        </div>
                    </div>
                    

                    <div class="modalBtns">
                        <button type="button" class="btn btn-secondary cancelBtn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn saveBtn">Save</button>
                    </div>
                    </div>
                  
                </form>
            </div>

        </div>
      </div>
    </div>
  </div>