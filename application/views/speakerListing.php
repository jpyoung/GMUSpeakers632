<!-- start: vertNavBar section -->
<?php include('common/header.php'); ?>
<!-- end: vertNavBar section -->

<?php print_r($talks); ?>

<main class='content'><div class='row'>
<div class='cell well'>
<div class='cell cell--s well'>
    <h1 class='h2 mbm mtm tac thb tfl twn'>
        Wander through <strong class="tfb">All Lectures</strong>, and select one that sparks your interest.  If you like what you see, you may request a speaking engagement.
    </h1>
</div>


<div class='g mbl' id='course-list'>
<div class='g-b g-b--l--1of2'>
    <article class='card card--a course' id='course_115' itemscope='' itemtype='http://schema.org/Product'>
        <div class='course-badge badge'>
            <a href="/courses/front-end-foundations"><img alt="Front-end Foundations Completion Badge" class="badge-img" height="110" itemprop="image" src="images/jeff_offutt.gif" width="110" />
            </a></div>
        <div class='course-content'>
            <div class='mbxs mbf--m'>
                <span class='label'>Lecture</span>
                <div class='di dn--m'>
                    <a href="/paths/html-css" class="tag tag--header tag--html-css">HTML/CSS</a>
                </div>
            </div>
            <h2 class='course-title'>
                <a href="/courses/front-end-foundations" class="course-title-link" data-segment-link="Course Visited" data-segment-properties="{&quot;course_title&quot;:&quot;Front-end Foundations&quot;,&quot;source&quot;:&quot;All Courses&quot;}">Front-end Foundations</a>
                <div class='dn di--m'>
                    <a href="/paths/javascript" class="tag tag--header tag--javascript">Tech Talk</a>
                </div>
            </h2>
            <p class='course-tagline' itemprop='description'>Learn how to build a website with HTML and CSS.</p>
        </div>
    </article>

</div>
<div class='g-b g-b--l--1of2'>
    <article class='card card--a course' id='course_114' itemscope='' itemtype='http://schema.org/Product'>
        <div class='course-badge badge'>
            <a href="/courses/mastering-github"><img alt="Mastering GitHub Completion Badge" class="badge-img" height="110" itemprop="image" src="images/Karen_Bune.gif" width="110" />
            </a></div>
        <div class='course-content'>
            <div class='mbxs mbf--m'>
                <span class='label'>Lecture</span>
                <div class='di dn--m'>
                    <a href="/paths/git" class="tag tag--header tag--git">Git</a>
                </div>
            </div>
            <h2 class='course-title'>
                <a href="/courses/mastering-github" class="course-title-link" data-segment-link="Course Visited" data-segment-properties="{&quot;course_title&quot;:&quot;Mastering GitHub&quot;,&quot;source&quot;:&quot;All Courses&quot;}">Mastering GitHub</a>
                <div class="dn di--m">
                    <a href="/paths/git" class="tag tag--header tag--ruby">Other</a>
                </div>
            </h2>
            <p class='course-tagline' itemprop='description'>Better collaboration through GitHub.</p>
        </div>
    </article>

</div>
<div class='g-b g-b--l--1of2'>
    <article class='card card--a course' id='course_113' itemscope='' itemtype='http://schema.org/Product'>
        <div class='course-badge badge'>
            <a href="/courses/javascript-best-practices"><img alt="JavaScript Best Practices Completion Badge" class="badge-img" height="110" itemprop="image" src="images/Maurice_McTigue.gif" width="110" />
            </a></div>
        <div class='course-content'>
            <div class='mbxs mbf--m'>
                <span class='label'>Lecture</span>
                <div class='di dn--m'>
                    <a href="/paths/javascript" class="tag tag--header tag--javascript">JavaScript</a>
                </div>
            </div>
            <h2 class='course-title'>
                <a href="/courses/javascript-best-practices" class="course-title-link" data-segment-link="Course Visited" data-segment-properties="{&quot;course_title&quot;:&quot;JavaScript Best Practices&quot;,&quot;source&quot;:&quot;All Courses&quot;}">JavaScript Best Practices</a>
                <div class="dn di--m">
                    <a href="/paths/html-css" class="tag tag--header tag--html-css">Business</a>
                </div>
            </h2>
            <p class='course-tagline' itemprop='description'>Explore useful tips for informed and improved JavaScript development.</p>
        </div>
    </article>

</div>


    <div class='g-b g-b--l--1of2'>
        <article class='card card--a course' id='course_113' itemscope='' itemtype='http://schema.org/Product'>
            <div class='course-badge badge'>
                <a href="/courses/javascript-best-practices"><img alt="JavaScript Best Practices Completion Badge" class="badge-img" height="110" itemprop="image" src="images/Don_Boileau.gif" width="110" />
                </a></div>
            <div class='course-content'>
                <div class='mbxs mbf--m'>
                    <span class='label'>Lecture</span>
                    <div class='di dn--m'>
                        <a href="/paths/javascript" class="tag tag--header tag--javascript">JavaScript</a>
                    </div>
                </div>
                <h2 class='course-title'>
                    <a href="/courses/javascript-best-practices" class="course-title-link" data-segment-link="Course Visited" data-segment-properties="{&quot;course_title&quot;:&quot;JavaScript Best Practices&quot;,&quot;source&quot;:&quot;All Courses&quot;}">JavaScript Best Practices</a>
                    <div class='dn di--m'>
                        <a href="/paths/ios" class="tag tag--header tag--ios">Science</a>
                    </div>
                </h2>
                <p class='course-tagline' itemprop='description'>Explore useful tips for informed and improved JavaScript development.</p>
            </div>
        </article>

    </div>









 <?php foreach($talks as $row): ?>
    <div class='g-b g-b--l--1of2'>
        <article class='card card--a course' id='course_113' itemscope='' itemtype='http://schema.org/Product'>
            <div class='course-badge badge'>
                <a href="/courses/javascript-best-practices"><img  class="badge-img" height="110" itemprop="image" src="<?php print_r($row['userinfo']->image_url); ?>" width="110" />
                </a></div>
            <div class='course-content'>
                <div class='mbxs mbf--m'>
                    <span class='label'>Lecture</span>
                    <div class='di dn--m'>
                        <a href="/paths/javascript" class="tag tag--header tag--javascript">JavaScript</a>
                    </div>
                </div>
                <h2 class='course-title'>
                    <a href="/courses/javascript-best-practices" class="course-title-link"><?php print_r($row['talks']->title); ?></a>
                    <div class='dn di--m'>
                        <?php $cat = $row['userinfo']->category;
                            if ($cat == 1) {
                                // tech talk
                                echo '<a href="/paths/javascript" class="tag tag--header tag--javascript">Tech Talk</a>';
                            } else if ($cat == 2) {
                                //science
                                echo '<a href="#" class="tag tag--header tag--ios">Science</a>';
                            } else if ($cat == 3) {
                                //business
                                echo '<a href="/paths/html-css" class="tag tag--header tag--html-css">Business</a>';
                            } else {
                                //other
                                echo '<a href="/paths/git" class="tag tag--header tag--ruby">Other</a>';
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
