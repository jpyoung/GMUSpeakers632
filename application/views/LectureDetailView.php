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
                            <img class="badge-img" height="120" src="<?php echo $talk["image_url"]; ?>" width="100" />
                        </div>
                    </div>
                    <div class='bucket-content'>
                        <h1 class='hero-title mbs ttu'><?php echo $talk["title"]; ?></h1>
                        <p class='mbxs'>
                            <?php $cat = $talk["category"];
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
                        <h2 class='hero-title mbs ttu'>By <?php echo $talk["name"]; ?></h2>

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
                            <h2 class='label'>Talk Description</h2>

                            <p><strong><?php echo $talk["title"]; ?> </strong> - <?php echo $talk["description"]; ?></p>

                        </div>

                        <div class='mbl--m'>
                            <h2 class='label'>BIO</h2>
                            <p><?php echo $talk["bio"]; ?></p>
                        </div>



                    </div>
                </div>




                <div class='g-b g-b--l--2of5'>

                    <div class='card card--a has-card-section mbl'>

                        <div class='card-section'>
                            <h3>Request Talk</h3>
                            <h2 class='mbf tcs tss twb' style="font-size: 80%;">To request this talk, please submit the below form.  The GSB coordinator will get back to you with scheduling details</h2>
                            <div class='card-section'>
                                <div class='bucket'>
                                    <form accept-charset="UTF-8" action="<?php echo base_url(); ?>index.php/home/goto_detail_lecture_view?tid=<?php echo $talk["tid"]; ?>" method="post">

                                        <fieldset class="form-field">
                                            <label class="form-label">Name</label><input class="form-input" type="text" placeholder="First & Last">
                                        </fieldset>

                                        <fieldset class="form-field">
                                            <label class="form-label" data-required="true">Email Address</label><input class="form-input mbxs js-showPassword-input" placeholder="johnDoe@gmu.edu">
                                        </fieldset>

                                        <div class="bdrb mbm mtm mtl--m pbm tac">
                                            <input class="form-btn btn mbm" name="commit2" type="submit" value="Request">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>





            </div>

            <div class="row row--a" id="reviews">
                <div class="cell well">
                    <h2 class="mbm mbl--m tcs tss ttu twb">Talk Reviews (<?php echo (($reviews == null) ? "0" : count($reviews)); ?>)</h2>
                    <div class="g collection collection--m--1of2 js-reviews">

                        <?php if ($reviews != null){ ?>
                        <?php foreach($reviews as $row): ?>
                        <div class="g-b g-b--m--1of2 collection-item">
                            <div class="card card--b">
                                <div class="bucket">
                                    <div class="bucket-content">
                                        <p><?php echo $row->comment; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php } ?>

                    </div>
                    <br/>
                    <div class="mbm mbl--m tac">
                        <form accept-charset="UTF-8" action="<?php echo base_url(); ?>index.php/home/post_a_talk_comment?tid=<?php echo $talk["tid"];?>" method="post">

                            <fieldset class="form-field">
                                <label class="form-label">Comment</label><input class="form-input" id="commentTID" name="commentTID" type="text">
                            </fieldset>


                            <div class="bdrb mbm mtm mtl--m pbm tac">
                                <input class="form-btn btn mbm" data-disable-with="Creating…" name="commit" type="submit" value="Submit">
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>



</main>



<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->

