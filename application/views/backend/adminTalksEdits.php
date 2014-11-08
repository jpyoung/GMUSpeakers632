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
                Simply press the delete button to delete a speakers talks.
            </h1>
        </div>


        <div class='g mbl' id='course-list'>
            <?php if ($talks) { ?>
            <?php foreach($talks as $row): ?>
            <div class='g-b g-b--l--1of2'>
                <article class='card card--a course' id='course_115' itemscope='' itemtype='http://schema.org/Product'>
                    <div style="float: right">
                        <a href="<?php echo base_url(); ?>index.php/admin/delete_talk?dtid=<?php echo $row['talks']->tid; ?>" class="btn btn--ruby admin-delete-btn">Delete</a>
                    </div>
                    <div class='course-badge badge'>
                        <img class="badge-img" height="110" itemprop="image" src="<?php print_r($row['userinfo']->image_url); ?>" width="110" />
                    </div>
                    <div class='course-content'>
                        <div class='mbxs mbf--m'>
                            <div class='di dn--m'>
                                <a href="/paths/html-css" class="tag tag--header tag--html-css">HTML/CSS</a>
                            </div>
                        </div>
                        <h2 class='course-title' style="max-width: 260px;">
                            <span class="course-title-link"><?php print_r($row['talks']->title); ?></span>
                           
                        </h2>
                    </div>
                </article>

            </div>
            <?php endforeach; ?>
            <?php } else { ?> 
                <p>Sorry, no talks were found.</p>
            <?php } ?>


        </div>


</main>






<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->

