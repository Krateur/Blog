<footer class="blog-footer">
    <?php wp_footer(); ?>
    <p> &copy; <?= Date('Y'); ?>  -  <?php bloginfo('name'); ?></p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
</body>
</html>