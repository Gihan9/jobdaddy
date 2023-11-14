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
                <form action="{{url('/edit')}}" class="row" method="POST">
                    @csrf
                  
                     @foreach($jobseeker as $job)
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <div class="inframe">
                            <input class="form-control" id="name" type="text" value="{{$job['name']}}" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="age" class="form-label formlab">Age</label>
                        <div class="inframe">
                            <input class="form-control" id="age" type="text" value="{{$job['age']}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <label for="sex" class="form-label formlab">Sex</label>
                        <div class="inframe">
                            <select name="sex" id="sex" class="form-select" aria-label="Default select example">
                                <option value="{{$job->id}}">{{$job->sex}}</option>
                                
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <label for="mStatus" class="form-label formlab">Marital Status</label>
                        <div class="inframe">
                            <select name="mStatus" id="mStatus" class="form-select" aria-label="Default select example">
                            <option value="{{$job->id}}">{{$job->marital_status}}</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="location" class="form-label formlab">Location</label>
                        <div class="inframe">
                            <input class="form-control" id="location" type="text" value="{{$job['location']}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <label for="designation" class="form-label formlab">Designation</label>
                        <div class="inframe">
                            <input class="form-control" id="designation" type="text" value="{{$job['designation']}}">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mb-3">
                        <label for="emailLogin" class="form-label">Contact Number (WhatsApp)</label>
                        <div class="inframe">
                            <input class="form-control" id="emailLogin" type="text"  aria-label="email" value="{{$job['phone']}}">
                        </div>
                        
                    </div>

                    <div class="modalBtns">
                        <button type="button" class="btn btn-secondary cancelBtn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn saveBtn">Save</button>
                    </div>
                    @endforeach
                </form>
            </div>

        </div>
      </div>
    </div>
  </div>