<div class="loginFormFrame formFrame">
@if (session('error'))
        <div>{{ session('error') }}</div>
    @endif
<form method="POST" action="{{ url('company/login') }}">
            @csrf
        <div class="formtitleBox">
            <h5>WELCOME BACK,</h5>
            <h2>Login To Job Daddy</h2>
        </div>
        <div class="apiLinks">
            <!--googlebutton -->
            <div class="googlebtn">
                <span>
                    <img src="/jd_img/google.png" alt="">
                </span>
                <div>Login with Google</div>
            </div>

            <div class="formText mt-2 mb-2">Or Login With,</div>
        </div>
       
        <div class="mb-3">
            <label for="emailLogin" class="form-label">Phone</label>
            <div class="inframe">
                
                <input type="tel" name="phone" id="emailLogin" class="form-control" aria-label="phone" value="{{ old('phone') }}" required>
            </div>
           
        </div>
        <div class="mb-3">
            <label for="passwordLogin" class="form-label">Password</label>
            <div class="inframe">
                <div class="input-group">
                    
                    <input type="password" name="password" id="passwordLogin" class="form-control" aria-label="password" required>
                    <span class="input-group-text " id="eyebtn"><i id="eyeicon" class="bi bi-eye-fill"></i></span>
                </div>
            </div>
            

            
            <div class="formText formLink pwdForget">Forgot Password?</div>
        </div>

        <button type="submit" class="btn formBtn">LOGIN</button>
    </form>
    <div class="alternateLinks">
    <div style="text-align: center" class="formText">Dont Have An Account ? <span class="formLink"><a href="/company/register">Register Now</a></span></div>
    </div>
    
</div>