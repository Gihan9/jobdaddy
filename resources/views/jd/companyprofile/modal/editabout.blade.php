<div class="modal fade" id="editAbout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
      <div class="modal-content">
        <div class="modal-body">

            <div class="form">
            <form method="POST" action="">
                @csrf
                  
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <div class="contentFrameTitle">
                            <h2 >Add Details About Company</h2>
                        </div>
                        <div class="inframe">
                            <textarea style="width:100%; "  name="aboutcom" rows="5" ></textarea>
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