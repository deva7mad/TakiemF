<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * CodeIgniter compatible email-library powered by PHPMailer.
 * Version: 1.2.15
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2012-2016.
 * @license The MIT License (MIT), http://opensource.org/licenses/MIT
 * @link https://github.com/ivantcholakov/codeigniter-phpmailer
 *
 * This library is intended to be compatible with CI 2.x and CI 3.x.
 *
 * Tested on CodeIgniter 3.1.2+ (December 9th, 2016) and
 * PHPMailer Version 5.2.17 (December 9th, 2016).
 */

if (version_compare(CI_VERSION, '3.1.0') >= 0) {
    require_once dirname(__FILE__).'/MY_Email_3_1_x.php';
} else {
    require_once dirname(__FILE__).'/MY_Email_3_0_x.php';
}
