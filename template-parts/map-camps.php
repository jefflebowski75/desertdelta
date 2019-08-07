<?php
	
$args = array(
	'numberposts' => -1,
	'post_type'   => 'camps'
);
$allCamps = get_posts( $args );

$camps = array();

foreach($allCamps as $camp) {
	
	$camps[$camp->post_name] = array(
		"title_camp"  => $camp->post_title,
		"link"        => get_permalink($camp->ID),
		"destination" => get_the_terms($camp->ID, 'destinations')[0]->name,
		"description" => substr(wp_strip_all_tags(get_field("description", $camp->ID), true), 0, 110) . "...",
		"image"       => wp_get_attachment_image_src( get_post_thumbnail_id($camp->ID), 'medium' )[0]
	);
}

?>

<div class="map camps" <?php printf('camps="%s"', htmlspecialchars(json_encode($camps), ENT_QUOTES, 'UTF-8')); ?>>
	
	<?php if($post->post_type == "itineraries" && get_query_var('pagename') != "itineraries"): ?>
	
	<div id="view-route" class="button">
		<?php include(get_template_directory() . '/inc/img/itinerary-icon.svg'); ?>
		<span>View route</span>
	</div>
	
	<?php endif; ?>

	<div class="popup">
		
		<div class="content">
			
			<div class="img"><i class="fas fa-times close-popup"></i></div>
			
			<div class="pb2 pt1 pl2 pr2">
				
				<h2 class="heading heading__sm slide-up"></h2>
				
				<span></span>
				
				<p></p>
				
				<a class="button" href="http://desert---delta.local/camps/camp-moremi/">Read more</a>
				
			</div>
			
		</div>
		
		<div class="path-dotted"></div>
		
	</div>
	
	<div class="path-dotted-small"></div>
	
    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/ddmastermap.jpg"/>
 
 
<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
<svg class="map-camps" id="map-camps" version="1.1" baseProfile="tiny"
     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
     x="0px" y="0px" width="2130px" height="1043px" viewBox="0 0 2130 1043" xml:space="preserve">
<defs>
</defs>
<rect fill="none" width="2130" height="1043"/>

