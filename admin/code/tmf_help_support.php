<?php
//============================================================+
// File name   : tmf_help_support.php
// Begin       : 2023-01-06
// Last Update : 2023-01-06
//
// Description : Help and support information
//
// Author: Maman Sulaeman
//
// (c) Copyright:
//               Maman Sulaeman
//               TKJ SMK Gondang
//               tkj.yayasan-gondang.com
//               mamansulaeman86@gmail.com
//
/**
 */

require_once('../config/tce_config.php');

$pagelevel = K_AUTH_ADMIN_INFO;
require_once('../../shared/code/tce_authorization.php');

$thispage_title = 'Bantuan';
$thispage_title_icon = '<i class="pe-7s-help2 icon-gradient bg-strong-bliss"></i> ';

require_once('../code/tce_page_header.php');
require_once('../../shared/code/tce_functions_form_admin.php');

require_once('tce_page_header.php');

echo '<div class="card mb-3">'.K_NEWLINE;
echo '<div class="card-header"><i class="pe-7s-help1"></i>&nbsp;Bantuan Penggunaan Aplikasi'.K_NEWLINE;
echo '</div>'.K_NEWLINE;
echo '<div class="card-body">'.K_NEWLINE;

echo '</div>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;

echo '<div class="card mb-3">'.K_NEWLINE;

echo '</ol></li>';
echo '</ol>';
echo '</div>';
echo '</div>';


echo '</div>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;


require_once('tce_page_footer.php');

//============================================================+
// END OF FILE
//============================================================+
