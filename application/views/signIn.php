<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="<?php echo base_url(); ?>assets/BaseStyle.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>

<div class="row">
    <div class="cell cell--xs well well--l">
        <div class="mbm mbl--m tac">
            <h1>Sign In</h1>
        </div>
        <div class="form form--session" id="sign-up-form">
            <form accept-charset="UTF-8" action="<?php echo base_url();?>index.php/login/login_verification" method="post">

                <fieldset class="form-field">
                    <label class="form-label">Username</label><input class="form-input" id="registration_username" name="l_username" size="30" type="text" autofocus>
                </fieldset>

                <fieldset class="form-field">
                    <label class="form-label" data-required="true">Password</label><input class="form-input mbxs js-showPassword-input" id="registration_password" name="l_password" size="30" type="password">
                </fieldset>

                <div class="bdrb mbm mtm mtl--m pbm tac">
                    <input class="form-btn btn mbm" data-disable-with="Creating…" name="commit" type="submit" value="Login">
                    <a href="<?php echo base_url(); ?>index.php/home/" style="padding: 0px;" class="form-btn btn mbm">Back</a>
                </div>


            </form>

        </div>

    </div>
</div>


</body>
</html>
