<?php
/**
 * $Id: xoops_version.php
 * Module: MyTube
 * Licence: GNU
 */
 
$mydirname = basename( dirname( __FILE__ ) );
$mydirpath = dirname( __FILE__ );

$modversion['name'] = _MI_XTUBE_NAME;
$modversion['version'] = "1.04";
$modversion['releasedate'] = "May 27, 2008";
$modversion['status'] = "RC-1";
$modversion['description'] = _MI_XTUBE_DESC;
$modversion['license'] = "GNU General Public License (GPL)";
$modversion['official'] = 1;
if (defined("ICMS_VERSION_NAME")) {
  $modversion['image'] = "images/mytube_ilogo.png";
} else {
  $modversion['image'] = "images/xtube_slogo.png";     // for backwards compatibility ;-)
}
$modversion['iconsmall'] = "images/xtube_iconsmall.png";
$modversion['iconbig'] = "images/xtube_iconbig.png";
$modversion['dirname'] = $mydirname ;

$modversion['author'] = "McDonald";
$modversion['credits'] = "WF-Projects Team. Based on the module WF-Links, thanks to the dream-team for some code snippits.";
$modversion['author_credits'] = _MI_XTUBE_AUTHOR_CREDITSTEXT;
$modversion['developer_website_url'] = "http://members.lycos.nl/mcdonaldsstore/";
$modversion['developer_website_name'] = "McDonalds Store";
$modversion['support_site_url'] = "http://members.lycos.nl/mcdonaldsstore/phpBB2/";
$modversion['support_site_name'] = "McDonalds Store";
$modversion['submit_bug'] = "http://members.lycos.nl/mcdonaldsstore/phpBB2/viewforum.php?f=2";
$modversion['submit_feature'] = "http://members.lycos.nl/mcdonaldsstore/phpBB2/viewforum.php?f=3";
$modversion['manual_wiki'] = "http://wiki.impresscms.org/index.php?title=XoopsTube";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/xoopstube.sql";

// Tables created by sql file (without prefix!)
include_once 'include/config.php';
$modversion['tables'][0] = 'xoopstube_broken';
$modversion['tables'][1] = 'xoopstube_cat';
$modversion['tables'][2] = 'xoopstube_videos';
$modversion['tables'][3] = 'xoopstube_mod';
$modversion['tables'][4] = 'xoopstube_votedata';
$modversion['tables'][5] = 'xoopstube_indexpage';
$modversion['tables'][6] = 'xoopstube_altcat';

// Launch additional install script to check
// the existence of tables 'wf_resources_types' and 'wf_resources'
$modversion['onInstall'] = '';
$modversion['onUpdate'] = 'include/update.php';

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Blocks
$modversion['blocks'][1]['file'] = "xoopstube_top.php";
$modversion['blocks'][1]['name'] = _MI_XTUBE_BNAME1;
$modversion['blocks'][1]['description'] = "Shows recently added video";
$modversion['blocks'][1]['show_func'] = "b_xoopstube_top_show";
$modversion['blocks'][1]['edit_func'] = "b_xoopstube_top_edit";
$modversion['blocks'][1]['options'] = "published|10|19|d/m/Y";
$modversion['blocks'][1]['template'] = 'xoopstube_block_new_t.html';
$modversion['blocks'][1]['can_clone'] = true ;

$modversion['blocks'][2]['file'] = "xoopstube_top.php";
$modversion['blocks'][2]['name'] = _MI_XTUBE_BNAME2;
$modversion['blocks'][2]['description'] = "Shows recently added video";
$modversion['blocks'][2]['show_func'] = "b_xoopstube_top_show";
$modversion['blocks'][2]['edit_func'] = "b_xoopstube_top_edit";
$modversion['blocks'][2]['options'] = "published|10|19|d/m/Y";
$modversion['blocks'][2]['template'] = 'xoopstube_block_new.html';
$modversion['blocks'][2]['can_clone'] = true ;

$modversion['blocks'][3]['file'] = "xoopstube_top.php";
$modversion['blocks'][3]['name'] = _MI_XTUBE_BNAME3;
$modversion['blocks'][3]['description'] = "Shows top clicked videos";
$modversion['blocks'][3]['show_func'] = "b_xoopstube_top_show";
$modversion['blocks'][3]['edit_func'] = "b_xoopstube_top_edit";
$modversion['blocks'][3]['options'] = "hits|10|19|d/m/Y";
$modversion['blocks'][3]['template'] = 'xoopstube_block_top_t.html';
$modversion['blocks'][3]['can_clone'] = true ;

