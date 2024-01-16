    <!-- Modal -->
  <div class="modal fade" id="editPersonal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <div class="contentFrameTitle">
                <h2 style="text-align: center">Edit Personal Details</h2>
                <h4>Add your general information</h4>
            </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="form">
            <form method="POST" action="{{ url('/jd/profile/update') }}">
                @csrf
                  
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <div class="inframe">
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="age" class="form-label formlab">Age</label>
                        <div class="inframe">
                            
                            <input type="text" name="age" id="age" class="form-control" value="{{ old('age', $profile->age ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <label for="sex" class="form-label formlab">Sex</label>
                        <div class="inframe">
                        <input type="text" name="sex" id="sex" class="form-control" value="{{ old('sex', $profile->sex ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <label for="mStatus" class="form-label formlab">Marital Status</label>
                        <div class="inframe">
                           
                            <input type="text" name="marital_status" id="emailLogin" aria-label="email"  class="form-control" value="{{ old('marital_status', $profile->marital_status ?? '') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="location" class="form-label formlab">Location</label>
                        <div class="inframe">
                            
                            <input type="text" name="location" id="emailLogin" aria-label="email"  class="form-control" value="{{ old('location', $profile->location ?? '') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="designation" class="form-label formlab">Job Title</label>
                        <div class="inframe">
                            
                            <input type="text" name="designation" id="emailLogin" aria-label="email"  class="form-control" value="{{ old('designation', $profile->designation ?? '') }}">
                            
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mb-3">
                        <label for="emailLogin" class="form-label">Contact Number (WhatsApp)</label>
                        <div class="inframe">
                            <input type="text" name="phone" id="emailLogin" aria-label="email"  class="form-control" value="{{ old('phone', $profile->phone ?? '') }}">
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