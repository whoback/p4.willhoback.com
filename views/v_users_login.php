<form method='POST' class="pure-form pure-form-aligned pure-form-stacked" action='/users/p_login'>

    Email
    <input type='email' name='email' required>    
    

    Password
    <input type='password' name='password' required>
    

    <?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        
    <?php endif; ?>

    <input type='submit' value='Log in'>

</form>