$modversion['blocks'][4]['file'] = "xoopstube_top.php";
$modversion['blocks'][4]['name'] = _MI_XTUBE_BNAME4;
$modversion['blocks'][4]['description'] = "Shows top clicked videos";
$modversion['blocks'][4]['show_func'] = "b_xoopstube_top_show";
$modversion['blocks'][4]['edit_func'] = "b_xoopstube_top_edit";
$modversion['blocks'][4]['options'] = "hits|10|19|d/m/Y";
$modversion['blocks'][4]['template'] = 'xoopstube_block_top.html';
$modversion['blocks'][4]['can_clone'] = true ;

$modversion['blocks'][5]['file'] = "xoopstube_top.php";
$modversion['blocks'][5]['name'] = _MI_XTUBE_BNAME5;
$modversion['blocks'][5]['description'] = "Shows recently added video";
$modversion['blocks'][5]['show_func'] = "b_xoopstube_top_show";
$modversion['blocks'][5]['edit_func'] = "b_xoopstube_top_edit";
$modversion['blocks'][5]['options'] = "published|5|19|d/m/Y";
$modversion['blocks'][5]['template'] = 'xoopstube_block_new_h.html';
$modversion['blocks'][5]['can_clone'] = true ;

$modversion['blocks'][6]['file'] = "xoopstube_top.php";
$modversion['blocks'][6]['name'] = _MI_XTUBE_BNAME6;
$modversion['blocks'][6]['description'] = "Shows random video";
$modversion['blocks'][6]['show_func'] = "b_xoopstube_random";
$modversion['blocks'][6]['edit_func'] = "b_xoopstube_top_edit";
$modversion['blocks'][6]['options'] = "random|5|19|d/m/Y";
$modversion['blocks'][6]['template'] = 'xoopstube_block_random.html';
$modversion['blocks'][6]['can_clone'] = true ;

$modversion['blocks'][7]['file'] = "xoopstube_top.php";
$modversion['blocks'][7]['name'] = _MI_XTUBE_BNAME7;
$modversion['blocks'][7]['description'] = "Shows random video";
$modversion['blocks'][7]['show_func'] = "b_xoopstube_randomh";
$modversion['blocks'][7]['edit_func'] = "b_xoopstube_top_edit";
$modversion['blocks'][7]['options'] = "randomh|5|19|d/m/Y";
$modversion['blocks'][7]['template'] = 'xoopstube_block_random_h.html';
$modversion['blocks'][7]['can_clone'] = true ;

$modversion['blocks'][8]['file'] = "mytube_banner.php";
$modversion['blocks'][8]['name'] = _MI_XTUBE_BNAME8;
$modversion['blocks'][8]['description'] = "Shows top clicked banners";
$modversion['blocks'][8]['show_func'] = "b_mytube_banner_show";
$modversion['blocks'][8]['edit_func'] = "b_mytube_banner_edit";
$modversion['blocks'][8]['options'] = "hits|10|19";
$modversion['blocks'][8]['template'] = 'mytube_block_banner.html';
$modversion['blocks'][8]['can_clone'] = true ;

// Menu
$modversion['hasMain'] = 1;

