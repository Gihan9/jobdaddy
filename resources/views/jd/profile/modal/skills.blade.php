    <!-- Modal -->
    <div class="modal fade" id="skills" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header">
                <div class="contentFrameTitle">
                    <h2 style="text-align: center">Update Skills</h2>
                </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    
                <div class="form">
                <form action="{{ route('profile.update.skills') }}" method="POST">
                  @csrf
                  <label for="jobp">Add/Update skill:</label>
                  <input type="text" name="skill" value="{{ old('skill') }}" placeholder="skill">
                  <button type="submit">Add/Update skill</button>
              </form>
                    </div>
    
            </div>
          </div>
        </div>
      </div>