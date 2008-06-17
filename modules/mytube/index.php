<?php
/**
 * $Id: index.php
 * Module: MyTube
 */

include 'header.php';

$xoopsOption['template_main'] = 'xoopstube_index.html';
include XOOPS_ROOT_PATH . '/header.php';

global $xoopsModuleConfig;

$mytree = new XoopsTree( $xoopsDB -> prefix( 'xoopstube_cat' ), 'cid', 'pid' );

// Begin Main page Heading etc
$sql = "SELECT * FROM " . $xoopsDB -> prefix( 'xoopstube_indexpage' );
$head_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );

$catarray['imageheader'] = xtube_imageheader( $head_arr['indeximage'], $head_arr['indexheading'] );
$catarray['indexheading'] = $xtubemyts -> displayTarea( $head_arr['indexheading'] );
$catarray['indexheaderalign'] = $xtubemyts -> htmlSpecialCharsStrip( $head_arr['indexheaderalign'] );
$catarray['indexfooteralign'] = $xtubemyts -> htmlSpecialCharsStrip( $head_arr['indexfooteralign'] );

$html = ( $head_arr['nohtml'] ) ? 0 : 1;
$smiley = ( $head_arr['nosmiley'] ) ? 0 : 1;
$xcodes = ( $head_arr['noxcodes'] ) ? 0 : 1;
$images = ( $head_arr['noimages'] ) ? 0 : 1;
$breaks = ( $head_arr['nobreak'] ) ? 1 : 0;

$catarray['indexheader'] = $xtubemyts -> displayTarea( $head_arr['indexheader'], $html, $smiley, $xcodes, $images, $breaks );
$catarray['indexfooter'] = $xtubemyts -> displayTarea( $head_arr['indexfooter'], $html, $smiley, $xcodes, $images, $breaks );
$xoopsTpl -> assign( 'catarray', $catarray );
// End main page Headers

$count = 1;
$chcount = 0;
$countin = 0;

// Begin Main page linkload info
$listings = xtube_getTotalItems();
// get total amount of categories
$total_cat = xtube_totalcategory();

$catsort = $xoopsModuleConfig['sortcats'];
$sql = "SELECT * FROM " . $xoopsDB -> prefix( 'xoopstube_cat' ) . " WHERE pid = 0 ORDER BY " . $catsort;
$result = $xoopsDB -> query( $sql );
while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
    $countin++;
    $subtotalvideoload = 0;
    $totalvideoload = xtube_getTotalItems( $myrow['cid'], 1 );
    $indicator = xtube_isnewimage( $totalvideoload['published'] );
    if ( checkgroups( $myrow['cid'] ) ) {
        $title = $xtubemyts -> htmlSpecialCharsStrip( $myrow['title'] );

        $arr = array();
        $arr = $mytree -> getFirstChild( $myrow['cid'], "title" );

        $space = 1;
        $chcount = 1;
        $subcategories = "";
        foreach( $arr as $ele ) {
            if ( true == checkgroups( $ele['cid'] ) ) {
                if ( $xoopsModuleConfig['subcats'] == 1 ) {
                    $chtitle = $xtubemyts -> htmlSpecialCharsStrip( $ele['title'] );
                    if ( $chcount > 5 ) {
                        $subcategories .= "...";
                        break;
                    } 
                    if ( $space > 0 ) {
                        $subcategories .= "<br />";
                    }
                    $subcategories .= "<a href='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/viewcat.php?cid=" . $ele['cid'] . "'>" . $chtitle . "</a>";
                    $space++;
                    $chcount++;
                } 
            } 
        }

         // This code is copyright WF-Projects
         // Using this code without our permission or removing this code voids the license agreement
        $_image = ( $myrow['imgurl'] ) ? urldecode( $myrow['imgurl'] ) : "";
		if ( $_image != "" && $xoopsModuleConfig['usethumbs'] ) {
                  $_thumb_image = new xtubeThumbsNails( $_image, $xoopsModuleConfig['catimage'], 'thumbs' );
			if ( $_thumb_image ) {
                          $_thumb_image -> setUseThumbs( 1 );
                          $_thumb_image -> setImageType( 'gd2' );
                          $_image = $_thumb_image -> do_thumb( $xoopsModuleConfig['shotwidth'],
                          $xoopsModuleConfig['shotheight'],
                          $xoopsModuleConfig['imagequality'],
                          $xoopsModuleConfig['updatethumbs'],
                          $xoopsModuleConfig['keepaspect']
                          );
                }
        }
	if ( empty( $_image ) || $_image == '' ) {
            $imgurl = $indicator['image'];
            $_width = 33;
            $_height = 24;
        } else {
            $imgurl = "{$xoopsModuleConfig['catimage']}/$_image";
            $_width = $xoopsModuleConfig['shotwidth'];
            $_height = $xoopsModuleConfig['shotheight'];
        } 
        // End

        $xoopsTpl -> append( 'categories', array( 'image' => XOOPS_URL . "/$imgurl",
                'id' => $myrow['cid'],
                'title' => $title,
                'subcategories' => $subcategories,
                'totalvideos' => $totalvideoload['count'],
                'width' => $_width,
                'height' => $_height,
                'count' => $count,
                'alttext' => $myrow['description'] )
            );
        $count++;
    } 
} 
switch ( $total_cat ) {
    case "1":
        $lang_thereare = _MD_XTUBE_THEREIS;
        break;
    default:
        $lang_thereare = _MD_XTUBE_THEREARE;
        break;
}
$xoopsTpl -> assign( 'lang_thereare', sprintf( $lang_thereare, $total_cat, $listings['count'] ) );
$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
 
include XOOPS_ROOT_PATH . '/footer.php';
?>