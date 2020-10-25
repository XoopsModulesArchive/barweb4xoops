<?php

$modversion['name'] = _BW4X_MOD_NAME;
$modversion['version'] = '1.00';
$modversion['description'] = _BW4X_MOD_DESC;
$modversion['credits'] = '';
$modversion['author'] = 'Eric Houze';
$modversion['help'] = 'help.html';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'bw4x_logo.gif';
$modversion['dirname'] = 'barweb4xoops';

//Admin things
$modversion['hasAdmin'] = 0;
$modversion['adminmenu'] = '';

// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = 'Le hit-parade des recettes';
$modversion['sub'][1]['url'] = 'index.php?pge=T';
$modversion['sub'][2]['name'] = 'Une recette au hasard';
$modversion['sub'][2]['url'] = 'index.php?pge=R';
