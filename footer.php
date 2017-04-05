
<footer class="site-footer">

	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>

		<p><?php bloginfo('name');?> -&copyright; <?php echo date('Y'); ?></p>	

</footer>

</div>
<!-- Container Ends -->

<?php  wp_footer();?>

</body>
</html>