// This part inserts the selected topics as sub items in the Xoops main menu
$module_handler = &xoops_gethandler( 'module' );
$module = &$module_handler -> getByDirname( $modversion['dirname'] );
$cansubmit = 0;
if ( is_object( $module ) ) {
    global $xoopsUser;
    $groups = ( is_object( $xoopsUser ) ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    if ( $gperm_handler -> checkRight( "XTubeSubPerm", 0, $groups, $module -> getVar( 'mid' ) ) ) {
        $cansubmit = 1;
    } 
} 
if ( $cansubmit == 1 ) {
    $modversion['sub'][0]['name'] = _MI_XTUBE_SMNAME1;
    $modversion['sub'][0]['url'] = "submit.php";
} 
unset( $cansubmit );

$i = 1;
$modversion['sub'][$i]['name'] = _MI_XTUBE_SMNAME2;
$modversion['sub'][$i]['url'] = "topten.php?list=hit";

$i++;
$modversion['sub'][$i]['name'] = _MI_XTUBE_SMNAME3;
$modversion['sub'][$i]['url'] = "topten.php?list=rate";

$i++;
$modversion['sub'][$i]['name'] = _MI_XTUBE_SMNAME4;
$modversion['sub'][$i]['url'] = "newlist.php?newvideoshowdays=7";
unset( $i );

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "xoopstube_search";

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'lid';
$modversion['comments']['pageName'] = 'singlevideo.php';
$modversion['comments']['extraParams'] = array( 'cid' );

// Comment callback functions
$modversion['comments']['callbackFile'] = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'xoopstube_com_approve';
$modversion['comments']['callback']['update'] = 'xoopstube_com_update'; 

// Templates
$i=0;
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_brokenvideo.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_videoload.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_index.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_ratevideo.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_singlevideo.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_topten.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_viewcat.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_newlistindex.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'xoopstube_videoloadsimple.html';
$modversion['templates'][$i]['description'] = '';
$i=0;

// Module config setting
$i=0;
$i++;
$modversion['config'][$i]['name'] = 'popular';
$modversion['config'][$i]['title'] = '_MI_XTUBE_POPULAR';
$modversion['config'][$i]['description'] = '_MI_XTUBE_POPULARDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 100;
$modversion['config'][$i]['options'] = array( '5' => 5, '10' => 10, '50' => 50, '100' => 100, '200' => 200, '500' => 500, '1000' => 1000 );
$i++;
$modversion['config'][$i]['name'] = 'displayicons';
$modversion['config'][$i]['title'] = '_MI_XTUBE_ICONDISPLAY';
$modversion['config'][$i]['description'] = '_MI_XTUBE_DISPLAYICONDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$modversion['config'][$i]['options'] = array( '_MI_XTUBE_DISPLAYICON1' => 1, '_MI_XTUBE_DISPLAYICON2' => 2, '_MI_XTUBE_DISPLAYICON3' => 3 );
$i++;
$modversion['config'][$i]['name'] = 'daysnew';
$modversion['config'][$i]['title'] = '_MI_XTUBE_DAYSNEW';
$modversion['config'][$i]['description'] = '_MI_XTUBE_DAYSNEWDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;
$i++;
$modversion['config'][$i]['name'] = 'daysupdated';
$modversion['config'][$i]['title'] = '_MI_XTUBE_DAYSUPDATED';
$modversion['config'][$i]['description'] = '_MI_XTUBE_DAYSUPDATEDDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;
$i++;
$modversion['config'][$i]['name'] = 'perpage';
$modversion['config'][$i]['title'] = '_MI_XTUBE_PERPAGE';
$modversion['config'][$i]['description'] = '_MI_XTUBE_PERPAGEDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;
$modversion['config'][$i]['options'] = array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50 );
$i++;
$modversion['config'][$i]['name'] = 'admin_perpage';
$modversion['config'][$i]['title'] = '_MI_XTUBE_ADMINPAGE';
$modversion['config'][$i]['description'] = '_MI_XTUBE_AMDMINPAGEDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;
$modversion['config'][$i]['options'] = array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50 );
$i++;
$qa = ' (A)';
$qd = ' (D)';
$modversion['config'][$i]['name'] = 'linkxorder';
$modversion['config'][$i]['title'] = '_MI_XTUBE_ARTICLESSORT';
$modversion['config'][$i]['description'] = '_MI_XTUBE_ARTICLESSORTDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'title ASC';
$modversion['config'][$i]['options'] = array( _MI_XTUBE_TITLE . $qa => 'title ASC',
                                              _MI_XTUBE_TITLE . $qd => 'title DESC',
                                              _MI_XTUBE_SUBMITTED2 . $qa => 'published ASC' ,
                                              _MI_XTUBE_SUBMITTED2 . $qd => 'published DESC',
                                              _MI_XTUBE_RATING . $qa => 'rating ASC',
                                              _MI_XTUBE_RATING . $qd => 'rating DESC',
                                              _MI_XTUBE_POPULARITY . $qa => 'hits ASC',
                                              _MI_XTUBE_POPULARITY . $qd => 'hits DESC'
                                             );