<g id="kasane">
    <path d="M1138.5,323.7h-1.7l-4-5.5l-1.2,1v4.4h-1.4v-11.4h1.4v5.6c0.3-0.4,0.6-0.7,1-1.1c0.3-0.4,0.7-0.7,1-1.1l3.1-3.5h1.7l-4.5,5
        L1138.5,323.7z"/>
    <path d="M1143.1,314.9c1,0,1.8,0.2,2.3,0.7c0.5,0.5,0.8,1.2,0.8,2.2v5.8h-1l-0.3-1.2h-0.1c-0.4,0.5-0.8,0.8-1.2,1
        c-0.4,0.2-1,0.3-1.7,0.3c-0.8,0-1.4-0.2-1.9-0.6s-0.8-1.1-0.8-1.9c0-0.9,0.3-1.5,1-2c0.7-0.5,1.7-0.7,3.1-0.8l1.5,0V318
        c0-0.7-0.2-1.2-0.5-1.5s-0.7-0.4-1.3-0.4c-0.4,0-0.9,0.1-1.3,0.2s-0.8,0.3-1.1,0.5l-0.4-1.1c0.4-0.2,0.8-0.4,1.3-0.5
        S1142.6,314.9,1143.1,314.9z M1144.8,319.5l-1.3,0c-1.1,0-1.8,0.2-2.2,0.5c-0.4,0.3-0.6,0.7-0.6,1.3c0,0.5,0.1,0.8,0.4,1.1
        s0.7,0.3,1.1,0.3c0.7,0,1.3-0.2,1.8-0.6c0.5-0.4,0.7-1,0.7-1.8V319.5z"/>
    <path d="M1154.4,321.3c0,0.8-0.3,1.5-0.9,1.9c-0.6,0.4-1.5,0.6-2.5,0.6c-0.6,0-1.1,0-1.5-0.1c-0.4-0.1-0.8-0.2-1.1-0.4V322
        c0.3,0.2,0.8,0.3,1.2,0.5s1,0.2,1.5,0.2c0.7,0,1.2-0.1,1.6-0.3c0.3-0.2,0.5-0.5,0.5-0.9c0-0.2-0.1-0.4-0.2-0.6
        c-0.1-0.2-0.3-0.3-0.6-0.5c-0.3-0.2-0.7-0.4-1.3-0.6c-0.6-0.2-1-0.4-1.4-0.6s-0.7-0.5-0.9-0.8c-0.2-0.3-0.3-0.7-0.3-1.2
        c0-0.7,0.3-1.3,0.9-1.7c0.6-0.4,1.4-0.6,2.3-0.6c0.5,0,1,0.1,1.5,0.2c0.5,0.1,0.9,0.2,1.3,0.4l-0.5,1.1c-0.4-0.1-0.7-0.3-1.1-0.4
        c-0.4-0.1-0.8-0.2-1.2-0.2c-0.6,0-1,0.1-1.3,0.3c-0.3,0.2-0.5,0.4-0.5,0.8c0,0.2,0.1,0.4,0.2,0.6s0.4,0.3,0.7,0.5
        c0.3,0.2,0.8,0.3,1.3,0.5c0.5,0.2,1,0.4,1.4,0.6s0.7,0.5,0.9,0.8C1154.3,320.5,1154.4,320.8,1154.4,321.3z"/>
    <path d="M1159.7,314.9c1,0,1.8,0.2,2.3,0.7c0.5,0.5,0.8,1.2,0.8,2.2v5.8h-1l-0.3-1.2h-0.1c-0.4,0.5-0.8,0.8-1.2,1
        c-0.4,0.2-1,0.3-1.7,0.3c-0.8,0-1.4-0.2-1.9-0.6s-0.8-1.1-0.8-1.9c0-0.9,0.3-1.5,1-2c0.7-0.5,1.7-0.7,3.1-0.8l1.5,0V318
        c0-0.7-0.2-1.2-0.5-1.5s-0.7-0.4-1.3-0.4c-0.4,0-0.9,0.1-1.3,0.2s-0.8,0.3-1.1,0.5l-0.4-1.1c0.4-0.2,0.8-0.4,1.3-0.5
        S1159.2,314.9,1159.7,314.9z M1161.4,319.5l-1.3,0c-1.1,0-1.8,0.2-2.2,0.5c-0.4,0.3-0.6,0.7-0.6,1.3c0,0.5,0.1,0.8,0.4,1.1
        s0.7,0.3,1.1,0.3c0.7,0,1.3-0.2,1.8-0.6c0.5-0.4,0.7-1,0.7-1.8V319.5z"/>
    <path d="M1169.6,314.9c1,0,1.8,0.3,2.3,0.8s0.8,1.3,0.8,2.4v5.6h-1.4v-5.5c0-1.4-0.6-2.1-1.9-2.1c-1,0-1.6,0.3-2,0.8
        c-0.4,0.5-0.5,1.3-0.5,2.3v4.4h-1.4v-8.6h1.1l0.2,1.2h0.1c0.3-0.4,0.7-0.8,1.2-1C1168.5,315,1169.1,314.9,1169.6,314.9z"/>
    <path d="M1178.7,314.9c0.7,0,1.4,0.2,1.9,0.5c0.5,0.3,0.9,0.8,1.2,1.4c0.3,0.6,0.4,1.3,0.4,2v0.8h-5.9c0,1,0.3,1.7,0.7,2.2
        c0.5,0.5,1.1,0.8,2,0.8c0.5,0,1-0.1,1.4-0.2c0.4-0.1,0.9-0.2,1.3-0.4v1.2c-0.4,0.2-0.9,0.3-1.3,0.4c-0.4,0.1-0.9,0.1-1.5,0.1
        c-0.8,0-1.5-0.2-2.2-0.5c-0.6-0.3-1.1-0.8-1.4-1.5c-0.3-0.7-0.5-1.5-0.5-2.4c0-0.9,0.2-1.7,0.5-2.4c0.3-0.7,0.8-1.2,1.3-1.6
        C1177.3,315.1,1177.9,314.9,1178.7,314.9z M1178.7,316.1c-0.7,0-1.2,0.2-1.6,0.6c-0.4,0.4-0.6,1-0.7,1.8h4.4c0-0.7-0.2-1.3-0.5-1.8
        C1179.9,316.3,1179.4,316.1,1178.7,316.1z"/>
</g>

