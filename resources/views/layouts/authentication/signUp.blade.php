<div id='signUpID' class='registerModal'>
    <form id='submitRegistedForm' method="POST">
        <div id='exitDivId2'>
            <i style='color:gray;' class="fa-solid fa-xmark"></i>
        </div>
        <div class='login'>
            <p style='font-size:2em;font-weight:none;'>Sign Up</p>
            <br>
            <p class="alert alert-danger" style="display:none;text-align:start;font-size:0.9em;">* Please fill
                in
                all
                fields!<br>* Enter a valid
                email<br>
            </p>
            <label for="usernamerReg">Username</label>
            <br>
            <div class='authDivInput'>
                <input id='usernameReg' name='username' class='authInputs' type="text" placeholder='Enter username'>
                <i class="fa-solid fa-circle-check authCheck"></i>
            </div>
            <br>
            <label for="emailReg">Email</label>
            <br>
            <div class='authDivInput'>
                <input id='emailReg' name='email' class='authInputs' type="text" placeholder='Enter email'>
                <i class="fa-solid fa-circle-check authCheck"></i>
            </div>
            <br>
            <label for="passwordReg">Password</label>
            <br>
            <div class='authDivInput'>
                <input id='passwordReg' name='password' class='authInputs' type="password" placeholder='Enter password'>
                <i class="fa-solid fa-circle-check authCheck"></i>
                <span class='showPW'>Show</span>
            </div>
            <br>
            <br>

            <div style='text-align:center;'>
                <input id='submitRegister' class='authSubmit' type="submit" value='Create account'>
            </div>
            <div id='btnRegLoad' class="buttonload" style='display:none;text-align:center;'>
                <i class="fa fa-circle-o-notch fa-spin"></i>
            </div>
            <br>
            <p class='haveAccount' style='font-size:0.8em;color:gray;cursor:pointer;'>Already Have an
                Account?
            </p>
        </div>
    </form>
</div>