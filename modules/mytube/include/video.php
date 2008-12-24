<?php
/**
 * $Id: video.php
 * Module: MyTube
 */

function xtube_returnsource($returnsource) {
    switch( $returnsource ) {
    case 0:
          $returnsource = _AM_XTUBE_YOUTUBE;
          break;
    case 1:
          $returnsource = _AM_XTUBE_METACAFE;
          break;
    case 2:
          $returnsource = _AM_XTUBE_IFILM;
          break;
    case 3:
          $returnsource = _AM_XTUBE_PHOTOBUCKET;
          break;
    case 100:
          $returnsource = _AM_XTUBE_GOOGLEVIDEO;
          break;
    case 101:
          $returnsource = _AM_XTUBE_MYSPAVETV;
          break;
    case 102:
          $returnsource = _AM_XTUBE_DAILYMOTION;
          break;
    case 103:
          $returnsource = _AM_XTUBE_BLIPTV;
          break;
    case 104:
          $returnsource = _AM_XTUBE_CLIPFISH;
          break;
    case 105:
          $returnsource = _AM_XTUBE_LIVELEAK;
          break;
    case 200:
          $returnsource = _AM_XTUBE_MYTUBE;
          break;
    case 106:
          $returnsource = _AM_XTUBE_MAKTOOB;
          break;
    case 107:
          $returnsource = _AM_XTUBE_VEOH;
          break;
	case 108:
		  $returnsource = _AM_XTUBE_VIMEO;
		  break;
	case 109:
		  $returnsource = _AM_XTUBE_MEGAVIDEO;
		  break;
    }
    return $returnsource;
}


// Function for determining source for creating screenshot
function xtube_videothumb($vidid, $title, $source, $picurl, $screenshot) {
  global $xoopsModuleConfig;
  $thumb = '';
  
// Determine if video source YouTube for thumbnail
  if ($source == 0) {
     $thumb = '<img src="http://img.youtube.com/vi/' . $vidid . '/default.jpg"  title="' . $title . '" alt="' . $title . '" width="' . $xoopsModuleConfig['shotwidth'] . '" height="' . $xoopsModuleConfig['shotheight'] . '"hspace="7" vspace="2" border="0" align="left" />';
  }
  
// Determine if video source MetaCafe for thumbnail
  if ($source == 1) {
     list($metaclip) = split('[/]', $vidid);
     $videothumb['metathumb'] = $metaclip;
     $thumb = '<img src="http://www.metacafe.com/thumb/' . $videothumb['metathumb'] . '.jpg" title="' . $title . '" alt="' . $title . '" width="' . $xoopsModuleConfig['shotwidth'] . '" height="' . $xoopsModuleConfig['shotheight'] . '"hspace="7" vspace="2" border="0" align="left" />';
  }
  
// Determine if video source iFilm/Spike for thumbnail
  if ($source == 2) {
     $thumb = '<img src="http://img3.ifilmpro.com/resize/image/stills/films/resize/istd/' . $vidid . '.jpg?width=' . $xoopsModuleConfig['shotwidth'] . '"  title="' . $title . '" alt="' . $title . '" hspace="7" vspace="2" border="0" align="left" />';
  }
  
// Determine if video source is Photobucket for thumbnail
  if ($source == 3) {
     $thumb = '<img src="http://i153.photobucket.com/albums/' . $vidid . '.jpg" width="' . $xoopsModuleConfig['shotwidth'] . '" height="' . $xoopsModuleConfig['shotheight'] . '"  title="' . $title . '" alt="' . $title . '" hspace="7" vspace="2" border="0" align="left" />';
  }
  
// Determine if video source is Google Video, MySpace TV, DailyMotion, BrightCove, Blip.tv, ClipFish, LiveLeak, Maktoob, Veoh for thumbnail
  if ($source >= 100 & $source < 200) {
     $thumb = '<img src="' . $picurl . '" width="' . $xoopsModuleConfig['shotwidth'] . '" height="' . $xoopsModuleConfig['shotheight'] . '"  title="' . $title . '" alt="' . $title . '" hspace="7" vspace="2" border="0" align="left" />';
  }
  
// Determine if video source is MyTube for thumbnail
  if ($source == 200) {
     $thumb = '<img src="' . XOOPS_URL . '/' . $xoopsModuleConfig['videoimgdir'] . '/' . $screenshot . '" width="' . $xoopsModuleConfig['shotwidth'] . '" height="' . $xoopsModuleConfig['shotheight'] . '"  title="' . $title . '" alt="' . $title . '" hspace="7" vspace="2" border="0" align="left" />';
  }
  return $thumb;
}