<g id="maun">
    <path d="M734.2,839.1l-3.8-10h-0.1c0,0.3,0.1,0.8,0.1,1.3c0,0.6,0,1.1,0,1.8v6.9h-1.3v-11.4h2.1l3.5,9.4h0.1l3.6-9.4h2.1v11.4h-1.4
        v-7c0-0.6,0-1.1,0-1.6c0-0.5,0.1-1,0.1-1.3h-0.1l-3.8,10H734.2z"/>
    <path d="M746.7,830.4c1,0,1.8,0.2,2.3,0.7c0.5,0.5,0.8,1.2,0.8,2.2v5.8h-1l-0.3-1.2h-0.1c-0.4,0.5-0.8,0.8-1.2,1
        c-0.4,0.2-1,0.3-1.7,0.3c-0.8,0-1.4-0.2-1.9-0.6s-0.8-1.1-0.8-1.9c0-0.9,0.3-1.5,1-2c0.7-0.5,1.7-0.7,3.1-0.8l1.5,0v-0.5
        c0-0.7-0.2-1.2-0.5-1.5s-0.7-0.4-1.3-0.4c-0.4,0-0.9,0.1-1.3,0.2s-0.8,0.3-1.1,0.5l-0.4-1.1c0.4-0.2,0.8-0.4,1.3-0.5
        S746.2,830.4,746.7,830.4z M748.4,834.9l-1.3,0c-1.1,0-1.8,0.2-2.2,0.5c-0.4,0.3-0.6,0.7-0.6,1.3c0,0.5,0.1,0.8,0.4,1.1
        c0.3,0.2,0.7,0.3,1.1,0.3c0.7,0,1.3-0.2,1.8-0.6s0.7-1,0.7-1.8V834.9z"/>
    <path d="M759.6,830.5v8.6h-1.2l-0.2-1.1h-0.1c-0.3,0.4-0.7,0.8-1.2,1c-0.5,0.2-1,0.3-1.6,0.3c-1,0-1.8-0.2-2.3-0.7
        s-0.8-1.3-0.8-2.4v-5.6h1.4v5.5c0,1.4,0.6,2,1.9,2c0.9,0,1.6-0.3,2-0.8c0.4-0.5,0.6-1.3,0.6-2.3v-4.5H759.6z"/>
    <path d="M766.5,830.4c1,0,1.8,0.3,2.3,0.8c0.5,0.5,0.8,1.3,0.8,2.4v5.6h-1.4v-5.5c0-1.4-0.6-2.1-1.9-2.1c-1,0-1.6,0.3-2,0.8
        c-0.4,0.5-0.5,1.3-0.5,2.3v4.4h-1.4v-8.6h1.1l0.2,1.2h0.1c0.3-0.4,0.7-0.8,1.2-1C765.4,830.5,765.9,830.4,766.5,830.4z"/>
</g>

