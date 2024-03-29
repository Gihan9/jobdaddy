
<div class="contentframe personalDetailsFrame">
    <div class="profCardTitle mb-3">
    <div class="contentFrameTitle">
        <h2>Personal Details</h2>
        <h4>Add your general information</h4>
    </div>
    <!--modal target data -->
    <div data-bs-toggle="modal" data-bs-target="#editPersonal" class="profCardEditbtn"><i class="bi bi-pencil-square"></i></div>
    </div>

    
    

    <div class="form">
        <form action="" class="row" >
        
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <label for="name" class="form-label">Name</label>
                <div class="inframe">
                    <input class="form-control" id="name" type="text" value="{{ old('name', $user->name) }}" readonly >
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <label for="age" class="form-label formlab">Age</label>
                <div class="inframe">
                    <input class="form-control" id="age" type="text" value="{{ old('age', $profile->age ?? '') }}" readonly >
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <label for="sex" class="form-label formlab">Sex</label>
                <div class="inframe">
                    <input class="form-control" id="sex" type="text" value="{{ old('sex', $profile->sex ?? '') }}" readonly >
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <label for="mStatus" class="form-label formlab">Marital Status</label>
                <div class="inframe">
                    <input class="form-control" id="marryStatus" type="text" value="{{ old('marital_status', $profile->marital_status ?? '') }}" readonly >
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <label for="location" class="form-label formlab">Location</label>
                <div class="inframe">
                    <input class="form-control" id="location" type="text"  value="{{ old('location', $profile->location ?? '') }}"readonly>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <label for="designation" class="form-label formlab">Job Title</label>
                <div class="inframe">
                    <input class="form-control" id="designation" type="text" value="{{ old('designation', $profile->designation ?? '') }}" readonly>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 mb-3">
                <label for="phone" class="form-label">Contact Number (WhatsApp)</label>
                <div class="inframe">
                    <input class="form-control" id="phone" type="text" value="{{ old('phone', $profile->phone ?? '') }}" readonly>
                </div>
                @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                <div class="form-check">
                    <!--
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        If you want to recruiters to see your contact details
                    </label>-->
                  </div>
            </div>
            
        </form>
    </div>


</div>

