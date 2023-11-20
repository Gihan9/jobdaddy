<div class="loginFormFrame formFrame">
    <form method="POST" action="{{ url('/register') }}">
        @csrf
        <div class="formtitleBox">
            <h2 style="text-align: center">Create An Account</h2>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <div class="inframe">
                <input class="form-control" id="name" type="text" type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
               
            </div>
           
        </div>
       
        <div class="mb-3">
            <label for="emailLogin" class="form-label">Email Address</label>
            <div class="inframe">
                <input class="form-control" id="emailLogin" type="email" name="email" aria-label="email" value="{{ old('email') }}" required>
                
            </div>
           
        </div>
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
    <div style="text-align: center" class="formText">Already Have An Account ? <span class="formLink"><a href="/jd/login">Login Now</a></span></div>
    </div>
    
</div>