<form  method="post" role="form">
					<span class="login100-form-logo">
						<img alt="" src="<?= \systeme\Application\Application::image("hospital.png") ?>">
					</span>
    <span class="login100-form-title p-b-34 p-t-27">
						Connecter
					</span>


    <div class="wrap-input100 validate-input" data-validate="Enter username">
        <input class="input100" type="text" name="username" placeholder="Nom Utilisateur" value="admin" required/>
        <span class="focus-input100" data-placeholder=""></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="Motdepasse" value="12345"required/>
        <span class="focus-input100" data-placeholder=""></span>
    </div>

    <div class="contact100-form-checkbox">
        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
        <label class="label-checkbox100" for="ckb1">
            Se souvenir de moi
        </label>
    </div>
    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            connecter
        </button>
    </div>
    <div class="text-center p-t-30">
        <a class="txt1" href="forgot_password.html">
           Mot de passe oublier ?
        </a>
    </div>
</form>