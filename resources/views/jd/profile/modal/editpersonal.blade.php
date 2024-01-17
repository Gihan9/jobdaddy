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
                            <select name="sex" id="sex" class="form-control">
                                <option value="male" {{ (old('sex', $profile->sex ?? '') == 'male') ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ (old('sex', $profile->sex ?? '') == 'female') ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ (old('sex', $profile->sex ?? '') == 'other') ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <label for="mStatus" class="form-label formlab">Marital Status</label>
                        <div class="inframe">
                            <select name="marital_status" id="mStatus" class="form-control">
                                <option value="single" {{ (old('marital_status', $profile->marital_status ?? '') == 'single') ? 'selected' : '' }}>Single</option>
                                <option value="married" {{ (old('marital_status', $profile->marital_status ?? '') == 'married') ? 'selected' : '' }}>Married</option>
                                <!-- Add more options as needed -->
                            </select>
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
                            <input type="tel" name="phone" id="emailLogin" aria-label="email"  class="form-control" value="{{ old('phone', $profile->phone ?? '') }}">
                        </div>
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

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

  