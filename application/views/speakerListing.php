<!-- start: vertNavBar section -->
<?php include('common/header.php'); ?>
<!-- end: vertNavBar section -->

<?php //print_r($talks); ?>

<main class='content'><div class='row'>
<div class='cell well'>
<div class='cell cell--s well'>
    <h1 class='h2 mbm mtm tac thb tfl twn'>
        Wander through <strong class="tfb">All Lectures</strong>, and select one that sparks your interest.  If you like what you see, you may request a speaking engagement.
    </h1>
</div>


 <?php foreach($talks as $row): ?>
    <div class='g-b g-b--l--1of2'>
        <article class='card card--a course' id='course_113' itemscope='' itemtype='http://schema.org/Product'>
            <div class='course-badge badge'>
                <a href="/courses/javascript-best-practices"><img  class="badge-img" height="110" itemprop="image" src="<?php print_r($row['userinfo']->image_url); ?>" width="110" />
                </a></div>
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



</div>


</main>



<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->
