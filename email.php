<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>Assignment Calculator</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="robots" content="noarchive" />
<!--AUTO GENERATED DUBLIN CORE METADATA-->
<meta name="DC.Title" content="Assignment Calculator" />
<meta name="DC.Creator" content="Brighid Gonzales" />
<meta name="DC.Subject" content="" />
<meta name="DC.Description" content="" />
<meta name="DC.Publishers" content="Our Lady of the Lake University" />
<meta name="DC.Rights" content="Copyright Our Lady of the Lake University 2016" />
<meta name="DC.Language" content="en" />


		<link rel="stylesheet" href="http://library.ollusa.edu/web/jquery/css/1.8.24_themes_base_jquery-ui.css" /><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
			<link rel="stylesheet" href="http://library.ollusa.edu/web/bootstrap-accessibility-plugin/css/bootstrap-accessibility_1.0.3.css" />
		<link rel="stylesheet" href="http://library.ollusa.edu/web/css1.11.6/springshare.public.min.css" />
		<!--[if lt IE 9]> 
				<link rel="stylesheet" href="/web/css1.11.6/springshare.public.ie8hacks.css" /> 
		<![endif]-->
		<link rel="stylesheet" href="http://library.ollusa.edu/web/css1.11.6/springshare.common.min.css" />
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="http://library.ollusa.edu/web/jquery/js/1.12.1_jquery.min.js"></script>
		<script type="text/javascript" src="http://library.ollusa.edu/web/jquery/js/1.9.2_jquery-ui.min.js"></script><script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="http://library.ollusa.edu/web/bootstrap-accessibility-plugin/js/bootstrap-accessibility_1.0.3.min.js"></script>
		<script type="text/javascript" src="http://library.ollusa.edu/web/js1.11.6/springshare.public.min.js"></script>
		<script type="text/javascript" src="http://library.ollusa.edu/web/js1.11.6/springshare.common.min.js"></script>
		<style>/* =========================================== */
                        /* bootstrap overrides */
                        /* =========================================== */
                        #s-lg-tabs-container .nav-tabs > li > a,
                        #s-lg-tabs-container .nav-pills > li > a {
                            border: 1px solid transparent;
                                -webkit-border-radius: 4px 4px 0 0;
                                -moz-border-radius: 4px 4px 0 0;
                                border-radius: 4px 4px 0 0;
                            background-color: #577CBE;
                            color: #fff;
                            font-weight: bold;
                            padding: 4px 15px;
                        }
                        #s-lg-tabs-container .nav-tabs {
                            border-bottom: 0;
                        }
                        #s-lg-tabs-container .nav-tabs > li#s-lg-admin-tab-add > a {
                            -webkit-border-radius: 4px 4px 0 0;
                            -moz-border-radius: 4px 4px 0 0;
                            border-radius: 4px 4px 0 0;
                        }
                        #s-lg-tabs-container .nav-tabs > li > a:hover,
                        #s-lg-tabs-container .nav-pills > li > a:hover {
                            border: 1px solid transparent;
                                -webkit-border-radius: 4px 4px 0 0;
                                -moz-border-radius: 4px 4px 0 0;
                                border-radius: 4px 4px 0 0;
                            background-color: #ffffff;
                            color: #000000;
                        }
                        #s-lg-tabs-container .nav-tabs > .active > a,
                        #s-lg-tabs-container .nav-pills > .active > a {
                            color: #000000;
                            cursor: default;
                            background-color: #ffffff;
                            border: 1px solid transparent;
                                -webkit-border-radius: 4px 4px 0 0;
                                -moz-border-radius: 4px 4px 0 0;
                                border-radius: 4px 4px 0 0;
                            border-bottom-color: transparent;
                            font-weight: bold;
                        }
                        #s-lg-tabs-container .nav-tabs > .active > .s-lg-subtab-ul > .active > a {
                            color: #000000;
                            cursor: default;
                            background-color: #ffffff;
                            border-bottom-color: transparent;
                        }
                        #s-lg-tabs-container .nav-tabs > .active > a:hover, 
                        #s-lg-tabs-container .nav-pills > .active > a:hover {
                            color: #000000;
                            cursor: pointer;
                            background-color: #ffffff;
                            border: 1px solid transparent;
                                -webkit-border-radius: 4px 4px 0 0;
                                -moz-border-radius: 4px 4px 0 0;
                                border-radius: 4px 4px 0 0;
                            border-bottom-color: transparent;
                            font-weight: bold;
                        }
                        #s-lg-tabs-container .nav .dropdown-toggle .caret {
                            border-top-color: #e1e1e1;
                        }
                        
                        #s-lg-tabs-container .nav-tabs > li > a.s-lg-tab-drop {
                            border-radius: 0 4px 0 0;
                            padding: 4px 6px 4px 3px;
                            border-left: 1px solid transparent;
                        }
                        #s-lg-tabs-container .nav-tabs > li > a.s-lg-tab-drop:hover {
                            border-radius: 0 4px 0 0;
                            border-left: 1px solid #bbb;
                            padding: 4px 6px 4px 3px;
                        }
                        #s-lg-tabs-container .nav-tabs > li > a.s-lg-tab-top-link,
                        #s-lg-tabs-container .nav-tabs > li > a.s-lg-tab-top-link:hover {
                            border-radius: 4px 0 0 0;
                            font-weight: bold;
                            padding: 4px 5px 4px 10px;
                        }
                        .nav-tabs > li > a.s-lg-tab-top-link {
                            margin-right: 0px;
                        }

                        #s-lg-tabs-container .nav-pills > li > a.s-lg-tab-drop {
                            border-radius: 0 4px 0 0;
                            padding: 4px 8px 4px 8px;
                            border-left: 1px solid transparent;
                            position: absolute;
                            right: 0;
                        }
                        #s-lg-tabs-container .nav-pills > li > a.s-lg-tab-drop:hover {
                            border-radius: 0 4px 0 0;
                            border-left: 1px solid #bbb;
                            padding: 4px 8px 4px 8px;
                        }
                        #s-lg-tabs-container .nav-pills > li > a.s-lg-tab-top-link,
                        #s-lg-tabs-container .nav-pills > li > a.s-lg-tab-top-link:hover {
                            width: 100%;
                            float: left;
                            border-radius: 4px 0 0 0;
                            font-weight: bold;
                            padding: 4px 15px 4px 15px;
                        }#s-lg-guide-tabs-title-bar { border-top: 1px solid #ffffff; }
                    .s-lib-box {
                        border-color: #005481;
                        border-width: 1px;
                        box-shadow: 0 8px 6px -6px #AAAAAA;border-radius: 0;
                        background-color: #ffffff;
                    }
                    .s-lib-box-std .s-lib-box-title {
                        background-color: #005481;background-image: none;
                        color: #ffffff;
                        border-bottom: 1px solid #005481;
                    }
                    .s-lib-box .s-lib-box-title {
                        background-color: #005481;background-image: none;
                        color: #ffffff;
                        border-bottom: 1px solid #005481;;
                        border-radius: 0;
                    }
                    .s-lib-box .s-lg-box-footer {
                    border-radius: 0;
                    }</style>
		<!-- BEGIN: CUSTOM HEAD SYSTEM JS/CSS -->
		<link rel="stylesheet" type="text/css" href="//s3.amazonaws.com/libapps/sites/4020/include/discovery.css" />
