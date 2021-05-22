<?php  

include('connection.php');
include('header.php');

        $username = '';
        $password = '';
        $confirmPwd = '';
        $fullname = '';
        $email = '';

        $usernamePattern='/^\w{4,}$/i';
        $pwdPattern='/^\w{4,}$/i';
        $namePattern='/^[a-z]+( [a-z]+)*$/i';
        $emailPattern='/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i';

        $isValid = TRUE;
        $isOk = TRUE;

        if($isPost) {
            $username=$_REQUEST["username"];
            $password =$_REQUEST["password"];
            $confirmPwd =$_REQUEST["confirmPwd"];
            $fullname = $_REQUEST["fullname"];
            $email = $_REQUEST["email"];
        }

        ?>

		<h2>User Details Form</h2>
		<h4>Please, fill below fields correctly</h4>
		<form id="registerForm" action="register.php" method="post">
				<ul class="form">
					<li>
						<label for="username">Username</label>
                        <input type="text" name="username" form="registerForm" value="<?= $username ?>"/>
                        <?php if ($isPost && !preg_match($usernamePattern, $username)): $isValid=false; ?>
                            <span class="error">Required field.</span>
                        <?php endif ?>
					</li>
					<li>
						<label for="fullname">Full Name</label>
                        <input type="text" name="fullname" form="registerForm" value="<?= $fullname ?>"/>
                        <?php if ($isPost && !preg_match($namePattern, $fullname)): $isValid=false; ?>
                            <span class="error">Required field.</span>
                        <?php endif ?>
					</li>
					<li>
						<label for="email">Email</label>
                        <input type="text" name="email" form="registerForm" value="<?= $email ?>"/>
                        <?php if ($isPost && !preg_match($emailPattern, $email)): $isValid=false; ?>
                            <span class="error">Not a valid email.</span>
                        <?php endif ?>
					</li>
					<li>
						<label for="pwd">Password</label>
                        <input type="password" name="password" form="registerForm" value="<?= $password ?>"/>

                        <?php if ($isPost && (!preg_match($pwdPattern, $password) || $password!=$confirmPwd)): $isValid=false; ?>
                            <span class="error">Required field.</span>
                        <?php endif ?>
					</li>
					<li>
						<label for="confirm_pwd">Confirm Password</label>
                        <input type="password" name="confirmPwd" form="registerForm"/>
					</li>


					<li>
						<input type="submit" value="Sign Up" /> &nbsp; Already registered? <a href="index.php">Login</a>
					</li>
				</ul>
		</form>
	</body>
</html>