<g id="victoria-falls">
    <path d="M1265.2,354.3l-4.1,11.4h-1.4l-4.1-11.4h1.5l2.6,7.3c0.2,0.5,0.3,0.9,0.4,1.3s0.2,0.8,0.3,1.2c0.1-0.4,0.2-0.8,0.3-1.2
        s0.3-0.9,0.4-1.3l2.6-7.3H1265.2z"/>
    <path d="M1267.2,353.9c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.2,0.4,0.2,0.7c0,0.3-0.1,0.5-0.2,0.7c-0.2,0.1-0.4,0.2-0.6,0.2
        c-0.2,0-0.4-0.1-0.6-0.2s-0.2-0.4-0.2-0.7c0-0.3,0.1-0.5,0.2-0.7S1267,353.9,1267.2,353.9z M1267.9,357.1v8.6h-1.4v-8.6H1267.9z"/>
    <path d="M1274.1,365.9c-0.8,0-1.4-0.2-2-0.5c-0.6-0.3-1-0.8-1.4-1.4c-0.3-0.7-0.5-1.5-0.5-2.5c0-1.1,0.2-1.9,0.5-2.6
        c0.3-0.7,0.8-1.1,1.4-1.5c0.6-0.3,1.3-0.5,2.1-0.5c0.4,0,0.8,0,1.3,0.1c0.4,0.1,0.7,0.2,1,0.3l-0.4,1.2c-0.3-0.1-0.6-0.2-0.9-0.3
        c-0.3-0.1-0.7-0.1-1-0.1c-1.7,0-2.5,1.1-2.5,3.2c0,1,0.2,1.8,0.6,2.4c0.4,0.5,1,0.8,1.8,0.8c0.5,0,0.9,0,1.2-0.1
        c0.4-0.1,0.7-0.2,1-0.4v1.2c-0.3,0.1-0.6,0.3-1,0.3S1274.6,365.9,1274.1,365.9z"/>
    <path d="M1281.2,364.7c0.2,0,0.4,0,0.7,0c0.2,0,0.4-0.1,0.5-0.1v1.1c-0.1,0.1-0.4,0.1-0.6,0.2c-0.3,0-0.5,0.1-0.8,0.1
        c-0.4,0-0.9-0.1-1.2-0.2c-0.4-0.2-0.7-0.4-0.9-0.8c-0.2-0.4-0.4-0.9-0.4-1.6v-5h-1.2v-0.7l1.2-0.6l0.6-1.8h0.8v2h2.5v1.1h-2.5v5
        c0,0.5,0.1,0.9,0.4,1.2C1280.5,364.6,1280.8,364.7,1281.2,364.7z"/>
    <path d="M1291.6,361.4c0,1.4-0.4,2.5-1.1,3.3c-0.7,0.8-1.7,1.2-2.9,1.2c-0.8,0-1.4-0.2-2-0.5s-1.1-0.9-1.4-1.5
        c-0.3-0.7-0.5-1.5-0.5-2.4c0-1.4,0.4-2.5,1.1-3.3c0.7-0.8,1.7-1.2,2.9-1.2c0.8,0,1.5,0.2,2,0.5c0.6,0.3,1.1,0.8,1.4,1.5
        C1291.4,359.6,1291.6,360.4,1291.6,361.4z M1285.1,361.4c0,1,0.2,1.8,0.6,2.4c0.4,0.6,1,0.9,1.9,0.9c0.9,0,1.5-0.3,1.9-0.9
        s0.6-1.4,0.6-2.4c0-1-0.2-1.8-0.6-2.4s-1-0.9-1.9-0.9c-0.9,0-1.5,0.3-1.9,0.9S1285.1,360.4,1285.1,361.4z"/>
    <path d="M1297.8,357c0.2,0,0.3,0,0.5,0s0.3,0,0.5,0.1l-0.2,1.3c-0.1,0-0.3-0.1-0.5-0.1c-0.2,0-0.3,0-0.5,0c-0.4,0-0.8,0.1-1.2,0.4
        c-0.4,0.2-0.7,0.6-0.9,1c-0.2,0.4-0.3,0.9-0.3,1.5v4.6h-1.4v-8.6h1.2l0.2,1.6h0.1c0.3-0.5,0.6-0.9,1.1-1.2
        C1296.7,357.1,1297.2,357,1297.8,357z"/>
    <path d="M1301.1,353.9c0.2,0,0.4,0.1,0.6,0.2c0.2,0.1,0.2,0.4,0.2,0.7c0,0.3-0.1,0.5-0.2,0.7c-0.2,0.1-0.4,0.2-0.6,0.2
        c-0.2,0-0.4-0.1-0.6-0.2s-0.2-0.4-0.2-0.7c0-0.3,0.1-0.5,0.2-0.7S1300.9,353.9,1301.1,353.9z M1301.8,357.1v8.6h-1.4v-8.6H1301.8z"
        />
    <path d="M1307.8,357c1,0,1.8,0.2,2.3,0.7c0.5,0.5,0.8,1.2,0.8,2.2v5.8h-1l-0.3-1.2h-0.1c-0.4,0.5-0.8,0.8-1.2,1
        c-0.4,0.2-1,0.3-1.7,0.3c-0.8,0-1.4-0.2-1.9-0.6s-0.8-1.1-0.8-1.9c0-0.9,0.3-1.5,1-2c0.7-0.5,1.7-0.7,3.1-0.8l1.5,0V360
        c0-0.7-0.2-1.2-0.5-1.5s-0.7-0.4-1.3-0.4c-0.4,0-0.9,0.1-1.3,0.2s-0.8,0.3-1.1,0.5l-0.4-1.1c0.4-0.2,0.8-0.4,1.3-0.5
        S1307.2,357,1307.8,357z M1309.4,361.5l-1.3,0c-1.1,0-1.8,0.2-2.2,0.5c-0.4,0.3-0.6,0.7-0.6,1.3c0,0.5,0.1,0.8,0.4,1.1
        s0.7,0.3,1.1,0.3c0.7,0,1.3-0.2,1.8-0.6c0.5-0.4,0.7-1,0.7-1.8V361.5z"/>
    <path d="M1319.3,365.7h-1.4v-11.4h6.4v1.3h-4.9v4h4.6v1.3h-4.6V365.7z"/>
    <path d="M1329.2,357c1,0,1.8,0.2,2.3,0.7c0.5,0.5,0.8,1.2,0.8,2.2v5.8h-1l-0.3-1.2h-0.1c-0.4,0.5-0.8,0.8-1.2,1
        c-0.4,0.2-1,0.3-1.7,0.3c-0.8,0-1.4-0.2-1.9-0.6s-0.8-1.1-0.8-1.9c0-0.9,0.3-1.5,1-2c0.7-0.5,1.7-0.7,3.1-0.8l1.5,0V360
        c0-0.7-0.2-1.2-0.5-1.5s-0.7-0.4-1.3-0.4c-0.4,0-0.9,0.1-1.3,0.2s-0.8,0.3-1.1,0.5l-0.4-1.1c0.4-0.2,0.8-0.4,1.3-0.5
        S1328.6,357,1329.2,357z M1330.9,361.5l-1.3,0c-1.1,0-1.8,0.2-2.2,0.5c-0.4,0.3-0.6,0.7-0.6,1.3c0,0.5,0.1,0.8,0.4,1.1
        s0.7,0.3,1.1,0.3c0.7,0,1.3-0.2,1.8-0.6c0.5-0.4,0.7-1,0.7-1.8V361.5z"/>
    <path d="M1336.3,365.7h-1.4v-12.2h1.4V365.7z"/>
    <path d="M1340.5,365.7h-1.4v-12.2h1.4V365.7z"/>
    <path d="M1348.8,363.3c0,0.8-0.3,1.5-0.9,1.9c-0.6,0.4-1.5,0.6-2.5,0.6c-0.6,0-1.1,0-1.5-0.1c-0.4-0.1-0.8-0.2-1.1-0.4V364
        c0.3,0.2,0.8,0.3,1.2,0.5s1,0.2,1.5,0.2c0.7,0,1.2-0.1,1.6-0.3c0.3-0.2,0.5-0.5,0.5-0.9c0-0.2-0.1-0.4-0.2-0.6
        c-0.1-0.2-0.3-0.3-0.6-0.5c-0.3-0.2-0.7-0.4-1.3-0.6c-0.6-0.2-1-0.4-1.4-0.6s-0.7-0.5-0.9-0.8c-0.2-0.3-0.3-0.7-0.3-1.2
        c0-0.7,0.3-1.3,0.9-1.7c0.6-0.4,1.4-0.6,2.3-0.6c0.5,0,1,0.1,1.5,0.2c0.5,0.1,0.9,0.2,1.3,0.4l-0.5,1.1c-0.4-0.1-0.7-0.3-1.1-0.4
        c-0.4-0.1-0.8-0.2-1.2-0.2c-0.6,0-1,0.1-1.3,0.3c-0.3,0.2-0.5,0.4-0.5,0.8c0,0.2,0.1,0.4,0.2,0.6s0.4,0.3,0.7,0.5
        c0.3,0.2,0.8,0.3,1.3,0.5c0.5,0.2,1,0.4,1.4,0.6s0.7,0.5,0.9,0.8C1348.7,362.5,1348.8,362.9,1348.8,363.3z"/>
