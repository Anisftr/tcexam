<?php
//============================================================+
// File name   : tce_page_userbar.php
// Begin       : 2004-04-24
// Last Update : 2012-12-30
//
// Description : Display user's bar containing copyright
//               information, user status and language
//               selector.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//
// License:
//    Copyright (C) 2004-2013 Nicola Asuni - Tecnick.com LTD
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * @file
 * Display user's bar containing copyright information, user status and language selector.
 * @package com.tecnick.tcexam.shared
 * @author Nicola Asuni
 * @since 2004-04-24
 */

// IMPORTANT: DO NOT REMOVE OR ALTER THIS PAGE!

// skip links
echo '<div class="minibutton skip-link" dir="ltr">'.K_NEWLINE;
echo '<a href="#timersection" accesskey="3" title="[3] '.$l['w_jump_timer'].'" class="white">'.$l['w_jump_timer'].'</a> <span class="white">|</span>'.K_NEWLINE;
echo '<a href="#menusection" accesskey="4" title="[4] '.$l['w_jump_menu'].'" class="white">'.$l['w_jump_menu'].'</a>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;
/**
echo '<div class="userbar">'.K_NEWLINE;
if ($_SESSION['session_user_level'] > 0) {
    // display user information
    echo '<span title="'.$l['h_user_info'].'">'.$l['w_user'].': '.F_getFirstName($_SESSION['session_user_firstname']).'</span>';
    // display logout link
    echo '<a href="tce_logout.php" class="logoutbutton" title="'.$l['h_logout_link'].'" onclick="return confirm(\''.$l['w_logout'].'\')"><i class="fas fa-sign-out-alt"></i> '.$l['w_logout'].'</a>'.K_NEWLINE;
} else {
    // display login link
    echo ' <a href="tce_login.php" class="loginbutton" title="'.$l['h_login_button'].'"><i class="fas fa-sign-out-alt"></i> '.$l['w_login'].'</a>'.K_NEWLINE;
}
echo '</div>'.K_NEWLINE;
**/



//============================================================+
// END OF FILE
//============================================================+
