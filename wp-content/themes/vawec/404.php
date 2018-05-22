<?php
    get_header();
?>
<section id="not-found">
    <div class="container">
        <div class="col-12" id="not-found-title">
            <h1><?php the_field('404_title', 'option') ?></h1>
        </div>
        <div class="col-12" id="not-found-texte">
            <p><?php the_field('404_paragraphe', 'option') ?></p>
        </div>
    </div>
</section>

<?php
get_footer();