// Function for determining publisher
function xtube_videopublisher($vidid, $publisher, $source) {
// Determine if video source YouTube for publisher
  if ($source == 0) {
     $publisher = '<a href="http://www.youtube.com/profile?user=' . $publisher . '" target="_blank">' . $publisher . '</a>';
  }
  
// Determine if video source MetaCafe for publisher
  if ($source == 1) {
     $publisher = '<a href="http://www.metacafe.com/channels/' . $publisher . '" target="_blank">' . $publisher . '</a>';
  }
  
// Determine if video source iFilm/Spike for publisher
  if ($source == 2) {
     $publisher = '<a href="http://www.ifilm.com/profile/' . $publisher . '" target="_blank">' . $publisher . '</a>';
  }
  
// Determine if video source Photobucket for publisher
  if ($source == 3) {  
     $string = 'th_';
     list($photobucket) = split($string, $vidid);
     $ppublisher['ppublisher'] = $photobucket;
     $publisher = '<a href="http://s39.photobucket.com/albums/' . $ppublisher['ppublisher'] . '" target="_blank">' . $publisher . '</a>';
  }
  
// Determine if video source is Google Video for publisher
  if ( $source == 100 || 101 || 103 || 106 || 108 || 109 ) {
     $publisher = $publisher;
  }
  
// Determine if video source is DailyMotion for publisher
  if ($source == 102) {
     $publisher = '<a href="http://www.dailymotion.com/' . $publisher .'" target="_blank">' . $publisher . '</a>';
  }
  
// Determine if video source is ClipFish for publisher
  if ($source == 104) {
     $publisher = '<a href="http://www.clipfish.de/user/' . $publisher .'" target="_blank">' . $publisher . '</a>';
  }
  
// Determine if video source is LiveLeak for publisher
  if ($source == 105) {
     $publisher = '<a href="http://www.liveleak.com/user/' . $publisher .'" target="_blank">' . $publisher . '</a>';
  }
  
// Determine if video source is Veoh for publisher
  if ($source == 107) {
     $publisher = '<a href="http://www.veoh.com/users/' . $publisher .'" target="_blank">' . $publisher . '</a>';
  }
  
// Determine if video source is MyTube for publisher
  if ($source == 200) {
     $publisher = $publisher;
  }
  
  return $publisher;
}