</g>

<path class="area-destination" id="chobe-river-front" fill="#848484" d="M1088.8,361.6c0,0,1.2-10,2.2-13.2c1.1-3.8,6.3-14.7,6.3-14.7l-2.7,1.3l-3.7-2.7l-3,6
    l-11.1,4.1l-3.5-2.1l3.2-1.4l-1.2-3.7c0,0-1.2-1.6-3.7,0.7c-2.5,2.3-6.2,5.5-6.2,5.5s-1.4-0.5-0.9-2.3s-0.5-4.4-2.5-1.2
    c-2.1,3.2-3.9,1.2-3.2-0.7c0.7-1.8,0.7-1.8-0.9-2.3c-1.6-0.5-2.8-1.2-0.2-2.1s2.5-1.8-0.2-2.5c-2.8-0.7-4.4-0.5-5.3,1.4
    c-0.9,1.8-2.5,3.7-2.5,3.7s-5.5-1.8-7.4,1.2c-1.8,3-2.8,3-4.6,3.5c-1.8,0.5-4.4,1.2-4.8,2.5c-0.5,1.4-3.2,1.4-4.8,1.2
    s-3.7-0.7-3.7-0.7l-5.3,6.9l-3.7-0.7c0,0-3.2-1.6-2.5,1.6c0.7,3.2-1.6,4.6-3,3.2c-1.4-1.4-2.3-3.9-4.4-1.4c-2.1,2.5-3.7,8.8-3.7,8.8
    H1088.8z"/>
