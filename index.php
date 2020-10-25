<?php

// -------------------------------------------------------------------------
//           BarWeb for Xoops v1.00
//        Module for XOOPS V2 - PHP Content Management System
//       <https://www.xoops.org>
// -------------------------------------------------------------------------
// Author: Eric Houze
// Purpose: Permet d'afficher les données du BarWeb dans un Iframe.
// email: barweb@free.fr
// Site: http://barweb.free.fr
// -------------------------------------------------------------------------

include('header.php');
global $xoopsConfig;
if ('barweb4xoops' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();
} else {
    $xoopsOption['show_rblock'] = 0;

    include(XOOPS_ROOT_PATH . '/header.php');
}

// Indique la feuille de style du site xoops à utiliser
// Quelque chose comme : XOOPS_URL."/themes/".$xoopsConfig['theme_set']."/style.css";
$css = xoops_getcss($xoopsConfig['theme_set']);
// Indique l'URL du site xoops (nécessaire pour un recadrage correct de l'iframe lors du clic sur des liens qu'il contient)
$url = XOOPS_URL . '/modules/barweb4xoops/index.php';

$param = 'bw4x.php?style=' . $css . '&url=' . $url;
// A-t-on reu des paramètres depuis le barweb ?
if (mb_strlen($HTTP_SERVER_VARS['QUERY_STRING']) > 0) {
    $param .= '&' . $HTTP_SERVER_VARS['QUERY_STRING'];
}

// Appel de l'Iframe qui affichera les données issues du BarWeb
echo '<iframe scrolling="auto" frameborder="0" framespacing="0" border="0" align="left" width="100%" height="1200" src="http://barweb.free.fr/' . $param . '"></iframe>';

include(XOOPS_ROOT_PATH . '/footer.php');
