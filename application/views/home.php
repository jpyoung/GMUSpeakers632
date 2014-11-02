<!-- start: vertNavBar section -->
<?php include('common/header.php'); ?>
<!-- end: vertNavBar section -->


<main class='content'>

<!-- style="display: none;" -->
<div id="dropIn" style="display: none;">
    <!-- start: vertNavBar section -->
    <?php include('loginDrop.php'); ?>
    <!-- end: vertNavBar section -->
</div>


<div class="row row--b">
    <div class="cell well tci">
        <div class="mbm mbl--m pts tac">
            <h1 class="mbf tci">MASON SPEAKERS</h1>
            <p class="oph tci tsi tsl">Connecting the University with the Community.</p>
        </div>
    </div>
</div>


<div class='row'>
<div class='cell well'>
<div class='cell cell--s well'>
    <h1 class='h2 mbm mtm tac thb tfl twn'>
         <?php echo $prefs[0]->center_content; ?>
    </h1>
</div>




<div class="row">
    <div class='dn di--m' style="margin-right: 10px;">
        Filter By: 
    </div>

    <?php foreach($filter['remaining'] as $row): ?>
        <div class='dn di--m'>
            <?php echo $row; ?>
        </div>
    <?php endforeach; ?>

    <div class='dn di--m' style="margin-left:20px;">
        Current Filter: 
    </div>
    <div class='dn di--m'>
        <?php echo $filter['cf']; ?>
    </div>
</div>

</br>

<?php if ($talks != null || !isset($talks)){ ?>
 <?php foreach($talks as $row): ?>
    <div class='g-b g-b--l--1of2'>
        <article class='card card--a course' id='course_113' itemscope='' itemtype='http://schema.org/Product'>
            <div class='course-badge badge'>
                <img  class="badge-img" height="110" itemprop="image" src="<?php print_r($row['userinfo']->image_url); ?>" width="110" />
            </div>
            <div class='course-content'>
                <h2 class='course-title'>
                    <a href="<?php echo base_url(); ?>index.php/home/goto_detail_lecture_view?tid=<?php echo $row['talks']->tid; ?>" class="course-title-link"><?php print_r($row['talks']->title); ?></a>
                    <div class='dn di--m'> <br/>
                        <?php $cat = $row['userinfo']->category;
                            if ($cat == 1) {
                                // tech talk
                                echo '<span class="tag tag--header tag--javascript">Tech Talk</span>';
                            } else if ($cat == 2) {
                                //science
                                echo '<span class="tag tag--header tag--ios">Science</span>';
                            } else if ($cat == 3) {
                                //business
                                echo '<span class="tag tag--header tag--html-css">Business</span>';
                            } else {
                                //other
                                echo '<span class="tag tag--header tag--ruby">Other</span>';
                            }
                        ?>
                        
                    </div>
                </h2>
                <?php $temp = explode('.', $row['talks']->description); ?>
                <p class='course-tagline' style="max-height: 42px; overflow: hidden;" itemprop='description'><?php echo $temp[0]; ?></p>
                <?php $temp = 0; ?>
            </div>
        </article>

    </div>
 <?php endforeach; ?>
<?php } ?>


</div>


</main>



<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->
