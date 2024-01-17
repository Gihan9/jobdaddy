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
            <form method="POST" action="{{ route('company.profile.storeOrUpdate') }}">
                @csrf
                  
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="comname" class="form-label">Company Name</label>
                        <div class="inframe">
                        <input type="text" name="name" value="{{ $companyProfile->name ?? old('name') }}">
                        </div>
                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="comwebaddress" class="form-label formlab">Company Website URL (If have any)</label>
                        <div class="inframe">
                        <input type="text" name="website" value="{{ $companyProfile->website ?? old('website') }}">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mb-3">
                        <label for="sex" class="form-label formlab">Established Date</label>
                        <div class="row">
                            <div class="inframe col-4">
                            <input type="text" name="date" value="{{ $companyProfile->date ?? old('date') }}">
                            </div>
                           
                            
                        </div>
                    
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <label for="comemail" class="form-label formlab">Company Email</label>
                        <div class="inframe">
                            
                        <input type="email" name="email" value="{{ $companyProfile->email ?? old('email') }}">
                        </div>
                    </div>
                    

                    <div class="col-md-12 col-sm-12 mb-3">
                        <label for="phone" class="form-label formlab">Contact Number </label>
                        <div class="inframe">
                        <input type="text" name="phone" value="{{ $companyProfile->phone ?? old('phone') }}">
                        </div>
                        
                    </div>
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="col-md-12 col-sm-12 mb-3">
                        <label for="location" class="form-label formlab">Location </label>
                        <div class="inframe">
                        <input type="text" name="location" value="{{ $companyProfile->location ?? old('location') }}">
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