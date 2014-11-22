<div class="row">
    <div class="cell well--l drWell">
        <div class="form form--session" id="sign-up-form" style="float: right;">
        <?php if (isset($warn)): ?>
        <div class="tac">
            <div style="background-color: yellow; margin-right: 75px; margin-left: 75px; padding: 1px 1px 1px 1px;">
                <?php echo $warn; ?>
            </div>
        </div>
        <?php endIf; ?>
            <form accept-charset="UTF-8" action="<?php echo base_url();?>index.php/login/login_verification" method="post">

                <input class="form-input drLogin" id="registration_username" name="l_username" size="30" type="text" value="<?php if (isset($message)) { if ($message != NULL) { echo $message; }}?>" placeholder="Username" required autofocus>
                    
                <input class="form-input mbxs js-showPassword-input drLogin" id="registration_password" name="l_password" size="30" type="password" placeholder="Password" required>

                <div class="mbm mtm mtl--m pbm tac">
                    <input class="form-btn btn mbm" style="width:300px;" data-disable-with="Creating…" name="commit" type="submit" value="Login">
                </div>

            </form>

        </div>

    </div>
</div>