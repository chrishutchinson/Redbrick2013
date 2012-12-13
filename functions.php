<?php
ob_start();

/* functions.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<?php
function my_init_method() {
wp_deregister_script( 'jquery' );
wp_register_script(   'jquery'
    , 'http://code.jquery.com/jquery-latest.min.js');
}    
add_action('init', 'my_init_method');

function timeDiff( $from, $levels=7 ){  
    $now = time();
    $diff = ($from > $now) ? $from - $now : $now - $from;
    $status = ($from > $now) ? ' away' : ' ago';
    $times = array(31536000, 2628000, 604800, 86400, 3600, 60, 1);
    $words = array('year', 'month', 'week', 'day', 'hour', 'minute', 'second');
    $str = array();
    foreach ($times as $k=>$v){
        $val = floor($diff/$v);
        if ($val) {
            $str[] = $val .' '. $words[$k] . ($val==1 ? '' : 's');
            $levels--;
        }
        $diff %= $v;
        if ($levels==0) break;
    }
    return implode(', ', $str) . $status;
}

add_theme_support( 'post-thumbnails' ); 

///////////////////////
// Create admin menu //
///////////////////////

add_action('admin_menu', 'create_theme_options_page');

add_action('admin_init', 'register_and_build_fields');

function create_theme_options_page() {
   add_theme_page('Redbrick 2013 Options', 'Redbrick 2013 Options', 'administrator', __FILE__, 'build_options_page');
}

function register_and_build_fields() {
	register_setting('plugin_options', 'plugin_options', 'validate_setting');
	
	add_settings_section('homepage_section', 'Homepage Settings', 'section_cb', __FILE__);
	
	add_settings_section('ticker_section', 'Twitter Ticker Settings', 'section_cb', __FILE__);
	
	add_settings_section('banner_section', 'Banner Ad Settings', 'section_cb', __FILE__);
	
	add_settings_section('lead_1_section', 'First Lead Story Settings', 'section_cb', __FILE__);
	
	add_settings_section('lead_2_section', 'Second Lead Story Settings', 'section_cb', __FILE__);
	
	add_settings_section('wrt_section', 'Worth Reading Today Settings', 'section_cb', __FILE__);
		
	// Add the settings //
	
	add_settings_field('lead_story_id', 'Lead Story ID:', 'lead_story_setting', __FILE__, 'lead_1_section');
	add_settings_field('lead_story_hashtag', 'Lead Story Title:', 'lead_story_hashtag', __FILE__, 'lead_1_section');
	add_settings_field('lead_story_time', 'Stay lead story until:', 'lead_story_time', __FILE__, 'lead_1_section');
	add_settings_field('lead_type', 'Lead story type:', 'lead_type', __FILE__, 'lead_1_section');
	
	add_settings_field('second_lead_story_id', 'Second Lead Story ID:', 'second_lead_story_setting', __FILE__, 'lead_2_section');
	add_settings_field('second_lead_story_hashtag', 'Second Lead Story Title:', 'second_lead_story_hashtag', __FILE__, 'lead_2_section');
	add_settings_field('second_lead_story_time', 'Second Stay lead story until:', 'second_lead_story_time', __FILE__, 'lead_2_section');
	
	add_settings_field('wrt_id_1', 'Story 1 ID:', 'wrt_setting_1', __FILE__, 'wrt_section');
	add_settings_field('wrt_id_2', 'Story 2 ID:', 'wrt_setting_2', __FILE__, 'wrt_section');
	add_settings_field('wrt_id_3', 'Story 3 ID:', 'wrt_setting_3', __FILE__, 'wrt_section');
	add_settings_field('wrt_id_4', 'Story 4 ID:', 'wrt_setting_4', __FILE__, 'wrt_section');
	
	add_settings_field('triple_category', 'Triple row category:', 'triple_category', __FILE__, 'homepage_section');
	
	add_settings_field('more_category', '"More Top Stories" category:', 'more_category', __FILE__, 'homepage_section');
	
	add_settings_field('slider_category', 'Slider category ID:', 'slider_category', __FILE__, 'homepage_section');
	add_settings_field('items_in_slider', 'Number of posts to show in slider:', 'items_in_slider', __FILE__, 'homepage_section');
	
	add_settings_field('ticker_enable', 'Enable Twitter Ticker?:', 'ticker_enable', __FILE__, 'ticker_section');
	add_settings_field('ticker_username', 'Source Username:', 'ticker_username', __FILE__, 'ticker_section');
	
	add_settings_field('banner_enable', 'Enable Banner Ad? (110px high):', 'banner_enable', __FILE__, 'banner_section');
	add_settings_field('banner_url', 'Clickthrough URL:', 'banner_url', __FILE__, 'banner_section');
	add_settings_field('banner_desktop', 'Desktop Banner (1000px wide):', 'banner_desktop', __FILE__, 'banner_section');
	add_settings_field('banner_tablet', 'Tablet Benner (750px wide):', 'banner_tablet', __FILE__, 'banner_section');
	add_settings_field('banner_mobile', 'Mobile Banner (<750px wide):', 'banner_mobile', __FILE__, 'banner_section');
	add_settings_field('banner_mobile_bg', 'Mobile Banner Background Colour: #', 'banner_mobile_bg', __FILE__, 'banner_section');

}

function build_options_page() {
	?>
	<div id="theme-options-wrap">
		<div class="icon32" id="icon-tools"><br /></div>
		<h2>Redbrick 2013 Theme Options</h2>
		<p>Settings to alter homepage specifics, along with other features of the theme.</p>
		<form method="post" action="options.php" enctype="multipart/form-data">
			<?php settings_fields('plugin_options'); ?>
			<?php do_settings_sections(__FILE__); ?>
			<p class="submit">
				<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
			</p>
			</form>
	</div>
	<?php
}

function validate_setting($plugin_options) {
	return $plugin_options;
}



function section_cb(){
}


// Functions to call inputs
function lead_story_setting() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[lead_story_id]' type='text' value='{$options['lead_story_id']}' />";
}

function lead_story_hashtag() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[lead_story_hashtag]' type='text' value='{$options['lead_story_hashtag']}' />";
}

function lead_story_time() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[lead_story_time]' type='text' value='{$options['lead_story_time']}' /> (Format: 12:00 01 December 2012)";
}

function lead_type() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[lead_type]' type='text' value='{$options['lead_type']}' /> (Default: blank)";
}

function second_lead_story_setting() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[second_lead_story_id]' type='text' value='{$options['second_lead_story_id']}' />";
}

function second_lead_story_hashtag() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[second_lead_story_hashtag]' type='text' value='{$options['second_lead_story_hashtag']}' />";
}

function second_lead_story_time() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[second_lead_story_time]' type='text' value='{$options['second_lead_story_time']}' /> (Format: 12:00 01 December 2012)";
}

function wrt_setting_1() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[wrt_id_1]' type='text' value='{$options['wrt_id_1']}' />";
}

function wrt_setting_2() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[wrt_id_2]' type='text' value='{$options['wrt_id_2']}' />";
}

function wrt_setting_3() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[wrt_id_3]' type='text' value='{$options['wrt_id_3']}' />";
}

function wrt_setting_4() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[wrt_id_4]' type='text' value='{$options['wrt_id_4']}' />";
}

function items_in_slider() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[items_in_slider]' type='text' value='{$options['items_in_slider']}' />";
}

function slider_category() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slider_category]' type='text' value='{$options['slider_category']}' />";
}

function triple_category() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[triple_category]' type='text' value='{$options['triple_category']}' />";
}

function more_category() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[more_category]' type='text' value='{$options['more_category']}' />";
}

function ticker_enable() {  
	$options = get_option('plugin_options');  
	if($options['ticker_enable'] == "true")
	{
		$checked = 'checked="checked"';
	}
	else
	{
		$checked = "";
	}
	echo "<input name='plugin_options[ticker_enable]' type='checkbox' " . $checked . " value='true' />";
}

function ticker_username() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[ticker_username]' type='text' value='{$options['ticker_username']}' />";
}

function banner_enable() {  
	$options = get_option('plugin_options');  
	if($options['banner_enable'] == "true")
	{
		$checked = 'checked="checked"';
	}
	else
	{
		$checked = "";
	}
	echo "<input name='plugin_options[banner_enable]' type='checkbox' " . $checked . " value='true' />";
}

function banner_url() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[banner_url]' type='text' value='{$options['banner_url']}' />";
}

function banner_desktop() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[banner_desktop]' type='text' value='{$options['banner_desktop']}' />";
}

function banner_tablet() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[banner_tablet]' type='text' value='{$options['banner_tablet']}' />";
}

function banner_mobile() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[banner_mobile]' type='text' value='{$options['banner_mobile']}' />";
}

function banner_mobile_bg() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[banner_mobile_bg]' type='text' value='{$options['banner_mobile_bg']}' />";
}

?>