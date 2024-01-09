<div class="modal fade" id="addfaq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
      <div class="modal-content">
        <div class="modal-header">
            <div class="contentFrameTitle">
                <h2 style="text-align: center">Add FAQs</h2>
            </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="form">
            <form action="{{ route('company.qna.store') }}" method="POST">
            @csrf
                  
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="faqque" class="form-label">Enter Question</label>
                        <div class="inframe">
                        <input type="text" name="question" id="question" class="form-control" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="faqanw" class="form-label formlab">Enter Question Response</label>
                        <div class="inframe">
                            <textarea style="width:100%; " name="answer" id="answer"  name="aboutcom" rows="3" ></textarea>
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

<!-- mistake page ..ignore --->