<path class="area-destination" id="moremi-game-reserve" fill="#848484" d="M774.6,684.5l44.2-0.4v-47.4c-3.8,1.8-6.2-2.4-6.2-2.4l-2.1-4.2l-8.6,6.5l-2.1,5.6h-5.1
    l-2.4,3.9c0,0-3.3,1.8-4.8,0.9c-1.5-0.9-3-2.4-3-2.4l-16,3l-18.4-6.2l-61.8-7.7l-38.3,8.9l-8.9-9.2l-27.3-16.6l-14.9,7.1l-2.4-2.4
    h-5.1l-1.2,1.5H587l-4.5,4.5l-8-1.2l-1.8,1.2l-2.7-0.9l-3.9,2.1l-1.8,2.1l-3.3-1.5l-1.2-1.8l-0.6,2.1h-2.1l-3-2.4l-3.3,2.1l-2.7,0.6
    l-10.1-7.1c0,0-2.1-4.2,0.3-4.5c2.4-0.3,1.5-0.6,1.5-0.6l-0.9-3.6l-0.9-3.9l-5.3-6.2l-3.9,1.8l3.3,5.1l-3.3,9.8l1.8,2.7l0.6,7.7
    l7.4,5.9l4.2,1.2l3.9,3.3v4.2c0,0,4.8,0.9,6.8,5.1c0.6,1.2,0.6,3.3,0.6,3.3s3.9,0.3,4.5,1.2c0.6,0.9,0,5.1,0,5.1s0.3,4.8,0,5.6
    s-0.9,4.5-0.9,4.5v1.8l-2.7,3.3l-1.5,0.9l-8.9,0.6l12.5,23.2l123.3,47.3l8.9-1.2l-3-20.2c0,0-0.3-14.6,5.3-18.1
    c5.6-3.6,16.3-11.3,16.3-11.3l3.9-2.4c0,0,6.5,5.6,14.6,14.6c8,8.9,12.8,13.7,12.8,13.7l2.7,6.2l16.3-1.8L774.6,684.5z"/>
<path class="area-destination" id="makgadikgadi-pans-national-park" fill="#848484" d="M1065.1,904.1l-14-1l-3,2l-42.5,2.5l-9.5-11.5l-11-5c0,0-13.7-2.6-17.6-3.5l-28.9-5.3l-25.2,0.9
    l-12.1,10l3.7,6.8l0.6,3.1l-2.2,2.5l1.2,6.2l6.8,2.2l3.7,0.9l1.2,1.9l-0.3,3.1l8.1,10l10.6,5l9.3-5.3l5,0.6l8.4,8.4L955,943
    l-0.3,3.7l2.8,2.5l-3.7,11.8c0,0-5,3.1-6.5,4.7c-1.6,1.6-0.9,5.6-0.9,5.6l-2.8,1.2l-3.1,5l-0.6,2.8l-2.2,2.2l0.6,3.4l-6.8,9.3
    l-1.6,6.5l0.6,5.9l-1.2,5.9l-1.6,5.6l-6.2,15.6h169.2V892L1065.1,904.1z"/>
