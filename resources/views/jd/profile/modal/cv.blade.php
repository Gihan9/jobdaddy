    <!-- Modal -->
    <div class="modal fade" id="cv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header">
                <div class="contentFrameTitle">
                    <h2 style="text-align: center">Update CV</h2>
                </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    
                <div class="form">
                  <form action="{{ route('profile.update.cv') }}" method="post"   enctype="multipart/form-data">
                      @csrf
                      <label for="cv">Upload/Update CV (PDF only):</label>
                      <input type="file" name="cv" accept=".pdf">
                      <button type="submit">Upload/Update CV</button>
                  </form>
                </div>
    
            </div>
          </div>
        </div>
      </div>