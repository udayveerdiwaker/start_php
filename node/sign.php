


    <link rel="stylesheet" href="sign.css">

    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
            
        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="name" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="text" name="number" minlength="0" maxlength="10" placeholder="Mobile No." required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button>Sign up</button>
            </form>
        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button>Login</button>
            </form>
        </div>
    </div>
