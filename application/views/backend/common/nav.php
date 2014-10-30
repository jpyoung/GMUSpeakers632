<div class="row row--c">
    <div class="cell">
        <nav class="nav nav--sub" id="account-navigation">
            <ul class="nav-list list dn db--m">
                <li class="<?php echo (($nav_selection == 1) ? "is-active list-item nav-item" : "nav-item list-item"); ?>">
                    <a href="<?php echo base_url(); ?>index.php/admin/goto_edit_home_page" class="nav-item-link list-item-link">Edit Home Page</a>
                </li>
                <li class="<?php echo (($nav_selection == 2) ? "is-active list-item nav-item" : "nav-item list-item"); ?>">
                    <a href="<?php echo base_url(); ?>index.php/admin/goto_add_speaker_page?nid=2" class="nav-item-link list-item-link">Add Speaker</a>
                </li>
                <li class="<?php echo (($nav_selection == 3) ? "is-active list-item nav-item" : "nav-item list-item"); ?>">
                    <a href="<?php echo base_url(); ?>index.php/admin/goto_delete_speakers_page?nid=3" class="nav-item-link list-item-link">Delete Speakers</a>
                </li>
                <li class="<?php echo (($nav_selection == 4) ? "is-active list-item nav-item" : "nav-item list-item"); ?>">
                    <a href="<?php echo base_url(); ?>index.php/admin/goto_delete_lectures_page?nid=4" class="nav-item-link list-item-link">Delete Lectures</a>
                </li>
            </ul>
        </nav>
    </div>
</div>