$i++;
$modversion['config'][$i]['name'] = 'sortcats';
$modversion['config'][$i]['title'] = '_MI_XTUBE_SORTCATS';
$modversion['config'][$i]['description'] = '_MI_XTUBE_SORTCATSDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'weight';
$modversion['config'][$i]['options'] = array( 'Weight' => 'weight',
                                             'Title' => 'title'
                                            );
$i++;
$modversion['config'][$i]['name'] = 'subcats';
$modversion['config'][$i]['title'] = '_MI_XTUBE_SUBCATS';
$modversion['config'][$i]['description'] = '_MI_XTUBE_SUBCATSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'form_options';
$modversion['config'][$i]['title'] = '_MI_XTUBE_EDITOR';
$modversion['config'][$i]['description'] = '_MI_XTUBE_EDITORCHOICE';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'dhtml';
$modversion['config'][$i]['options'] =  array( 	_MI_XTUBE_FORM_COMPACT => 'textarea',
						_MI_XTUBE_FORM_DHTML => 'dhtml',
						_MI_XTUBE_FORM_DHTMLEXT => 'dhtmlext',
						_MI_XTUBE_FORM_FCK => 'fckeditor',
						_MI_XTUBE_FORM_HTMLAREA => 'htmlarea',
						_MI_XTUBE_FORM_KOIVI => 'koivi',
						_MI_XTUBE_FORM_TINYEDITOR => 'tinyeditor',
						_MI_XTUBE_FORM_TINYMCE => 'tinymce'
                                              );
$i++;
$modversion['config'][$i]['name'] = 'form_optionsuser';
$modversion['config'][$i]['title'] = '_MI_XTUBE_EDITORUSER';
$modversion['config'][$i]['description'] = '_MI_XTUBE_EDITORCHOICEUSER';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'dhtml';
$modversion['config'][$i]['options'] =  array(  _MI_XTUBE_FORM_COMPACT => 'textarea',
						_MI_XTUBE_FORM_DHTML => 'dhtml',
						_MI_XTUBE_FORM_DHTMLEXT => 'dhtmlext',
						_MI_XTUBE_FORM_FCK => 'fckeditor',
						_MI_XTUBE_FORM_HTMLAREA => 'htmlarea',
						_MI_XTUBE_FORM_KOIVI => 'koivi',
						_MI_XTUBE_FORM_TINYEDITOR => 'tinyeditor',
						_MI_XTUBE_FORM_TINYMCE => 'tinymce'
                                              );
