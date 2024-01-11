    <!-- Modal -->
    <div class="modal fade" id="jobpref" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header">
                <div class="contentFrameTitle">
                    <h2 style="text-align: center">Update looking for</h2>
                </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    
                <div class="form">
                <form action="{{ route('profile.update.jobpref') }}" method="POST">
                  @csrf
                  <label for="jobp">Add/Update job:</label>
                  <input type="text" name="preference" value="{{ old('preference') }}" placeholder="preference">
                  <button type="submit">Add/Update job</button>
              </form>
                    </div>
    
            </div>
          </div>
        </div>
      </div>