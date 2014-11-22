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
                Simply fill out the form to add a speaker.
            </h1>
        </div>


        <div class='g mbl' id='course-list'>


            <div class='g-b g-b--l--1of2'>
                <article class='card card--a course' id='course_115'>
                    <div class='course-badge badge'>
                        <img class="badge-img" height="110" itemprop="image" src="<?php echo base_url(); ?>/assets/images/noProfilePicture.png" width="110" />
                    </div>
                    <div class='course-content'>
                        <h2 class='course-title'>
                            <span id="tempNameNewUser" class="course-title-link">Name will go here</span>
                            <div class='dn di--m'>
                                <a href="/paths/javascript" class="tag tag--header tag--javascript">Speaker Category</a>
                            </div>
                        </h2>
                    </div>
                </article>
            </div>


            <div id="newSpeakerFormArea">
                <form accept-charset="UTF-8" action="<?php echo base_url(); ?>index.php/admin/add_new_user" method="post">

                    <fieldset class="form-field">
                        <label class="form-label">Name</label><input class="form-input" id="newUserFullName" name="newUserFullName" size="30" type="text" placeholder="John Doe" autofocus required>
                    </fieldset>

                    <fieldset class="form-field">
                        <label class="form-label">Linkedin Profile Image URL</label><input class="form-input mbxs js-showPassword-input" id="newUserURL" name="newUserURL" placeholder="Image URL" required>
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
                    </div>

                </form>
            </div>


        </div>

<script>

$(function(){

    $("#newUserFullName").keyup(function() {
        if ($(this).val() != "") {
            $("#tempNameNewUser").html($(this).val());
        } else {
            $("#tempNameNewUser").html("Name will go here");
        }
    });

}); 

</script>


</main>



<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->