$i++;
$modversion['config'][$i]['name'] = 'screenshot';
$modversion['config'][$i]['title'] = '_MI_XTUBE_USESHOTS';
$modversion['config'][$i]['description'] = '_MI_XTUBE_USESHOTSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'usethumbs';
$modversion['config'][$i]['title'] = '_MI_XTUBE_USETHUMBS';
$modversion['config'][$i]['description'] = '_MI_XTUBE_USETHUMBSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'updatethumbs';
$modversion['config'][$i]['title'] = '_MI_XTUBE_IMGUPDATE';
$modversion['config'][$i]['description'] = '_MI_XTUBE_IMGUPDATEDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'shotwidth';
$modversion['config'][$i]['title'] = '_MI_XTUBE_SHOTWIDTH';
$modversion['config'][$i]['description'] = '_MI_XTUBE_SHOTWIDTHDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 120;
$i++;
$modversion['config'][$i]['name'] = 'shotheight';
$modversion['config'][$i]['title'] = '_MI_XTUBE_SHOTHEIGHT';
$modversion['config'][$i]['description'] = '_MI_XTUBE_SHOTHEIGHTDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 90;
$i++;
$modversion['config'][$i]['name'] = 'maxfilesize';
$modversion['config'][$i]['title'] = '_MI_XTUBE_MAXFILESIZE';
$modversion['config'][$i]['description'] = '_MI_XTUBE_MAXFILESIZEDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 200000;
$i++;
$modversion['config'][$i]['name'] = 'maximgwidth';
$modversion['config'][$i]['title'] = '_MI_XTUBE_IMGWIDTH';
$modversion['config'][$i]['description'] = '_MI_XTUBE_IMGWIDTHDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 600;
$i++;
$modversion['config'][$i]['name'] = 'maximgheight';
$modversion['config'][$i]['title'] = '_MI_XTUBE_IMGHEIGHT';
$modversion['config'][$i]['description'] = '_MI_XTUBE_IMGHEIGHTDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 600;
$i++;
$modversion['config'][$i]['name'] = 'mainimagedir';
$modversion['config'][$i]['title'] = '_MI_XTUBE_MAINIMGDIR';
$modversion['config'][$i]['description'] = '_MI_XTUBE_MAINIMGDIRDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'modules/'.$mydirname.'/images';
$i++;
$modversion['config'][$i]['name'] = 'catimage';
$modversion['config'][$i]['title'] = '_MI_XTUBE_CATEGORYIMG';
$modversion['config'][$i]['description'] = '_MI_XTUBE_CATEGORYIMGDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'uploads/xt_images/category';
$i++;
$modversion['config'][$i]['name'] = 'videodir';
$modversion['config'][$i]['title'] = '_MI_XTUBE_VIDEODIR';
$modversion['config'][$i]['description'] = '_MI_XTUBE_VIDEODIRDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'uploads/xt_images/videos';
$i++;
$modversion['config'][$i]['name'] = 'videoimgdir';
$modversion['config'][$i]['title'] = '_MI_XTUBE_VIDEOIMGDIR';
$modversion['config'][$i]['description'] = '_MI_XTUBE_VIDEOIMGDIRDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'uploads/xt_images/screenshots';
$i++;
$modversion['config'][$i]['name'] = 'dateformat';
$modversion['config'][$i]['title'] = '_MI_XTUBE_DATEFORMAT';
$modversion['config'][$i]['description'] = '_MI_XTUBE_DATEFORMATDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'D, d-M-Y';
$i++;
$modversion['config'][$i]['name'] = 'dateformatadmin';
$modversion['config'][$i]['title'] = '_MI_XTUBE_DATEFORMATADMIN';
$modversion['config'][$i]['description'] = '_MI_XTUBE_DATEFORMATADMINDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'D, d-M-Y - G:i';
$i++;
$modversion['config'][$i]['name'] = 'totalchars';
$modversion['config'][$i]['title'] = '_MI_XTUBE_TOTALCHARS';
$modversion['config'][$i]['description'] = '_MI_XTUBE_TOTALCHARSDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 200;
$modversion['config'][$i]['options'] = array( '100' => 100, '200' => 200, '300' => 300, '400' => 400, '500' => 500, '750' => 750 );
$i++;
$modversion['config'][$i]['name'] = 'othervideos';
$modversion['config'][$i]['title'] = '_MI_XTUBE_OTHERVIDEOS';
$modversion['config'][$i]['description'] = '_MI_XTUBE_OTHERVIDEOSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'showsbookmarks';
$modversion['config'][$i]['title'] = '_MI_XTUBE_SHOWSBOOKMARKS';
$modversion['config'][$i]['description'] = '_MI_XTUBE_SHOWSBOOKMARKSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'usemetadescr';
$modversion['config'][$i]['title'] = '_MI_XTUBE_USEMETADESCR';
$modversion['config'][$i]['description'] = '_MI_XTUBE_USEMETADSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'usercantag';
$modversion['config'][$i]['title'] = '_MI_XTUBE_USERTAGDESCR';
$modversion['config'][$i]['description'] = '_MI_XTUBE_USERTAGDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'showdisclaimer';
$modversion['config'][$i]['title'] = '_MI_XTUBE_SHOWDISCLAIMER';
$modversion['config'][$i]['description'] = '_MI_XTUBE_SHOWDISCLAIMERDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'disclaimer';
$modversion['config'][$i]['title'] = '_MI_XTUBE_DISCLAIMER';
$modversion['config'][$i]['description'] = '_MI_XTUBE_DISCLAIMERDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'We have the right, but not the obligation to monitor and review submissions submitted by users, to this website. We shall not be responsible for any of the content of these messages. We further reserve the right, to delete, move or edit submissions that we, in its exclusive discretion, deems abusive, defamatory, obscene or in violation of any Copyright or Trademark laws or otherwise objectionable.';
$i++;
$modversion['config'][$i]['name'] = 'showvideodisclaimer';
$modversion['config'][$i]['title'] = '_MI_XTUBE_SHOWVIDEODISCL';
$modversion['config'][$i]['description'] = '_MI_XTUBE_SHOWVIDEODISCLDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'videodisclaimer';
$modversion['config'][$i]['title'] = '_MI_XTUBE_VIDEODISCLAIMER';
$modversion['config'][$i]['description'] = '_MI_XTUBE_VIDEODISCLAIMERDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'The videos on this site are provided as is without warranty either expressed or implied. If you have a question concerning a particular piece video, feel free to contact the administrator of this website.<br /><br />Contact us if you have questions concerning this disclaimer.';
$i++;
$modversion['config'][$i]['name'] = 'copyright';
$modversion['config'][$i]['title'] = '_MI_XTUBE_COPYRIGHT';
$modversion['config'][$i]['description'] = '_MI_XTUBE_COPYRIGHTDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
// Notification
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'xoopstube_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'global';
$modversion['notification']['category'][1]['title'] = _MI_XTUBE_GLOBAL_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_XTUBE_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = array( 'index.php', 'viewcat.php', 'singlevideo.php' );

