<!-- start: vertNavBar section -->
<?php include('common/header.php'); ?>
<!-- end: vertNavBar section -->



<div class="row row--c">
    <div class="cell">
        <nav class="nav nav--sub" id="account-navigation">

            <ul class="nav-list list dn db--m">
                <li class="-active list-item nav-item">
                    <a href="/account" class="nav-item-link list-item-link">Edit Home Page</a>
                </li>
                <li class="nav-item list-item">
                    <a href="adminAddUser.html" class="nav-item-link list-item-link">Add Speaker</a>
                </li>
                <li class="is-active list-item nav-item">
                    <a href="adminDeleteSpeaker.html" class="nav-item-link list-item-link">Delete Speakers</a>
                </li>
                <li class="nav-item list-item">
                    <a href="adminTalksEdits.html" class="nav-item-link list-item-link">Delete Lectures</a>
                </li>
            </ul>
        </nav>
    </div>
</div>



<main class='content'><div class='row'>
    <div class='cell well'>
        <div class='cell cell--s well'>
            <h1 class='h2 mbm mtm tac thb tfl twn'>
                Simply press the delete button to delete a speaker and their associated talks.  Be careful, this action can not be undone.
            </h1>
        </div>


        <div class='g mbl' id='course-list'>
            <div class='g-b g-b--l--1of2'>
                <article class='card card--a course' id='course_115'>
                    <div style="float: right">
                        <a href="/paths/ruby" class="btn btn--ruby admin-delete-btn">Delete</a>
                    </div>
                    <div class='course-badge badge'>
                        <a href="/courses/front-end-foundations"><img alt="Front-end Foundations Completion Badge" class="badge-img" height="110" itemprop="image" src="images/jeff_offutt.gif" width="110" />
                        </a></div>
                    <div class='course-content'>
                        <h2 class='course-title'>
                            <a href="/courses/front-end-foundations" class="course-title-link">Jeff Offutt</a>
                            <div class='dn di--m'>
                                <a href="/paths/javascript" class="tag tag--header tag--javascript">Tech Talk</a>
                            </div>
                        </h2>
                    </div>
                </article>

            </div>
            <div class='g-b g-b--l--1of2'>
                <article class='card card--a course' id='course_114'>
                    <div style="float: right">
                        <a href="/paths/ruby" class="btn btn--ruby admin-delete-btn">Delete</a>
                    </div>
                    <div class='course-badge badge'>
                        <a href="/courses/mastering-github"><img class="badge-img" height="110" itemprop="image" src="images/Karen_Bune.gif" width="110" />
                        </a></div>
                    <div class='course-content'>
                        <h2 class='course-title'>
                            <a href="/courses/mastering-github" class="course-title-link">Karen Bune</a>
                            <div class="dn di--m">
                                <a href="/paths/git" class="tag tag--header tag--ruby">Other</a>
                            </div>
                        </h2>
                    </div>
                </article>

            </div>
            <div class='g-b g-b--l--1of2'>
                <article class='card card--a course' id='course_113'>
                    <div style="float: right">
                        <a href="/paths/ruby" class="btn btn--ruby admin-delete-btn">Delete</a>
                    </div>
                    <div class='course-badge badge'>
                        <a href="/courses/javascript-best-practices"><img class="badge-img" height="110" itemprop="image" src="images/Maurice_McTigue.gif" width="110" />
                        </a></div>
                    <div class='course-content'>
                        <h2 class='course-title'>
                            <a href="/courses/javascript-best-practices" class="course-title-link" data-segment-link="Course Visited">Maurice McTigue</a>
                            <div class="dn di--m">
                                <a href="/paths/html-css" class="tag tag--header tag--html-css">Business</a>
                            </div>
                        </h2>
                    </div>
                </article>

            </div>


            <div class='g-b g-b--l--1of2'>
                <article class='card card--a course' id='course_113'>
                    <div style="float: right">
                        <a href="/paths/ruby" class="btn btn--ruby admin-delete-btn">Delete</a>
                    </div>
                    <div class='course-badge badge'>
                        <a href="/courses/javascript-best-practices"><img class="badge-img" height="110" itemprop="image" src="images/Don_Boileau.gif" width="110" />
                        </a></div>
                    <div class='course-content'>

                        <h2 class='course-title'>
                            <a href="/courses/javascript-best-practices" class="course-title-link">Don Boileau</a>
                            <div class='dn di--m'>
                                <a href="/paths/ios" class="tag tag--header tag--ios">Science</a>
                            </div>
                        </h2>
                    </div>
                </article>
            </div>



        </div>


</main>






<!-- start: vertNavBar section -->
<?php include('common/footer.php'); ?>
<!-- end: vertNavBar section -->