<polygon class="area-destination"  id="savute-region" fill="#848484" points="825.8,503.7 828.1,502.5 828.1,499.2 840.7,489.5 843.2,484.5 849.7,485.9 
    858.9,487.8 860.3,493.9 864.1,493 870.1,496.1 870,501.5 884.8,505.2 884.8,508.8 890.8,503.8 890.8,496.5 899.4,495 907.8,499.6 
    907.8,503.8 913.4,505.4 913.4,508.8 916.3,511.6 921.8,511.6 926.3,516.1 916.3,527.5 917.8,535.2 910.9,540.8 907.7,546.7 
    909,554.4 904,559.2 904.5,572.2 896.4,580.4 896.4,588 891.4,591 886.6,592.4 884.1,598.1 878.7,599.8 877.8,604.1 872,606.5 
    866.2,613.8 853.3,611.9 847.3,607.2 844.5,608.7 839.4,603.3 845.2,581.4 849.8,574.8 842.7,572.1 839.3,574.5 835,582.2 
    823.8,584.1 820.8,580.3 813.5,577.2 811,573 814.8,570.2 808.7,566.2 811,563.6 808.7,556.2 809.6,552.2 805.3,547.9 811,540.8 
    823.6,537.5 835.2,538.4 834,534.9 826.5,531.5 822.5,528.3 823.1,523.8 817.9,523 814,518.6 815.3,512.2 "/>
<path class="area-destination" id="okavango-delta" fill="#848484" d="M760.6,774l-10.9,10l-9.2-5.3l-11.4-19.3c0,0-14.7-11.1-16.8-16.7c-1-2.7,1.6-8.7,0.7-11.3
    c-2.6-7.5-23.9-16.2-21.1-23.7c7.4-0.4,19.1-2.3,21.1-0.4c2,2,21.8,16.4,21.8,16.4L739,739c0,0,8.4,19.7,15,22
    c4.3,1.5,11.9-5,11.9-5l-10-13.3c0,0-16.9-32.1-24.6-42.7c-9.6-13.1-45-46-45-46l79.6,1l49.4-21l-29,2.7h-20.4h-10l-49.6-13.3
    l-14.7,2.7h-13.3h-10.7l-3.3-6.7h14v-10l-4.4-5.4l-22.9,5.4l-27.7-5.4l-28.3-7.3c0,0-23.5-1.2-30.7-4c-4.4-1.7-16.4-6.1-15.3-10.7
    c10,0.3,13.5-2,18-2.7c6.8-1.1,21-1.8,27.3-4.7c2.4-1.1,5.9-5.1,8-6.7c2.4-1.9,7.2-6,10-7.3c3.4-1.7,11.4-2,14.7-4
    c2.1-1.3,6.6-7.5,6.6-7.5s-7.6-3.1-10.3-3.8c-4-1.1-13.4,0.3-16.3-2.7c-1.8-1.8-1.3-10-1.3-10l4.7-11.2L577.7,544
    c0,0-10.9,10.4-15.3,12.7c-4.3,2.2-14.6,2.1-18.7,4.7c-3.7,2.3-7.4,11.5-11.3,13.3c-2.9,1.3-9.6,0.8-12.7,0c-6.7-1.8-18.5-9.8-24-14
    c-6-4.6-21.3-21.3-21.3-21.3l-38-42.6L415,472.7l-4.7-6.7L393,454.7l-18.7-10L361,433.3v-10.7L340.3,408v8l11.3,10l10,18.7l14.7,24
    l10.7,4l16,8.7c0,0,8.7,13.3,8.7,15.4s12,21.2,12,24.7s46,53.2,46,53.2s11,7.7,13.3,11.3c2.9,4.5,6,15.3,6,20.7
    c0,4.9-5.3,18.7-5.3,18.7l-6,17.9L459,662.7h6.7l16-12.7l7.3-6.3l8,10.3c0,0-9.7,15.9-12,21.6c-7,17.2-19.3,71.6-19.3,71.6L473,762
    c0,0,4.7-11.3,4.7-14.8c0-3.5,4.3-30.2,7.3-39.9c2.1-6.8,4.4-27.8,11.3-26.1c5,1.2-2.1,15.5-1.3,20.6c0.5,3.2,1.5,11.5,4.7,12.2
    c2.3,0.5,4.4-7.5,6.7-6.7c5.1,1.7,2.7,18.7,3.3,21.4c0.7,2.7,3.3-12.4,6.7-12c6.5,0.9,4.1,19.5,3.3,26c-0.7,6.7-8,22-8.7,25.3
    c-0.7,3.3,18.1,18,18.1,18l21.3,16.7c0,0,1.8-15.1,0.7-20c-1.3-5.7-8.2-15.4-10.7-20.7c-3.1-6.9-11.5-20.5-11.3-28
    c0.1-3.5,2.7-11.4,5.9-12.7c4.7-1.8,18.7,8,18.7,8s10.3,31.8,16,41.3c8.5,14.1,33.3,38.2,38,54c1.5,5.1-3.7,17-0.7,21.3
    c2.5,3.5,12.8,2.8,16.3,5.3c7.1,5.1,13.4,32.7,13.4,32.7l15.7-7.3L663,860h-19.1c0,0-2.7-5.4-2.9-7.3c-0.6-4.8,2.5-14.4,2.9-19.3
    c0.3-4.2-3.2-14,0-16.7c3.3-2.8,14.7,6.5,17.1,2.9c3.3-5.1-13.3-20.2-13.3-20.2l-14.1-30l6.7-0.7l22,22.7l11.6,10.7
    c0,0,6.3,5,7.7,7.2c1.5,2.3,4,10.3,4,10.3H699c0,0,8.1-10.7,12-10.3c1.9,0.2,2.9,5.3,4.7,6.1c3,1.5,10.7,1.9,13.5,0
    c1.4-0.9,0.9-5.6,2.5-6.1c2.6-0.8,6.2,6.2,8.9,6.1c2.5-0.1,6-4.4,7.8-6.1c7-6.5,25.3-28.6,25.3-28.6l-4.1-6.7H760.6z M657.7,736
    c0,0-4.3-10-8.7-21c-4.3-11-23-18-23-18s-2.7,2.4-8-3c-5.3-5.3-2.3-4.3-6.3-10s-1.7-7-9.7-14.7c-8-7.7-16-13.7-22.3-15.3
    s-6.3-5.7-6.3-5.7L601,651l6.7,12.7c0,0-0.3,2.5,6.3,3.9c6.7,1.4,10.3,3.7,10.3,3.7l5.3,6.7c0,0-8.3,1.7,0,3.2
    c8.3,1.5,19.3,3.8,19.3,3.8l5.7,6.5l6.3,10.3l5.3,6.9l8.3,7c0,0,5.9,4.8,8,6.7c-0.3-3.8,1.5,1.4,0.7,0.6c-0.1-0.1-0.4-0.3-0.7-0.6
    c0.1,0.9,0.3,2.4,0.7,4.6c2,11.3,0,13.3,4,17L657.7,736z"/>
    