$modversion['notification']['category'][2]['name'] = 'category';
$modversion['notification']['category'][2]['title'] = _MI_XTUBE_CATEGORY_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_XTUBE_CATEGORY_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array( 'viewcat.php', 'singlevideo.php' );
$modversion['notification']['category'][2]['item_name'] = 'cid';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'video';
$modversion['notification']['category'][3]['title'] = _MI_XTUBE_VIDEO_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_XTUBE_FILE_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = 'singlevideo.php';
$modversion['notification']['category'][3]['item_name'] = 'lid';
$modversion['notification']['category'][3]['allow_bookmark'] = 1;

$modversion['notification']['event'][1]['name'] = 'new_category';
$modversion['notification']['event'][1]['category'] = 'global';
$modversion['notification']['event'][1]['title'] = _MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_newcategory_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'video_modify';
$modversion['notification']['event'][2]['category'] = 'global';
$modversion['notification']['event'][2]['admin_only'] = 1;
$modversion['notification']['event'][2]['title'] = _MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'global_videomodify_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'video_broken';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['admin_only'] = 1;
$modversion['notification']['event'][3]['title'] = _MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_videobroken_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ;

$modversion['notification']['event'][4]['name'] = 'video_submit';
$modversion['notification']['event'][4]['category'] = 'global';
$modversion['notification']['event'][4]['admin_only'] = 1;
$modversion['notification']['event'][4]['title'] = _MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_videosubmit_notify';
$modversion['notification']['event'][4]['mail_subject'] = _MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][5]['name'] = 'new_video';
$modversion['notification']['event'][5]['category'] = 'global';
$modversion['notification']['event'][5]['title'] = _MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'global_newfile_notify';
$modversion['notification']['event'][5]['mail_subject'] = _MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ;

$modversion['notification']['event'][6]['name'] = 'video_submit';
$modversion['notification']['event'][6]['category'] = 'category';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'category_videosubmit_notify';
$modversion['notification']['event'][6]['mail_subject'] = _MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][7]['name'] = 'new_video';
$modversion['notification']['event'][7]['category'] = 'category';
$modversion['notification']['event'][7]['title'] = _MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP;
$modversion['notification']['event'][7]['description'] = _MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC;
$modversion['notification']['event'][7]['mail_template'] = 'category_newfile_notify';
$modversion['notification']['event'][7]['mail_subject'] = _MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ;

$modversion['notification']['event'][8]['name'] = 'approve';
$modversion['notification']['event'][8]['category'] = 'video';
$modversion['notification']['event'][8]['invisible'] = 1;
$modversion['notification']['event'][8]['title'] = _MI_XTUBE_VIDEO_APPROVE_NOTIFY;
$modversion['notification']['event'][8]['caption'] = _MI_XTUBE_VIDEO_APPROVE_NOTIFYCAP;
$modversion['notification']['event'][8]['description'] = _MI_XTUBE_VIDEO_APPROVE_NOTIFYDSC;
$modversion['notification']['event'][8]['mail_template'] = 'video_approve_notify';
$modversion['notification']['event'][8]['mail_subject'] = _MI_XTUBE_VIDEO_APPROVE_NOTIFYSBJ;

// On Update
if ( ! empty( $_POST['fct'] ) && ! empty( $_POST['op'] ) && $_POST['fct'] == 'modulesadmin' && $_POST['op'] == 'update_ok' && $_POST['dirname'] == $modversion['dirname'] ) {
    include dirname( __FILE__ ) . "/include/onupdate.inc.php" ;
} 

?>