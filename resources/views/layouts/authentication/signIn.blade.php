<div id='signInID' class='loginModal'>
    <form id='loginFormId'>
        <div id='exitDivId'>
            <i style='color:gray;' class=" fa-solid fa-xmark"></i>
        </div>
        <div class='login'>
            <p style='font-size:2em;font-weight:none;'>Log In</p>
            <br>
            <p class="alert alert-danger alert-login" style="display:none;text-align:center;font-size:0.9em;">
                Wrong credentials!
            </p>
            <label for="emailLog">Email</label>
            <br>
            @if ($errors->has('emailLog'))
            <span class="text-danger">{{ $errors->first('emailLog') }}</span>
            @endif
            <div class='authDivInput'>
                <input id='emailLog' name='email' class='authInputs' type=" text" placeholder='Enter email'>
                <i class="fa-solid fa-circle-check authCheck"></i>
            </div>
            <br>
            @if ($errors->has('passwordLog'))
            <span class="text-danger">{{ $errors->first('passwordLog') }}</span>
            @endif
            <label for="passwordLog">Password</label>
            <br>
            <div class='authDivInput'>
                <input id='passwordLog' name='password' class='authInputs' type="password" placeholder='Enter password'>
                <i class="fa-solid fa-circle-check authCheck"></i>
                <span class='showPW'>Show</span>
            </div>
            <br>
            <br>
            <div style='text-align:center;'>
                <input id='submitLogin' class='authSubmit' type="submit" value='Log In'>
            </div>
            <div id='btnLogLoad' class="buttonload" style='display:none;text-align:center;'>
                <i class="fa fa-circle-o-notch fa-spin"></i>
            </div>
            <br>
            <p class='forgotPW' style='font-size:0.8em;color:gray;cursor:pointer;'>Forgot your password?</p>
            <p class='signUp' style='font-size:0.8em;color:gray;cursor:pointer;'>Sign Up</p>
        </div>
    </form>
</div>