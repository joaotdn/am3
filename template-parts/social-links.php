<?php
$twitter = get_field('am3_twitter', 'option');
$facebook = get_field('am3_facebook', 'option');
$google_plus = get_field('am3_google_plus', 'option');
$instagram = get_field('am3_instagram', 'option');

if($twitter) {
	echo '<li><a href="'. $twitter .'" title="Siga-nos no Twitter" class="twitter-link" target="_blank"><i class="mkdf-social-icon-widget social_twitter"></i></a></li>';
}

if($facebook) {
	echo '<li><a href="'. $facebook .'" title="Siga-nos no Facebook" class="facebook-link" target="_blank"><i class="mkdf-social-icon-widget social_facebook"></i></a></li>';
}

if($google_plus) {
	echo '<li><a href="'. $google_plus .'" title="Siga-nos no Google Plus" class="gplus-link" target="_blank"><i class="mkdf-social-icon-widget social_googleplus"></i></a></li>';
}

if($instagram) {
	echo '<li><a href="'. $instagram .'" title="Siga-nos no Instagram" class="instagram-link" target="_blank"><i class="mkdf-social-icon-widget social_instagram"></i></a></li>';
}
?>
