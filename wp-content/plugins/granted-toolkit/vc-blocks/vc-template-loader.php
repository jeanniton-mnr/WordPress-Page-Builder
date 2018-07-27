<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/* == Homepage 1 == */
add_filter( 'vc_load_default_templates', 'granted_toolkit_custom_template_homepage' );
function granted_toolkit_custom_template_homepage( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '01 - Granted Homepage', 'granted-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][granted_slides][/vc_column][/vc_row][vc_row css=".vc_custom_1489046749281{padding-top: 70px !important;padding-bottom: 25px !important;}"][vc_column width="5/12"][granted_section_title style="2" image="13" title="We have 20+ Years of Experiences"][/vc_column][vc_column width="7/12"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="10px"][vc_column_text]
<h3>History of our company</h3>
Duis autem vel eum iriure dolor in hendreritesse molestie consequat, vel illum doloreuefeugiat nulla facilisis at vero eros et accumsusto odio dignissim qui blandit.

Duis autem vel eum iriure dolor in hendreritesse molestie consequat, vel doloreue.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_empty_space height="10px"][vc_column_text]
<h3>Our mission and vission</h3>
Duis autem vel eum iriure dolor in hendreritesse molestie consequat, vel illum doloreuefeugiat nulla facilisis at vero eros et accumsusto odio dignissim qui blandit.