<path id="link3" fill="#222323" d="M1076.7,343c0,2.7,2.1,4.9,4.7,5.2v39.3h-23.9v22.8h1v-21.8h46.8v21.8h1v-22.8h-23.9v-39.3
    c2.7-0.3,4.7-2.5,4.7-5.2c0-2.9-2.3-5.2-5.2-5.2S1076.7,340.1,1076.7,343z"/>
    
<g id="draw-paths"></g>
<foreignObject id="canvas-wrapper"></foreignObject>
    
<circle id="chobe-game-lodge" fill="#F6E71B" cx="1105.8" cy="410.3" r="12"/>
<circle id="chobe-savanna-lodge" fill="#F6E71B" cx="1058" cy="410.3" r="12"/>
<circle id="savute-safari-lodge" fill="#F6E71B" cx="867.2" cy="517.4" r="12"/>
<path id="link2" fill="#222323" d="M647.9,619.4c0,2.7,2.1,4.9,4.7,5.2v39.3h-23.9v22.8h1v-21.8h46.8v21.8h1v-22.8h-23.9v-39.3
    c2.7-0.3,4.7-2.5,4.7-5.2c0-2.9-2.3-5.2-5.2-5.2S647.9,616.5,647.9,619.4z"/>
<circle id="camp-okavango" fill="#F6E71B" cx="677" cy="686.7" r="12"/>
<circle id="xugana-island-lodge" fill="#F6E71B" cx="629.2" cy="686.7" r="12"/>
<path id="link1" fill="#222323" d="M769.5,671.1c0,2.7,2.1,4.9,4.7,5.2v39.3h-23.9v22.8h1v-21.8h46.8v21.8h1v-22.8h-23.9v-39.3
    c2.7-0.3,4.7-2.5,4.7-5.2c0-2.9-2.3-5.2-5.2-5.2S769.5,668.2,769.5,671.1z"/>
<circle id="camp-moremi" fill="#F6E71B" cx="798.7" cy="738.4" r="12"/>
<circle id="camp-xacanaxa" fill="#F6E71B" cx="750.8" cy="738.4" r="12"/>
<circle id="leroo-la-tau" fill="#F6E71B" cx="961.4" cy="938.5" r="12"/>

</svg>

</div>
	