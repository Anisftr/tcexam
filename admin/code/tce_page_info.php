<?php
//============================================================+
// File name   : tce_page_info.php
// Begin       : 2004-05-21
// Last Update : 2020-05-06
//
// Description : Outputs TCExam information page.
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
//    Copyright (C) 2004-2020 Nicola Asuni - Tecnick.com LTD
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * @file
 * Outputs TCExam information page.
 * @package com.tecnick.tcexam.admin
 * @author Nicola Asuni
 * @since 2004-05-21
 */

/**
 */

require_once('../config/tce_config.php');

$pagelevel = K_AUTH_ADMIN_INFO;
require_once('../../shared/code/tce_authorization.php');

$thispage_title = $l['t_page_info'];
$thispage_title_icon = '<i class="pe-7s-info icon-gradient bg-strong-bliss"></i> ';

require_once('../code/tce_page_header.php');
require_once('../../shared/code/tce_functions_form_admin.php');

require_once('tce_page_header.php');

echo '<div class="card mb-3">'.K_NEWLINE;
echo '<div class="card-body">'.K_NEWLINE;
//echo '<span id="tcexam-desc">TMFCBT (TCExam Mobile Friendly Computer Based Test) adalah proyek turunan TCExam yang diprakarsai oleh <a href="https://mamans86.blogspot.com">@mamans86</a>. TMFCBT memiliki banyak fitur baru jika dibandingkan dengan TCExam original. Selain itu TMFCBT banyak melakukan peningkatan dari sisi kinerja aplikasi dan tampilan.</span><br/><hr/>'.K_NEWLINE;
echo '<span id="tcexam-desc">'.$l['d_tcexam_desc'].'</span>'.K_NEWLINE;

echo '<ul class="credits">'.K_NEWLINE;
//echo '<li><strong>'.$l['w_author'].':</strong> Nicola Asuni</li>'.K_NEWLINE;
//echo '<li><strong>Copyright:</strong><br /> (c) 2004-2020 Nicola Asuni - Tecnick.com LTD<br />'.K_NEWLINE;
//echo '<a href="mailto:info@tecnick.com">info@tecnick.com</a> - '.K_NEWLINE;
//echo '<a href="http://www.tecnick.com" title="'.$l['m_new_window_link'].'">www.tecnick.com</a></li>'.K_NEWLINE;
//echo '<li><strong>'.$l['w_license'].':</strong> <a href="../../LICENSE.TXT" title="'.$l['m_new_window_link'].'">LICENSE.TXT</a></li>'.K_NEWLINE;
echo '</ul>'.K_NEWLINE;

//echo '<h2>'.$l['t_third_parties'].'</h2>'.K_NEWLINE;

//echo '<p>TCExam includes some third-party software components that are not strictly required but have been included as you convenience, and if used are subject to their respective licenses.</p>'.K_NEWLINE;

echo '<ul class="credits">'.K_NEWLINE;


echo '</ul>'.K_NEWLINE;

echo '</div>'.K_NEWLINE;

echo '<br />'.K_NEWLINE;

// display credit logos
echo '<div class="creditslogos m-3 text-center">'.K_NEWLINE;
//echo '<a href="http://www.tcexam.org/license.php"><img src="../../images/credits/agplv3-88x31.png" alt="TCExam License" width="88" height="31" style="border:none;" /></a>'.K_NEWLINE;
//echo '<a href="http://www.php.net"><img src="../../images/credits/poweredby_php_88x31.png" alt="Powered by PHP" width="88" height="31" /></a>'.K_NEWLINE;
//echo '<a href="http://www.mysql.com"><img src="../../images/credits/poweredbymysql_88x31.png" alt="Powered by MySQL" width="88" height="31" /></a>'.K_NEWLINE;
//echo '<a href="http://www.postgresql.org"><img src="../../images/credits/poweredbypgsql_88x31.png" alt="Powered by PostgreSQL" width="88" height="31" /></a>'.K_NEWLINE;
//echo '<a href="http://validator.w3.org/check?uri='.K_PATH_HOST.$_SERVER['SCRIPT_NAME'].'" title="This Page Is Valid XHTML 1.0 Strict!"><img src="../../images/credits/w3c_xhtml10_88x31.png" alt="Valid XHTML 1.0!" height="31" width="88" style="border:none;" /></a>'.K_NEWLINE;
//echo '<a href="http://jigsaw.w3.org/css-validator/" title="This document validates as CSS!"><img src="../../images/credits/w3c_css_88x31.png" alt="Valid CSS1!" height="31" width="88" style="border:none;" /></a>'.K_NEWLINE;
//echo '<a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" title="Explanation of Level Triple-A Conformance"><img src="../../images/credits/w3c_wai_aaa_88x31.png" alt="Level Triple-A conformance icon, W3C-WAI Web Content Accessibility Guidelines 1.0" width="88" height="31" style="border:none;" /></a>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;
echo '</div>'.K_NEWLINE;

require_once('tce_page_footer.php');

//============================================================+
// END OF FILE
//============================================================+
