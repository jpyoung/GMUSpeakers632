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
                <form accept-charset="UTF-8" action="<?php echo base_url();?>index.php/admin/ehp_form_action" method="post">

                    <fieldset class="form-field">
                        <label class="form-label">Youtube Video URL</label>
                        <input class="form-input" id="youtube_url" name="youtube_url" size="30" type="text" autofocus value="<?php echo $prefs[0]->video_url; ?>">
                    </fieldset>

                    <fieldset class="form-field">
                        <label class="form-label" data-required="true">Homepage Center Content</label>
                        <textarea id="center_content" name="center_content" class="form-input mbxs js-showPassword-input"><?php echo $prefs[0]->center_content; ?>
                        </textarea>
                    </fieldset>


                    <div class="bdrb mbm mtm mtl--m pbm tac">
                        <input class="form-btn btn mbm" name="commit_ehp" type="submit" value="Update">
                        <input class="form-btn btn mbm" name="commit_ehp" type="submit" value="Reset to Default">
                    </div>

                </form>
            </div>


        </div>



</main>



<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->
