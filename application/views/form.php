<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="BaseStyle.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>

<div class="row">
    <div class="cell cell--xs well well--l">
        <div class="mbm mbl--m tac">
            <h1>Sign In</h1>
        </div>
        <div class="form form--session" id="sign-up-form">
            <form accept-charset="UTF-8" action="/users?analytics%5BSign+Up+Page%5D=%2Fusers%2Fsign_up" method="post">

                <fieldset class="form-field">
                    <label class="form-label" for="user_username">Username</label><input class="form-input" id="registration_username" name="user[username]" size="30" type="text">
                </fieldset>

                <fieldset class="form-field">
                    <label class="form-label" data-required="true" for="user_password">Password</label><input class="form-input mbxs js-showPassword-input" id="registration_password" name="user[password]" size="30" type="password">
                </fieldset>

                <div class="bdrb mbm mtm mtl--m pbm tac">
                    <input class="form-btn btn mbm" data-disable-with="Creating…" name="commit" type="submit" value="Login">
                </div>

            </form>

        </div>

    </div>
</div>


</body>
</html>





