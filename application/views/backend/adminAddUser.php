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
                Simply fill out the form to add a new user.
            </h1>
        </div>


        <div class='g mbl' id='course-list'>


            <div class='g-b g-b--l--1of2'>
                <article class='card card--a course' id='course_115'>
                    <div class='course-badge badge'>
                        <a href="/courses/front-end-foundations"><img class="badge-img" height="110" itemprop="image" src="images/noProfilePicture.png" width="110" />
                        </a></div>
                    <div class='course-content'>
                        <h2 class='course-title'>
                            <a href="/courses/front-end-foundations" class="course-title-link">Name will go here</a>
                            <div class='dn di--m'>
                                <a href="/paths/javascript" class="tag tag--header tag--javascript">Speaker Category will go here</a>
                            </div>
                        </h2>
                    </div>
                </article>
            </div>


            <div id="newSpeakerFormArea">
                <form accept-charset="UTF-8" action="/users?analytics%5BSign+Up+Page%5D=%2Fusers%2Fsign_up" method="post">

                    <fieldset class="form-field">
                        <label class="form-label" for="user_username">Speakers Full Name</label><input class="form-input" id="registration_username" name="user[username]" size="30" type="text" autofocus>
                    </fieldset>

                    <fieldset class="form-field">
                        <label class="form-label" data-required="true" for="user_password">Linkedin Profile Image URL</label><input class="form-input mbxs js-showPassword-input" id="registration_password" name="user[password]" size="30" type="password">
                    </fieldset>

                    <fieldset class="form-field">
                        <label class="form-label" data-required="true">Speakers Category</label>
                        <input type="radio" name="categ" value="Tech Talk">Tech Talk<br>
                        <input type="radio" name="categ" value="Business">Business<br/>
                        <input type="radio" name="categ" value="Science">Science<br>
                        <input type="radio" name="categ" value="Other">Other
                    </fieldset>

                    <div class="bdrb mbm mtm mtl--m pbm tac">
                        <input class="form-btn btn mbm" name="commit" type="submit" value="Create">
                        <input class="form-btn btn mbm" name="commit" type="submit" value="Cancel">
                    </div>

                </form>
            </div>


        </div>

    <style>



    </style>




        <!--<div id="newSpeakerFormArea">-->
            <!--<form accept-charset="UTF-8" action="/users?analytics%5BSign+Up+Page%5D=%2Fusers%2Fsign_up" method="post">-->

                <!--<fieldset class="form-field">-->
                    <!--<label class="form-label" for="user_username">Username</label><input class="form-input" id="registration_username" name="user[username]" size="30" type="text">-->
                <!--</fieldset>-->

                <!--<fieldset class="form-field">-->
                    <!--<label class="form-label" data-required="true" for="user_password">Password</label><input class="form-input mbxs js-showPassword-input" id="registration_password" name="user[password]" size="30" type="password">-->
                <!--</fieldset>-->

                <!--<div class="bdrb mbm mtm mtl--m pbm tac">-->
                    <!--<input class="form-btn btn mbm" data-disable-with="Creating…" name="commit" type="submit" value="Login">-->
                <!--</div>-->

            <!--</form>-->
        <!--</div>-->

</main>






<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->
