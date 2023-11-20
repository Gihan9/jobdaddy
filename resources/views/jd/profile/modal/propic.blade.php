    <!-- Modal -->
    <div class="modal fade" id="propic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header">
                <div class="contentFrameTitle">
                    <h2 style="text-align: center">Update Profile Picture</h2>
                </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    
                <div class="form">
                    <form action="{{ route('profile.update.picture') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="file" name="profile_picture" accept="image/*">
                        <button type="submit">Update Profile Picture</button>
                    </form>
                    </div>
    
            </div>
          </div>
        </div>
      </div>