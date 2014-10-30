<!-- start: vertNavBar section -->
<?php include('common/header.php'); ?>
<!-- end: vertNavBar section -->


<!-- start: vertNavBar section -->
<?php include('common/nav.php'); ?>
<!-- end: vertNavBar section -->




<main class='content'><div class='row'>
    <div class='cell well'>
        <div class='cell cell--s well'>
            <h1 class='h2 mbm mtm tac thb tfl twn'>
                Editing the home page of GSB.
            </h1>
        </div>


        <div class='g mbl' id='course-list'>


            <div id="newSpeakerFormArea">
                <form accept-charset="UTF-8" action="/users?analytics%5BSign+Up+Page%5D=%2Fusers%2Fsign_up" method="post">

                    <fieldset class="form-field">
                        <label class="form-label" for="user_username">Youtube Video URL</label>
                        <input class="form-input" id="registration_username" name="user[username]" size="30" type="text" autofocus value="http://i.ytimg.com/vi/ZYnk2AW616w/sddefault.jpg">
                    </fieldset>

                    <fieldset class="form-field">
                        <label class="form-label" data-required="true" for="user_password">Homepage Center Content</label>
                        <textarea class="form-input mbxs js-showPassword-input">Mason Speakers comprises over 100 professors, researchers, administrators and alumni volunteers from George Mason University who provide lectures and guest presentations to organizations and businesses free of charge.
                        </textarea>
                    </fieldset>


                    <div class="bdrb mbm mtm mtl--m pbm tac">
                        <input class="form-btn btn mbm" name="commit" type="submit" value="Update">
                        <input class="form-btn btn mbm" name="commit" type="submit" value="Cancel">
                    </div>

                </form>
            </div>


        </div>



</main>






<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->