Duis autem vel eum iriure dolor in hendreritesse molestie consequat, vel doloreue.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row][vc_column width="1/2" el_class="text-center" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-3"][granted_section_title title="Our Services" desc="Duis autem vel eum iriure dolor emm hendrerit in vulputateconseuat vel illum dolore eu feugiat nulla facilsis veroem."][/vc_column][/vc_row][vc_row css=".vc_custom_1489048632265{padding-top: 10px !important;padding-bottom: 30px !important;}"][vc_column width="1/3"][granted_service_box link_to_page="305" title="Process Mapping" icon="324" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="307" title="IT Consulting" icon="328" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="93" title="Personal Loan" icon="407" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489043074313{background-color: #1c7af3 !important;}"][vc_column][granted_cta link_text="CONTACT" link_to_page="38" title="Great way to get success in finalcial services."][/vc_column][/vc_row][vc_row css=".vc_custom_1489049622761{padding-top: 100px !important;padding-bottom: 50px !important;}"][vc_column width="1/3"][granted_section_title style="3" title="Why you Should choose Us?" desc="Duis autem vel eum iriure doloremm ame hend mean nviateconseuat vel illum dolore eumegiat nulla facilsis amader eumdolor emm ame hend."][/vc_column][vc_column width="1/3"][granted_service_box icon_type="2" title="Awesome Services" fa_icon="fa fa-cog" desc="Duis autem vel eum iriure dolor emm amehrmean nviate conseuat vel illum dolore eumegiat nulla facilsis amader desh veroem."][granted_service_box icon_type="2" title="Private Banking" fa_icon="fa fa-university" desc="Duis autem vel eum iriure dolor emm amehrmean nviate conseuat vel illum dolore eumegiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box icon_type="2" title="24/ 7 Customer Support" fa_icon="fa fa-volume-control-phone" desc="Duis autem vel eum iriure dolor emm amehrmean nviate conseuat vel illum dolore eumegiat nulla facilsis amader desh veroem."][granted_service_box icon_type="2" title="Business Consulting" fa_icon="fa fa-briefcase" desc="Duis autem vel eum iriure dolor emm amehrmean nviate conseuat vel illum dolore eumegiat nulla facilsis amader desh veroem."][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="fifty-percent-bg" css=".vc_custom_1489232119619{background-image: url(http://champtheme.com/demos/wp/granted/wp-content/uploads/2016/11/Financial-Services-featured.jpg?id=388) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2"][granted_section_title title="Request a call back." desc="Mon - Sat : 08 am - 05 pm"][contact-form-7 id="6"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][vc_row css=".vc_custom_1489050503949{padding-top: 80px !important;}"][vc_column width="5/12"][granted_section_title title="What people says about us?" desc="Duis autem vel eum iriure dolor emm hendrerit emmer vulputate conseuat vel illum dolore eu feugiat nulla facilsis comer veroem."][/vc_column][/vc_row][vc_row css=".vc_custom_1489050510346{padding-bottom: 70px !important;}"][vc_column][granted_testimonials type="1" autoplay="false"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489043074313{background-color: #1c7af3 !important;}"][vc_column][granted_cta link_text="CONTACT" link_to_page="38" title="Great way to get success in finalcial services."][/vc_column][/vc_row][vc_row css=".vc_custom_1489050970431{padding-top: 80px !important;}"][vc_column width="1/2" el_class="text-center" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-3"][granted_section_title title="Blog Post" desc="Duis autem vel eum iriure dolor emm hendrerit in vulputateconseuat vel illum dolore eu feugiat nulla facilsis veroem."][/vc_column][/vc_row][vc_row][vc_column][granted_posts][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489043536402{background-color: #f4f9ff !important;}"][vc_column][granted_logo_carousel logos="14,15,16,17,18,19,20,21,22,23,24,25,26,27,28"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Homepage == */

/* == About == */
add_filter( 'vc_load_default_templates', 'granted_toolkit_custom_template_about' );
function granted_toolkit_custom_template_about( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '01 - Granted About', 'granted-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1489046749281{padding-top: 70px !important;padding-bottom: 25px !important;}"][vc_column width="5/12"][granted_section_title style="2" image="13" title="We have 20+ Years of Experiences"][/vc_column][vc_column width="7/12"][vc_row_inner][vc_column_inner width="1/2"][vc_empty_space height="10px" el_class="hidden-sm"][vc_column_text]
<h3>History of our company</h3>
Duis autem vel eum iriure dolor in hendreritesse molestie consequat, vel illum doloreuefeugiat nulla facilisis at vero eros et accumsusto odio dignissim qui blandit.

Duis autem vel eum iriure dolor in hendreritesse molestie consequat, vel doloreue.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_empty_space height="10px" el_class="hidden-sm"][vc_column_text]
<h3>Our mission and vission</h3>
Duis autem vel eum iriure dolor in hendreritesse molestie consequat, vel illum doloreuefeugiat nulla facilisis at vero eros et accumsusto odio dignissim qui blandit.

Duis autem vel eum iriure dolor in hendreritesse molestie consequat, vel doloreue.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1489055966014{padding-bottom: 50px !important;}"][vc_column width="1/2"][vc_column_text]
<h3>Service get met adapted matters
offence for. Principles man
any insipidity age you simplicity
understood.</h3>
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestieconsequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accu aemsan et iusto odio dignissim qui blandit praesent luptatum zzril delenitaugue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nois eleifend option congue nihil imperdiet doming.

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestieconsequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accu aemsan et iusto odio dignissim qui blandit praesent luptatum amern delenitaugue duis dolore te feugait nulla facilisi.[/vc_column_text][/vc_column][vc_column width="5/12" offset="vc_col-lg-offset-1"][vc_empty_space height="65px"][granted_video_popup url="https://www.youtube.com/watch?v=ctvlUvN6wSE" thumbnail="75"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489043074313{background-color: #1c7af3 !important;}"][vc_column][granted_cta link_text="CONTACT" link_to_page="2" title="Great way to get success in finalcial services."][/vc_column][/vc_row][vc_row css=".vc_custom_1489050970431{padding-top: 80px !important;}"][vc_column width="1/2" el_class="text-center" offset="vc_col-lg-offset-3 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-3"][granted_section_title title="Team Member" desc="Duis autem vel eum iriure dolor emm hendrerit in vulputateconseuat vel illum dolore eu feugiat nulla facilsis veroem."][/vc_column][/vc_row][vc_row css=".vc_custom_1489056253378{padding-bottom: 70px !important;}"][vc_column width="1/4"][granted_team photo="78" title="Md. Rubel Hossen" job="Graphic Designer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22http%3A%2F%2Ffacebook.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22http%3A%2F%2Ftwitter.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22https%3A%2F%2Fwww.youtube.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22http%3A%2F%2Fwww.linkedin.com%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="353" title="Fahmida Toma" job="Web Developer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22https%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22http%3A%2F%2Fyoutube.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22http%3A%2F%2Fwww.linkedin.com%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="354" title="Shahriar Hossain" job="Graphic Designer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22http%3A%2F%2Ffacebook.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22https%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22http%3A%2F%2Fyoutube.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22http%3A%2F%2Fwww.linkedin.com%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="355" title="Romana Nasrin" job="Web Designer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22http%3A%2F%2Ffacebook.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22https%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22http%3A%2F%2Fyoutube.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22http%3A%2F%2Fwww.linkedin.com%22%7D%5D"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489043536402{background-color: #f4f9ff !important;}"][vc_column][granted_logo_carousel logos="14,15,16,17,18,19,20,21,22,23,24,25,26,27,28"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End About == */

/* == Team == */
add_filter( 'vc_load_default_templates', 'granted_toolkit_custom_template_team' );
function granted_toolkit_custom_template_team( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '03 - Granted Team', 'granted-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1489068135767{padding-top: 70px !important;}"][vc_column width="1/4"][granted_team photo="78" title="Ratul Ahmed" job="Web Developer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22%23%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22%23%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22%23%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22%23%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="353" title="Fahmida Toma" job="Web Developer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22https%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube%22%2C%22link%22%3A%22https%3A%2F%2Fwww.youtube.com%2F%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="354" title="Shahriar Hossain" job="Graphic Designer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22http%3A%2F%2Fyoutube.com%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22http%3A%2F%2Fhttps%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="361" title="Romana Nasrin" job="Web Developer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22https%3A%2F%2Fwww.youtube.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22https%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%5D"][/vc_column][/vc_row][vc_row css=".vc_custom_1489197732335{padding-top: 40px !important;padding-bottom: 70px !important;}"][vc_column width="1/4"][granted_team photo="362" title="Mashok Khan" job="Web Developer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22%23%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22%23%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22%23%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22%23%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="363" title="Asraf Ibn Aziz" job="Web Developer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22https%3A%2F%2Fwww.youtube.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22https%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="364" title="Mahfuzur Rahman" job="Web Developer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22https%3A%2F%2Fwww.youtube.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22https%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%5D"][/vc_column][vc_column width="1/4"][granted_team photo="365" title="Mithun Karmakar" job="Web Developer" links="%5B%7B%22icon%22%3A%22fa%20fa-facebook%22%2C%22link%22%3A%22https%3A%2F%2Fwww.facebook.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-youtube-play%22%2C%22link%22%3A%22https%3A%2F%2Fwww.youtube.com%2F%22%7D%2C%7B%22icon%22%3A%22fa%20fa-twitter%22%2C%22link%22%3A%22https%3A%2F%2Ftwitter.com%2F%3Flang%3Den%22%7D%2C%7B%22icon%22%3A%22fa%20fa-linkedin%22%2C%22link%22%3A%22https%3A%2F%2Fwww.linkedin.com%2F%22%7D%5D"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489197755473{background-color: #1c7af3 !important;}"][vc_column][granted_cta link_to_page="38" title="Great way to get success in finalcial services."][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Team == */

/* == Projects == */
add_filter( 'vc_load_default_templates', 'granted_toolkit_custom_template_projects' );
function granted_toolkit_custom_template_projects( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '04 - Granted Projects', 'granted-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1489120827908{padding-top: 70px !important;padding-bottom: 60px !important;}"][vc_column][granted_projects columns="3" filter="2" filter_style="2"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Projects == */

/* == Services == */
add_filter( 'vc_load_default_templates', 'granted_toolkit_custom_template_services' );
function granted_toolkit_custom_template_services( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '05 - Granted Services', 'granted-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1489057871160{padding-top: 80px !important;}"][vc_column width="1/3"][granted_service_box link_to_page="305" title="Process Mapping" icon="324" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="307" title="IT Consulting" icon="328" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="93" title="Personal Loan" icon="407" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][/vc_row][vc_row css=".vc_custom_1489057882639{padding-bottom: 30px !important;}"][vc_column width="1/3"][granted_service_box link_to_page="309" title="Mutual Fund Management" icon="357" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="311" title="Asset Management" icon="358" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="313" title="Financial Quotes" icon="359" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489057693149{background-color: #1c7af3 !important;}"][vc_column][granted_cta link_text="Contact" link_to_page="34" title="Great way to get success in finalcial services."][/vc_column][/vc_row][vc_row css=".vc_custom_1489057899653{padding-top: 80px !important;}"][vc_column width="1/2"][granted_section_title title="What people says about us?" desc="Duis autem vel eum iriure dolor emm hendrerit emmer vulputateconseuat vel illum dolore eu feugiat nulla facilsis comer veroem."][/vc_column][/vc_row][vc_row css=".vc_custom_1489057910052{padding-bottom: 80px !important;}"][vc_column][granted_testimonials type="1"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489057826200{background-color: #f4f9ff !important;}"][vc_column][granted_logo_carousel logos="28,27,26,25,18,19,20,21"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Services == */

/* == Single Service == */
add_filter( 'vc_load_default_templates', 'granted_toolkit_custom_template_singleservice' );
function granted_toolkit_custom_template_singleservice( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '06 - Granted Single service', 'granted-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1489057871160{padding-top: 80px !important;}"][vc_column width="1/3"][granted_service_box link_to_page="305" title="Process Mapping" icon="324" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="307" title="IT Consulting" icon="328" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="93" title="Personal Loan" icon="407" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][/vc_row][vc_row css=".vc_custom_1489057882639{padding-bottom: 30px !important;}"][vc_column width="1/3"][granted_service_box link_to_page="309" title="Mutual Fund Management" icon="357" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="311" title="Asset Management" icon="358" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][vc_column width="1/3"][granted_service_box link_to_page="313" title="Financial Quotes" icon="359" desc="Duis autem vel eum iriure dolor emm ame hendmean nviate conseuat vel illum dolore eume feugiat nulla facilsis amader desh veroem."][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489057693149{background-color: #1c7af3 !important;}"][vc_column][granted_cta link_text="Contact" link_to_page="34" title="Great way to get success in finalcial services."][/vc_column][/vc_row][vc_row css=".vc_custom_1489057899653{padding-top: 80px !important;}"][vc_column width="1/2"][granted_section_title title="What people says about us?" desc="Duis autem vel eum iriure dolor emm hendrerit emmer vulputateconseuat vel illum dolore eu feugiat nulla facilsis comer veroem."][/vc_column][/vc_row][vc_row css=".vc_custom_1489057910052{padding-bottom: 80px !important;}"][vc_column][granted_testimonials type="1"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489057826200{background-color: #f4f9ff !important;}"][vc_column][granted_logo_carousel logos="28,27,26,25,18,19,20,21"][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Single Service == */

/* == Testimonials == */
add_filter( 'vc_load_default_templates', 'granted_toolkit_custom_template_testimonials' );
function granted_toolkit_custom_template_testimonials( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '07 - Granted Testimonials', 'granted-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1489067792603{padding-top: 70px !important;padding-bottom: 50px !important;}"][vc_column][granted_testimonials type="2"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1489067966948{background-color: #3287f4 !important;}"][vc_column][granted_cta link_to_page="38" title="Great way to get success in finalcial services."][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Testimonials == */

/* == Contact == */
add_filter( 'vc_load_default_templates', 'granted_toolkit_custom_template_contact' );
function granted_toolkit_custom_template_contact( $data ) {
    $template               = array();
    $template['name']       = esc_html__( '08 - Granted Contact', 'granted-toolkit' );
    $template['content']    = <<<CONTENT
[vc_row css=".vc_custom_1489115574484{padding-top: 60px !important;padding-bottom: 60px !important;}"][vc_column width="2/3"][contact-form-7 id="99"][/vc_column][vc_column width="1/3"][vc_column_text]
<h2>Contact Information</h2>
<h3>Head Office:</h3>
[/vc_column_text][granted_iconic_info icon="fa fa-phone" text="+88 956-457-968"][granted_iconic_info icon="fa fa-envelope" text="demomail@gmail.com"][granted_iconic_info icon="fa fa-map-marker" text="8785 Windfall Street.
Whitehall, PA 18052"][vc_separator][vc_column_text]
<h3>Europe Office:</h3>
[/vc_column_text][granted_iconic_info icon="fa fa-phone" text="+88 956-457-968"][granted_iconic_info icon="fa fa-envelope" text="demomail@gmail.com"][granted_iconic_info icon="fa fa-map-marker" text="8785 Windfall Street.
Whitehall, PA 18052"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xOCUyMTFtMTIlMjExbTMlMjExZDI5NTcuNDg1NjI5MTEzODE5JTIxMmQtNzEuMjAxNjIxOTg0ODM3NzQlMjEzZDQyLjE2MTI5Mjc1NTYyMzkwNCUyMTJtMyUyMTFmMCUyMTJmMCUyMTNmMCUyMTNtMiUyMTFpMTAyNCUyMTJpNzY4JTIxNGYxMy4xJTIxM20zJTIxMW0yJTIxMXMweDg5ZTQ3ZTFiZWVjYjU2Y2IlMjUzQTB4MzliZmQ5NmUyNDIyNjM1NSUyMTJzMTUwMCUyQlByb3ZpZGVuY2UlMkJId3klMkIlMjUyMzI0YyUyNTJDJTJCTm9yd29vZCUyNTJDJTJCTUElMkIwMjA2MiUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc3VzJTIxNHYxNDg5MTE1NDc5NTY1JTIyJTIwd2lkdGglM0QlMjI2MDAlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBmcmFtZWJvcmRlciUzRCUyMjAlMjIlMjBzdHlsZSUzRCUyMmJvcmRlciUzQTAlMjIlMjBhbGxvd2Z1bGxzY3JlZW4lM0UlM0MlMkZpZnJhbWUlM0U="][/vc_column][/vc_row]
CONTENT;
    array_unshift( $data, $template );
    return $data;
} 
/* == End Contact == */