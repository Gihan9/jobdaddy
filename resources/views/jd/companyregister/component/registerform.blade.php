<div class="loginFormFrame formFrame">
@if (session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ url('register') }}">
        @csrf
        <div class="formtitleBox">
            <h2 style="text-align: center">Create An Account</h2>
        </div>

       
        <div class="mb-3">
            <label for="emailLogin" class="form-label">Phone</label>
            <div class="inframe">
                <input class="form-control" id="emailLogin" type="tel" name="phone" aria-label="phone" value="{{ old('phone') }}" required>
                
            </div
            >
           
        </div>
        <input class="form-control" id="emailLogin" type="text" name="acc_type"  value="company" required readonly style="display: none">
                
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="inframe">
                <div class="input-group">
                    <input class="form-control" id="password" type="password" name="password" required>
                    
                   
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <div class="inframe">
                <div class="input-group">
                    
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn formBtn">REGISTER</button>
    </form>
    <div class="alternateLinks">
    <div style="text-align: center" class="formText">Already Have An Account ? <span class="formLink"><a href="/company/login">Login Now</a></span></div>
    </div>
    
</div>