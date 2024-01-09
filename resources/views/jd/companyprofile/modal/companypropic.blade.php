<div class="modal fade" id="companypropic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
      <div class="modal-content">
        <div class="modal-body">

            <div class="form">
            <form action="{{ route('company.profile.updateProfilePicture') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="profile_picture">Profile Picture:</label>
                    <input type="file" name="profile_picture" accept="image/*">
                </div>

               
                <div class="modalBtns">
                        <button type="button" class="btn btn-secondary cancelBtn" data-bs-dismiss="modal">Close</button>
                        <button type="submit">Update Profile Picture</button>
                    </div>
            </form>
            </div>

        </div>
      </div>
    </div>
  </div>