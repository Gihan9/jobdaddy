    <!-- Modal -->
    <div class="modal fade" id="jobpef" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header">
                <div class="contentFrameTitle">
                    <h2 style="text-align: center">Update job</h2>
                </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    
                <div class="form">
                <form action="{{ route('profile.update.job') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <label for="jobp">Add/Update Job:</label>
                      <input type="text" name="preference" value="{{ old('preference') }}" placeholder="job">
                      <button type="submit">Add/Update Job Preference</button>
                  </form>
                </div>
    
            </div>
          </div>
        </div>
      </div>