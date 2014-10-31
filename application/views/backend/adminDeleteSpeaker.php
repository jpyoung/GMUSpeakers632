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
                Simply press the delete button to delete a speaker and their associated talks.  Be careful, this action can not be undone.
            </h1>
        </div>


        
        <div class='g mbl' id='course-list'>
            
            <?php foreach($speakers as $row): ?>
            <div class='g-b g-b--l--1of2'>
                <article class='card card--a course' id='course_115'>
                    <div style="float: right">
                        <a href="/paths/ruby" class="btn btn--ruby admin-delete-btn">Delete</a>
                    </div>
                    <div class='course-badge badge'>
                        <img class="badge-img" height="110" itemprop="image" src="<?php echo $row->image_url; ?>" width="110" />
                    </div>
                    <div class='course-content'>
                        <h2 class='course-title'>
                            <a href="/courses/front-end-foundations" class="course-title-link"><?php echo $row->name; ?></a>
                        <div class='dn di--m'> <br/><br/>
                        <?php $cat = $row->category;
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
                    </div>
                </article>

            </div>
            <?php endforeach; ?>  
        </div>
        


</main>






<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->
