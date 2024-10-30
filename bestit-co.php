<?php

/* 
Plugin Name: فناوری اطلاعات برترین
Plugin URI:www.BestIT.co
Version:1.0.0
Author:Ali Mohammadi
Description:افوزدن آمار بازدید پیشرفته | نمایش اخرین اخبار شرکت در پیشخوان
 */

if (function_exists('wp_admin_dashboard_add_bestit_widget')){}else{
function wp_admin_dashboard_add_bestit_widget() {
global $wp_meta_boxes;
wp_add_dashboard_widget( 'dashboard_bestit_widget', 'فناوری اطلاعات برترین در کنار شما', 'dashboard_bestit_widget_output' );
}
add_action('wp_dashboard_setup', 'wp_admin_dashboard_add_bestit_widget');
function dashboard_bestit_widget_output() {
echo '<h2>نمایش آخرین اخبار و مقالات شرکت فناوری اطلاعات برترین</h2>';
echo '<p style="float:left;background-color:#6FF;border:1px #CCC dashed;padding:5px;display:inline-block;">
<a href="http://www.Bestit.co/contact-us">تماس باما</a></p>';
wp_widget_rss_output(array(
'url' => 'http://www.Bestit.co/feed/',
'title' => __('آخرين نوشته ها', 'BestIT'),
'items' => 4,
'show_summary' => 1,
'show_author' => 0,
'show_date' => 1
));
wp_widget_rss_output( $args );
}
}