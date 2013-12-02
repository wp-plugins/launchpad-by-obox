<?php
$apollo = new apollo_launchpad();
$apollo_options =  get_option("apollo_display_options");
$apollo_social_options =  get_option("apollo_social_options");
$apollo_theme_options =  get_option("apollo_theme_options");
$apollo_css_options = get_option("apollo_css_options");

if(isset($apollo_options["google_analytics"])) {
	function apollo_google_analytics(){
		global $apollo_options; ?>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '<?php echo $apollo_options["google_analytics"]; ?>']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>
	<?php };
	add_action( 'wp_footer', 'apollo_google_analytics', 50 );
} // if google_analytics