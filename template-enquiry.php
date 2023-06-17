<?php
// Template Name: Enquiry Template

get_header();
?>
<section class="md:p-14 p-5 border-b">
    <div class="mb-3">Home > Enquiry</div>
    <div>
        <h1 class="text-4xl font-bold text-primary">Enquiry</h1>
    </div>
</section>

<section class="md:p-14 p-5">
    <div>
        <h2>Thanks For Showing interest in Bharat Pharmatech </h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, maiores asperiores, aliquam odit sint
            consectetur sequi iusto, expedita deleniti nemo rerum voluptatibus impedit possimus voluptas dolor.
            Aspernatur ipsa dolorem numquam.</p>
        <div>
            <?php echo do_shortcode('[contact-form-7 id="80" title="Contact form 1"]') ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>