//Function for displaying videoclip (embedded code)
function xtube_showvideo($vidid, $source, $screenshot, $picurl) {
    global $xoopsModule, $xoopsModuleConfig;
    $showvideo = '';
	$autoplay = $xoopsModuleConfig['autoplay'];
	if ( $xoopsModuleConfig['autoplay'] ) {
		$autoplay2 = 'yes';
		$autoplay3 = 'true';
		$photobucket = '&ap=1';
		$google = 'FlashVars="autoPlay=true"';
	} else {
		$autoplay2 = 'no';
		$autoplay3 = 'false';
		$photobucket = '';
		$google = '';
	}
	
// Show if source is YouTube
    if ($source == 0) {
       $showvideo = '<object width="480" height="295"><param name="movie" value="http://www.youtube.com/v/' . $vidid . '&ap=%2526fmt%3D18&&autoplay=' . $autoplay . '&rel=1&fs=1&color1=0x999999&color2=0x999999&border=0&loop=0"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/' . $vidid . '&ap=%2526fmt%3D18&&autoplay=' . $autoplay . '&rel=1&fs=1&color1=0x999999&color2=0x999999&border=0&loop=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="transparent" width="480" height="295"></embed></object>';
    }
	
// Show if source is MetaCafe
    if ($source == 1) {
       $showvideo = '<embed flashVars="playerVars=showStats=no|autoPlay=' . $autoplay2 . '" src="http://www.metacafe.com/fplayer/' . $vidid . '.swf" width="480" height="295" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>';
    }
	
// Show if source is iFilm/Spike
    if ($source == 2) {
       $showvideo = '<embed width="480" height="295" src="http://www.spike.com/efp" quality="high" bgcolor="000000" name="efp" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="flvbaseclip=' . $vidid . '" allowfullscreen="true"> </embed>';
    }
	
// Show if source is Photobucket
    if ($source == 3) {
       $vidid = str_replace( 'th_', '', $vidid);
       $showvideo = '<embed width="480" height="295" type="application/x-shockwave-flash" wmode="transparent" src="http://i51.photobucket.com/player.swf?file=http://vid51.photobucket.com/albums/' . $vidid . '.flv' . $photobucket . '"></embed>';
    }
	
// Show if source is Google Video
    if ($source == 100) {
       $showvideo = '<embed style="width:480px; height:295px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId=' . $vidid . '&hl=en" ' . $google . '> </embed>';
    }
	
// Show if source is MySpace TV
    if ($source == 101) {
       $showvideo = '<embed src="http://mediaservices.myspace.com/services/media/embed.aspx/m=' . $vidid . ',t=1,mt=video,ap=' . $autoplay . '" width="480" height="295" allowFullScreen="true" type="application/x-shockwave-flash"></embed>';
    }
	
// Show if source is DailyMotion
    if ($source == 102) {
       $showvideo = '<embed src="http://www.dailymotion.com/swf/' . $vidid . '&autoPlay=' . $autoplay . '" type="application/x-shockwave-flash" width="480" height="295" allowFullScreen="true" allowScriptAccess="always"></embed>';
    }
	
// Show if source is Blip.tv
    if ($source == 103) {
       $showvideo = '<embed src="http://blip.tv/play/' . $vidid . '" type="application/x-shockwave-flash" width="480" height="295" allowscriptaccess="always" allowfullscreen="true" flashvars="autostart=' . $autoplay3 . '"></embed>';
    }
	
// Show if source is ClipFish
    if ($source == 104) {
       $showvideo = '<embed src="http://www.clipfish.de/videoplayer.swf?as=' . $autoplay . '&videoid=' . $vidid . '==&r=1&c=0067B3" quality="high" bgcolor="#0067B3" width="464" height="380" name="player" align="middle" allowFullScreen="true" allowScriptAccess="always"  type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>'; // Change c=0067B3 for different player color
    }
	
// Show if source is LiveLeak
    if ($source == 105) {
       $showvideo = '<embed src="http://www.liveleak.com/e/' . $vidid . '" type="application/x-shockwave-flash" flashvars="autostart=' . $autoplay3 . '" wmode="transparent" width="450" height="370"></embed>';
    }
	
// Show if source is Maktoob
    if ($source == 106) {
       $showvideo = '<embed width="448" height="320" align="middle" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="flvplayer" bgcolor="#ffffff" devicefont="true" wmode="transparent" quality="high" src="http://clipat.maktoob.com/flvplayerOurJS.swf?file=http://' . $vidid . '.flv&enablejs=true&image=' . $picurl .'&lightcolor=0x557722&backcolor=0x000000&frontcolor=0xCCCCCC&showfsbutton=true&autostart=' . $autoplay3 . '&logo=http://clipat.maktoob.com/language/ar_sa/images/clipat-icon.png&displaywidth=448" />';
    }
	
// Show if source is Veoh
    if ($source == 107) {
       $showvideo = '<embed src="http://www.veoh.com/veohplayer.swf?permalinkId=' . $vidid . '&id=anonymous&player=videodetailsembedded&affiliateId=&videoAutoPlay=' . $autoplay . '" allowFullScreen="true" width="480" height="295" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>';
    }
	
// Show if source is Vimeo 
    if ($source == 108) { 
       $showvideo = '<embed src="http://vimeo.com/moogaloop.swf?clip_id=' . $vidid . '&server=vimeo.com&show_title=1&show_byline=1&show_portrait=0&color=&fullscreen=1&autoplay=' . $autoplay . '" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" quality="best" width="400" height="321"></embed>'; 
    }
	
// Show if source is Megavideo 
    if ($source == 109) { 
       $showvideo = '<object width="640" height="363"><param name="movie" value="http://www.megavideo.com/v/' . $vidid . '"></param><param name="allowFullScreen" value="true"></param><embed src="http://www.megavideo.com/v/' . $vidid . '" type="application/x-shockwave-flash" allowfullscreen="true" width="640" height="363"></embed></object>';
	   }
	   
// Show if source is MyTube
    if ($source == 200) {
       $showvideo = '<embed src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/include/mediaplayer.swf" width="425" height="350" allowScriptAccess="always" allowFullScreen="true" flashvars="width=425&height=350&file=' . XOOPS_URL . '/' . $xoopsModuleConfig['videodir'] . '/' . $vidid.'&image=' . XOOPS_URL . '/' . $xoopsModuleConfig['videoimgdir'] . '/' . $screenshot . '&autostart=' . $autoplay3 . '"></embed>';
    }
	
return $showvideo;
}
?>