<script type="text/javascript" src="//s3.amazonaws.com/libapps/sites/4020/include/discovery.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:300|Oswald:300' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="https://ollusa.illiad.oclc.org/illiad/favicon2.ico">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="//s3.amazonaws.com/libapps/sites/4020/include/GA_Outbound_Tracking.js"></script>

<style>
/* css reset */html, body, div, span, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,abbr, address, cite, code,del, dfn, em, img, ins, kbd, q, samp,small, strong, sub, sup, var,b, i,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td,article, aside, canvas, details, figcaption, figure,footer, header, hgroup, menu, nav, section, summary,time, mark, audio, video {margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent;}body {line-height:1;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {display:block;}nav ul {list-style:none;}blockquote, q {quotes:none;}blockquote:before, blockquote:after,q:before, q:after {content:'';content:none;}a {margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent;}/* change colours to suit your needs */ins {background-color:#ff9;color:#000;text-decoration:none;}/* change colours to suit your needs */mark {background-color:#ff9;color:#000;font-style:italic;font-weight:bold;}del {text-decoration: line-through;}abbr[title], dfn[title] {border-bottom:1px dotted;cursor:help;}table {border-collapse:collapse;border-spacing:0;}/* change border colour to suit your needs */hr {display:block;height:1px;border:0;border-top:1px solid #cccccc;margin:1em 0;padding:0;}input, select {vertical-align:middle;}
/* end of css reset */



/* Main Page Settings */
.container-fluid
{padding: 0px;
margin: 0px;}

.row
{margin-right: 0;}

.container 
{margin-top: 0;}

body 
{font-family: "Roboto", Arial, Helvetica, Sans-serif;
font-size: 1.125em;
color: #51575b;
padding: 0;
margin: 0;}

a
{color: #005481;
text-decoration: none;}

#s-lg-guide-name
{display: none;}
/* End Main Page Settings */

#skip a
{position:absolute;
left:-10000px;}
 
#skip a:focus
{position:static;
padding-left: 5px;} 

/* Top Banner */

#top_banner
{height: 110px;
position: relative;}

#searchbox form
{padding-right: 40px;}

#logo
{position: absolute;
    bottom: 10%;
left: 20px;}

#logo img
{vertical-align: bottom;
float: left;}

#wordmark
{max-width: 500px;
max-height: 30px;
padding-left: 20px;}

#lib_logo
{max-width: 226px;
max-height: 30px;
padding-left: 10px;}

#hours
{position: absolute;
bottom: 15%;
right: 40px;
padding-left: 20px;}

#hours span
{color: #005481;}

#api_hours_today_iid738_lid3617
{display: inline-block;
vertical-align: bottom;}

#hours .divider
{color:#DBC919;
font-size: 1.5em;}

/* Hours */
#hours-col-l, #hours-col-t, .hours-today .hours-col-loc
{display: none;}

.s-lc-time
{font-weight: 700;}
/* End Hours */

@media (max-width: 1090px) {    
#logo {position: static; padding-top: 25px; padding-right: 40px;}
#hours {position: static; clear: both;}
#top_banner {height: 150px;}
#lib_logo {padding-left: 20px; width: 100%;}
#wordmark {width: 100%;}
}

@media (max-width: 780px) {    
#logo {position: static; padding-right: 40px;}
#hours {position: static; clear: both;}
#top_banner {height: 175px;}
#lib_logo {padding-left: 20px; width: 100%;}
#wordmark {width: 100%;}
}

/* End Top Banner */
/* Navigation Bar Settings */
#navigation_bar
{background-color: #005481;
height: 25px;}

.navbar-default
{background-color: #005481;
border-color: #005481;}

#navigation_bar > li > a
{font-family: "Oswald", sans-serif;
font-size: 1em;
color: #fff;
text-transform: uppercase;
font-weight: 500;
height: 51px;
line-height: 48px;}
/* End Navigation Bar Settings */


/* Navigation breadcrumbs */
/* makes breadcrumb links white */
#s-lib-bc-list a, #s-lib-bc .breadcrumb > .active
{color: #fff;}

/* adjusts breadcrumb size */
#s-lib-bc .breadcrumb
{font-size: 13px;}

/* adds left and top padding */
#s-lib-bc
{padding-left: 30px;
padding-top: 1px;
display: inline-block;}

#s-lib-bc .breadcrumb
{margin: 5px 0 10px;
font-weight: 700;
padding: 0;
background-color: transparent;
margin: -15px;}
/* End Navigation Breadcrumbs */

/* Mobile Settings */
@media (max-width: 475px) {    
#s-lg-box-collapse-14426988 .s-lib-box-content {height: 360px;}
.image {height: 425px;}
#navigation_bar {height: 40px;}
}


/* Scroll to Top of Page Arrow */
#s-lib-scroll-top
{bottom: 25px;
right: 25px;}
/* End Scroll */

/* Box Elements */
.s-lib-box-title
{text-align: center;}

.s-lib-box .s-lib-box-title
{font-family: "Oswald", Sans-serif;
font-size: 1.375em;
font-weight: normal;
color: #fff;
background-color: #005481;
background-image: none;}
/* End Box Elements */

/* Row Background Colors */
.image
{background-image: url("https://s3.amazonaws.com/libapps/accounts/27791/images/OLLU_11c.jpg");
background-position: right top;
background-size: cover;
background-repeat: no-repeat;
padding-top: 50px;
height: 525px;}

.yellow
{background-image: url("https://s3.amazonaws.com/libapps/accounts/27791/images/yellow-diamond-pattern.gif");
background-repeat: repeat;
padding-top: 10px;}

.gray
{background-color: #F1F1F1; 
padding-top: 20px;}
/* End Row Background Colors */

/* Footer */
#footer
{background: url('https://s3.amazonaws.com/libapps/accounts/27791/images/blue-diamond-pattern.gif')       
repeat; 
padding: 40px 0px 20px 0px;}

/* Footer Logo */
#library_footer_img
{max-width: 167px; }
/* End Footer Logo */

/*Footer Social Media */
#ContentFooterSocial a
{color: #005481;
background-color: #fff;
display: block;
font-size: 30px;
padding: 12px 0;margin: 0 2px;
width: 54px;
text-align: center;
float: right;}

#ContentFooterSocial a:hover, #ContentFooterSocial a:active
{background-color: #DBC919;}
/* End Footer Social Media */

/* Footer Nav Links */
#ContentFooterNav
{float: right;    
clear: right;    
padding-top: 37px;}

#ContentFooterNav ul
{float: left;    
margin: 0;   
 padding: 0;}

#ContentFooterNav li
{list-style-type: none;   
 float: left;}

#ContentFooterNav a
{display: block;    
color: #fff;    
text-decoration: none;  
padding: 0 0 0 15px;  }
/* End Footer Nav Links */
/* End Footer */

/* Links Boxes - flashing links*/
#s-lg-box-10556749 ul, #s-lg-box-4424226 ul
{list-style-type: none;
margin: 0;
padding: 0;}

#s-lg-box-10556749 a, #s-lg-box-4424226 a
{display: block;
width: 100%;
padding: 5px;
background-color: #F1F1F1;
text-align: center;
text-decoration: none;
color: #005481;}

#s-lg-box-10556749 a:hover, #s-lg-box-4434383 a:active, #s-lg-box-4424226 a:hover, #s-lg-box-4424226 a:active
{background-color: #005481;
color: #F1F1F1;}

#s-lg-box-10556749 .s-lib-box-content, #s-lg-box-4424226 .s-lib-box-content
{padding: 0;}
/* End Links Boxes - flashing links *//

.ui-widget-content
{min-height: 200px;}
/* End Main Page Search Box */

/*Background of Box is Gray */
#s-lg-box-4424227 .s-lib-box-content, #s-lg-box-4434384 .s-lib-box-content, #s-lg-box-4424229 .s-lib-box-content, #s-lg-box-3653282 .s-lib-content
{background-color: #F1F1F1;}
/* End Background of Box */

/*Remove Box Elements */
#s-lg-box-3647724, #s-lg-box-4424229, #s-lg-box-4424225, #s-lg-box-4424227, #s-lg-box-4434384, #s-lg-box-4424234, #s-lg-box-4537669
{border: 0;}

#s-lg-box-3647724-container .s-lib-box, #s-lg-box-4424229-container .s-lib-box, #s-lg-box-4424225-container .s-lib-box, #s-lg-box-4424227-container .s-lib-box, #s-lg-box-4434384-container .s-lib-box, #s-lg-box-4424234-container .s-lib-box, #s-lg-box-4537669-container .s-lib-box
{box-shadow: none;}

#s-lg-box-3647724 .s-lib-box-title, #s-lg-box-4424229 .s-lib-box-title, #s-lg-box-4424225 .s-lib-box-title, #s-lg-box-4424227 .s-lib-box-title, #s-lg-box-4434384 .s-lib-box-title, #s-lg-box-4424234 .s-lib-box-title, #s-lg-box-4537669 .s-lib-box-title
{display: none;}
/* End Remove Box Elements */

/* Link Boxes - no box borders */
#s-lg-box-4424225 ul, #s-lg-box-4424227 ul, #s-lg-box-4434384 ul, #s-lg-box-4424234 ul, #s-lg-box-4537669 ul{list-style-type: none;}#s-lg-box-4424225 li, #s-lg-box-4424227 li, #s-lg-box-4434384 li, #s-lg-box-4424234 li, #s-lg-box-4537669 li
{line-height: 2em;}

.links_title
{color: #005481;
font-size: 22px;
border-bottom:1px solid #c6d5de;
padding-bottom: 14px;
margin-bottom: 10px;
font-weight: 300;}
/* End Link Boxes */

/* Subpages Main Box */
.new_site_main .s-lib-box
{border: 0;
box-shadow: none;
padding-bottom: 150px;}

.new_site_main .s-lib-box-title
{display: none;}

.new_site_main h1
{font-size: 3em;
color: #005481;
line-height: 1.111;
text-transform: uppercase;
font-family: "Oswald", Sans-serif;font-weight: 300;}

.new_site_main h4
{font-size: 1.375em;
line-height: 1.125;
color: #51575b;
font-weight: 500;}

.new_site_main p
{font-size: 1.125em;
font-family: "Roboto", Sans-serif;}

.new_site_main li
{line-height: 1.2em;}
/* End Subpages Main Box */

@media screen and (max-width: 750px) {    
#s-lg-box-3647724, #s-lg-box-4424229, #s-lg-box-3693257, #side-tab a.support, #subpage_col_2
{display: none;}   
#ContentFooterSocial a 
{float: left; margin-top: 15px;}
.container
{padding-left: 15px;}}

@media screen and (max-width: 600px) {
.image {background-image: url("https://s3.amazonaws.com/libapps/accounts/27791/images/OLLU_11c_mobile.jpg");
background-position: left bottom;
background-size: cover;
background-repeat: no-repeat;}
}

@media (max-width:1285px) {   
 .navbar-header {        float: none;    }    
.navbar-left,.navbar-right {        float: none !important;    }    
.navbar-toggle {        display: block;    }    
.navbar-collapse {        border-top: 1px solid transparent;        
box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);    }    
.navbar-fixed-top {		top: 0;		
border-width: 0 0 1px;	}    
.navbar-collapse.collapse {        display: none!important;    }    
.navbar-nav {        float: none!important;		
margin-top: 7.5px;	}	
.navbar-nav>li {        float: none;    }    
.navbar-nav>li>a {        padding-top: 10px;        
padding-bottom: 10px;    }    
.collapse.in{  		display:block !important;	}
.dropdown-menu-right {right: auto; left: 0;	}}

</style>
		<!-- END: CUSTOM HEAD SYSTEM JS/CSS -->
		<!-- BEGIN: CUSTOM HEAD GUIDE JS/CSS -->
		
		<!-- END: CUSTOM HEAD GUIDE JS/CSS -->
		
		<script src="http://library.ollusa.edu/sa.php?site_id=4020"></script>
		<script>
			springSpace.Common = springSpace.Common || { };
			
			springSpace.Common.constant = {
					PROCESSING: {
						ACTION_DISPLAY_POLL: 159
					}
			};
			springSpace.Common.baseURL = "http://library.ollusa.edu/";
			/*
			springSpace.guidePublicObj = new springSpace.guidePublic.GuidePublic({
				script_name: "/c.php",
				guide_id: 409796,
				page_id: 2791502,
				constant: {
					PROCESSING: {
						
					},
					CONTENT: {
						CONTENT_BOOKS: 5
					}
				}
			});
			*/
			// Hide guide attributes and subjects/tags if theyre empty.
			jQuery(function () {
				//jQuery("#s-lg-guide-header-subjects").hide();
				//jQuery("#s-lg-guide-header-tags").hide();
			});
			
			handleScroll=function() {
				var target_elt = "";
				var anchor = window.location.hash.substring(1);
				
				if (jQuery.isNumeric(anchor)) {
					xhr = jQuery.ajax({
						async: false,
						url: "/content_process.php",
						type: "POST",
						dataType: "json",
						data: {
							action: 562, 
							anchor: anchor
						},
						success: function(response, textStatus, jqXHR) {
							if ((response.data.box_id != 0) && jQuery("#s-lg-box-" + response.data.box_id)) {
								target_elt = "#s-lg-box-" + response.data.box_id;
							}
						},
						error: function (jqXHR, textStatus, errorThrown) { 
						
						}
					});
				}
				else if (false) {
					target_elt = "#s-lg-page-section-2791502";
				}
				
				if (target_elt != "") {
					jQuery("html, body").animate({ scrollTop: jQuery(target_elt).offset().top }, 750);
					if (jQuery(this).scrollTop() > 220) {
						jQuery("#s-lib-scroll-top").fadeIn(750);
					}
				}
			}
	   </script>
	   <script>
			// Enable tooltips.
			jQuery(function () {
				try {
					springSpace.UI.initPopOvers();
				} catch (e) { }
			});springSpace.springTrack.init({_st_site_id: '4020',_st_guide_id: '409796',_st_page_id: '2791502'});
			jQuery(function() {springSpace.springTrack.trackPage({_st_type_id: '1',_st_guide_id: '409796',_st_page_id: '2791502'});
			});
			jQuery(document).ready(function() {
				handleScroll();
			});
	   </script>
		
</head><body class="s-lg-guide-body">

        
              <!-- BEGIN: Page Header -->
       <div id="top_banner" class="container-fluid row">
<div id="searchbox" class="container-fluid row"><div style="width:10%; display:inline-block;" id="skip"><a href="#maincontent">skip to main content</a></div><form role="search" class="form-inline pull-right" action="/srch.php" style="margin-top:8px;">
				<div class="form-group">
					<div class="s-lg-public-search-field">
						<label class="control-label sr-only" for="s-lg-guide-search">Search Library Website</label>
						<div class="input-group">
							<input type="text" id="s-lg-guide-search" name="q" class="form-control" placeholder="Search Library Website" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Search</button>
							</span>
						</div>
					</div>
				</div>
			</form></div>    
<div id="logo">     
<a href="http://library.ollusa.edu/library" style="text-decoration: none;"><img id="wordmark" class="img-responsive" src="https://s3.amazonaws.com/libapps/accounts/27791/images/OLLU_wordmark2.jpg" alt="Library Homepage">   
<img id="lib_logo" class="img-responsive" src="https://s3.amazonaws.com/libapps/accounts/27791/images/LibraryLogo2.png" alt="Sueltenfuss Library"></a>    
</div>     
<div id="hours">
<span>Today's Hours: <div id="api_hours_today_iid738_lid3617"></div><script src="https://api3.libcal.com/api_hours_today.php?iid=738&lid=3617&format=js&context=object"> </script>

<span class="divider">  |</span> 
<a href="http://library.ollusa.edu/hours" style="text-decoration: underline;">All Hours</a></span>     
</div>                    
</div> 

<div id="navigation_bar">    
 <div id="s-lib-bc">
               <div id="s-lib-bc">
<ol id="s-lib-bc-list" class="breadcrumb">
<li id="s-lib-bc-customer">
<a title="Sueltenfuss Library" href="http://library.ollusa.edu">Sueltenfuss Library</a></li>
<li id="s-lib-bc-group">
<a title="Writing" href="http://library.ollusa.edu/writing">Writing</a></li>
<li id="s-lib-bc-guide">
<a title="Assignment Calculator" href="http://calc.ollusa.edu/ollu_calculator/">Assignment Calculator</a></li>
</ol>
</div>
            </div>
</div>

        <!-- END: Page Header -->
        <!-- BEGIN: Guide Info Header -->
        <div id="s-lg-guide-header" class="container s-lib-header s-lib-side-borders">
         
			<div class="pull-right">
				
				
			</div>
                   <div id="s-lg-guide-header-info">
                <h1 id="s-lg-guide-name">Research Project Assignment Calculator</h1>
                <div id="s-lg-guide-desc-container" class="pad-top-med">
                    <span id="s-lg-guide-description"></span>
                </div>
</div>
        </div>
        <!-- END: Guide Info Header -->
        <div id="s-lg-tabs-container" class="container s-lib-side-borders pad-top-med">
            <div id="s-lg-guide-tabs" class="tabs">
                <ul class="nav nav-tabs split-button-nav">
                    
                </ul>
            </div>
        </div>
        <div id="s-lg-guide-tabs-title-bar" class="container s-lib-side-borders"></div>
 <!-- BEGIN: Guide Content -->
<div>
<div id="s-lg-guide-main" >
                <div class="row">
<div class="container s-lib-main s-lib-side-borders">
	                <div id="col_1" class="col-md-9 new_site_main">
                       
			
<?php
require 'PHPMailerAutoload.php';

date_default_timezone_set('Etc/UTC');

if (isset($_POST['send'])) {
$mail = new PHPMailer(); 
//get user imput   
$email = $_POST['email'];
$time1 = $_POST['time1'];
$time2 = $_POST['time2'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$days = $_POST['days'];
$time= abs($time1-$time2);
$days = (int)$days;

//set dates
$format= "l M d, Y";
$stage1 = $time1;
$stage1 += ($time * .03);	
$step1 = date($format, $stage1);
$stage2 = $stage1 + ($time * .04);	
$step2 = date($format, $stage2);
$stage3 = $stage2 + ($time * .01);	
$step3 = date($format, $stage3);
$stage4 = $stage3 + ($time * .03);	
$step4 = date($format, $stage4);
$stage5 = $stage4 + ($time * .41);	
$step5 = date($format, $stage5);
$stage6 = $stage5 + ($time * .02);	
$step6 = date($format, $stage6);
$stage7 = $stage6 + ($time * .10);	
$step7 = date($format, $stage7);
$stage8 = $stage7 + ($time * .10);	
$step8 = date($format, $stage8);
$stage9 = $stage8 + ($time * .20);	
$step9 = date($format, $stage9);
$stage10 = $stage9 + ($time * .06);	
$step10 = date($format, $stage10);


//compose message
$message = file_get_contents('textonly.html'); 
$message = str_replace('%date1%', $date1, $message); 
$message = str_replace('%date2%', $date2, $message); 
$message = str_replace('%days%', $days, $message);
$message = str_replace('%step1%', $step1, $message); 
$message = str_replace('%step2%', $step2, $message); 
$message = str_replace('%step3%', $step3, $message); 
$message = str_replace('%step4%', $step4, $message); 
$message = str_replace('%step5%', $step5, $message); 
$message = str_replace('%step6%', $step6, $message); 
$message = str_replace('%step7%', $step7, $message); 
$message = str_replace('%step8%', $step8, $message); 
$message = str_replace('%step9%', $step9, $message); 
$message = str_replace('%step10%', $step10, $message); 

//send mail
$mail->isSMTP();
$mail->Host = 'host';
$mail->Port = 25;
$mail->setFrom('email_address', 'Assignment Calculator');
$mail->addReplyTo('email_address');
$mail->addAddress($email);
$mail->Subject  = 'Assignment Calculator Checklist';
$mail->Body = $message;
$mail->isHTML(true);
$mail->CharSet='utf-8';
$mail->WordWrap = 70;  

}


if(!$mail->send()) {
  $result = 'Mailer error: ' . $mail->ErrorInfo;
} else {
 $result = 'Your email has been sent.';
}

?>

<p><?php print $result ?></p><br>
<p>Return to the <a href="http://library.ollusa.edu/library" style="color: #005481;"><b>Library Homepage</b></a>.</p>




							
							
			
							
			
					
							
				
							
							
							
							
							
							
							
							
			<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />						
							
							
							
							
							
							
							
					</div>
                       <div id="subpage_col_2" class="col-md-3">
              
                  
                   
					<div style="border:1px solid #005481;" id="s-lg-box-3267176-container" class="s-lib-box-container">
						<div id="s-lg-box-3267176" class="s-lib-box s-lib-box-std">
							<h2 style="padding:10px;" class="s-lib-box-title">CONTACT US
                                </h2>
							<div>
								<div style="padding:10px;" class="s-lib-box-content">
									
			<div class="  clearfix">
				<p>&nbsp;</p>

<ul style="list-style-type: none; line-height: 2em;">
	<li><i aria-hidden="true" class="fa fa-question-circle fa-fw fa-lg" title="Ask A Question"></i>&nbsp;<a href="http://libanswers.ollusa.edu/">Ask A Question</a></li>
	<li><i aria-hidden="true" class="fa fa-phone fa-fw fa-lg" title="Call the Library"></i>&nbsp;1-800-846-4085</li>
	<li><i aria-hidden="true" class="fa fa-envelope fa-fw fa-lg" title="Email the Library"></i>&nbsp;<a href="mailto:library@ollusa.edu">library@ollusa.edu</a></li>
	<li><i aria-hidden="true" class="fa fa-mobile fa-fw fa-lg" title="Text the Library"></i>&nbsp;210-441-3197</li>
	<li><i aria-hidden="true" class="fa fa-twitter fa-fw fa-lg" title="Contact Us on Twitter"></i>&nbsp;<a href="https://twitter.com/ollulibrary" target="_blank">@OLLUlibrary</a></li>
	<li><i aria-hidden="true" class="fa fa-facebook fa-fw fa-lg" title="Contact Us on Facebook"></i>&nbsp;<a href="https://www.facebook.com/OLLUSueltenfussLibrary" target="_blank">Sueltenfuss Library</a></li>
</ul>

<p>&nbsp;</p>
		   </div>
								</div>
								
							</div>
						</div>
					</div>
                   
                     
                   
 </div>
</div>
                 </div>

                          </div>
</div>
</div>

</div>
                              </div>   
                              <br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	   <br />	<br />	<br />	   
        <!-- END: Guide Content -->
        <!-- BEGIN: Page Footer -->
        
        <!-- END: Page Footer -->
        
			<div id="s-lib-alert" title="">
                            <div id="s-lib-alert-content"></div>
                       </div>        
                <!-- BEGIN: Custom Footer -->
                
<div id="footer" class="container-fluid">
<div class="container">


<div id="left_side" class="col-md-6">
<div id="footer_logo" class="row">
<a href="http://www.ollusa.edu" target="_blank" title="OLLU Homepage">
<img src="https://s3.amazonaws.com/libapps/accounts/27791/images/logo-footer.png" class="img-responsive" id="library_footer_img" alt="OLLU Homepage"></a>
</div>
</div>

<div id="right_side" class="col-md-6">
<div id="ContentFooterSocial" class="row">
<a href="http://library.ollusa.edu/feedback" target="_blank" aria-label="Send Us Feedback"><i class="fa fa-commenting-o aria-hidden="true" title="Send Us Feedback"></i></a>
<a href="mailto:library@ollusa.edu" aria-label="Email the Library"><i class="fa fa-envelope" aria-hidden="true" title="Email the Library"></i></a>
<a href="https://www.facebook.com/OLLUSueltenfussLibrary" target="_blank" aria-label="Like the Library on Facebook"><i class="fa fa-facebook" aria-hidden="true" title="Like the Library on Facebook"></i></a>
<a href="https://twitter.com/OLLUlibrary" target="_blank" aria-label="Tweet the Library"><i class="fa fa-twitter" aria-hidden="true" title="Tweet the Library"></i></a>
</div>
<nav id="ContentFooterNav" class="row">            
<ul id="nav3" class="nav3">  
<li style="color: #fff;"> &copy; OLLU, 2017. All Rights Reserved   |   <a style="display:inline; padding: 0;" href="http://library.ollusa.edu/sitemap">Site Map</a></li> 
</ul></nav>        
</div>

</div></div>
		<!-- END: Custom Footer -->
		
	</body></html>