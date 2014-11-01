<!-- start: vertNavBar section -->
<?php include('common/header.php'); ?>
<!-- end: vertNavBar section -->


<main class='content'><div class='hero hero--banner hero--banner--dark row row--d' style="background: #112339;">
    <div class='cell well well--xl'>
        <div class='g'>
            <div class='g-b g-b--m--3of4'>
                <div class='bucket bucket--l bucket--flag mts--m tac tal--m'>
                    <div class='bucket-media'>
                        <div class='badge badge--m dn db--m'>
                            <img class="badge-img" height="120" src="<?php echo $profile['image_url']; ?>" width="100" />
                        </div>
                    </div>
                    <div class='bucket-content'>
                        <p class='mbxs'>
                            <?php $cat = $profile["category"];
                                if ($cat == 1) {
                                    // tech talk
                                    echo '<span class="opf tag tag--javascript">Tech Talk</span>';
                                } else if ($cat == 2) {
                                    //science
                                    echo '<span class="opf tag tag--ios">Science</span>';
                                } else if ($cat == 3) {
                                    //business
                                    echo '<span class="opf tag tag--html-css">Business</span>';
                                } else {
                                    //other
                                    echo '<span class="opf tag tag--ruby">Other</span>';
                                }
                            ?>
                        </p>
                        <h1 class='hero-title mbs ttu'><?php echo $profile['name']; ?></h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='row'>
<div class='cell well well--l'>
<div class='g'>
    <div class='g-b g-b--l--3of5'>
        <div class='mbm'>
            <div class='mbl--m'>
                <h2 class='label'>BIO</h2>
                <div style="float: right">
                    <a href="/paths/ruby" class="btn btn--html-css admin-delete-btn">Edit BIO</a>
                </div>
                <p><?php echo $profile['bio']; ?></p>

            </div>


            <h2 class='label'>Talk Listing</h2>


            <?php foreach($talks as $row): ?>
            <div class='card card--b mbm--m mbs' id='course-overview'>
                <div style="float: right">
                    <a href="/paths/ruby" class="btn btn--html admin-delete-btn">Edit</a>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/speaker_delete_talk?sdtid=<?php echo $row->tid; ?>" class="btn btn--ruby admin-delete-btn">Delete</a>
                </div>
                <div class='bucket bucket--flag'>
                    <div class='bucket-media dn db--m'>
                     
                    </div>
                    <div class='bucket-content'>
                        <h3>
                            <?php echo $row->title; ?>
                        </h3>
                        <p class='mbf'><?php echo $row->description; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>




            <div class='card card--b mbm--m mbs' id='course-overview'>
                <div style="float: right">
                    <a href="/paths/ruby" class="btn btn--html admin-delete-btn">Edit</a>
                    <a href="/paths/ruby" class="btn btn--ruby admin-delete-btn">Delete</a>
                </div>
                <div class='bucket bucket--flag'>
                    <div class='bucket-media dn db--m'>
                        <div class='badge' style="background: #d7a627; color: #fff;">
                            <p style="margin-top: 40px; margin-left: 10px;">TECH TALK</p>
                        </div>
                    </div>
                    <div class='bucket-content'>
                        <h3>
                            Tags : et rami Ipsum
                        </h3>
                        <p class='mbf'>Semita sub productione solvo git Tags : ramos remissionis , et Flickr Github Ipsum .</p>
                    </div>
                </div>

                <!--editing mode-->
                <div class='bucket bucket--flag' style="background-color: white; width: 100%; margin-top: 10px; border-top: 1px solid black;">
                    <div><h3 style="text-align: center; margin-top: 10px;">Editing Mode</h3></div><br/>
                    <form accept-charset="UTF-8" action="/users?analytics%5BSign+Up+Page%5D=%2Fusers%2Fsign_up" method="post" style="margin: 0 20px 0 20px;">

                        <fieldset class="form-field">
                            <label class="form-label" for="user_username">Topic</label>
                            <input class="form-input" id="registration_username" name="user[username]" type="text" value="Tags : et rami Ipsum">
                        </fieldset>

                        <fieldset class="form-field">
                            <label class="form-label" data-required="true" for="user_password">Description</label>
                            <input class="form-input mbxs js-showPassword-input" id="registration_password" name="user[password]" value="Semita sub productione solvo git Tags : ramos remissionis , et Flickr Github Ipsum .">
                        </fieldset>

                        <div class="mbm mtm tac">
                            <input class="form-btn btn mbm" style="min-width: 10px;" data-disable-with="Creating…" name="commit" type="submit" value="Save Edit">
                        </div>

                    </form>
                </div>
            </div>





        </div>
    </div>




    <div class='g-b g-b--l--2of5'>

        <div class='card card--a has-card-section mbl'>

            <div class='card-section'>
                <h2 class='mbf tcs tss ttu twb'>Add a New Talk</h2>
                <div class='card-section'>
                    <div class='bucket'>
                        <form accept-charset="UTF-8" action="<?php echo base_url(); ?>index.php/dashboard/add_a_talk" method="post">

                            <fieldset class="form-field">
                                <label class="form-label">Topic</label><input class="form-input" id="sp_topic" name="sp_topic" size="30" type="text">
                            </fieldset>

                            <fieldset class="form-field">
                                <label class="form-label">Description</label><textarea class="form-input mbxs js-showPassword-input" id="sp_description" name="sp_description"></textarea>
                            </fieldset>

                            <div class="bdrb mbm mtm mtl--m pbm tac">
                                <input class="form-btn btn mbm" data-disable-with="Creating…" name="commit" type="submit" value="Add Talk">
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
</div>
</div>



</main>



<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->

