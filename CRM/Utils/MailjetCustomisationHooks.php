<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2019                               |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 * Defines the hooks that allow specialized bounce handling
 */
class CRM_Utils_MailjetCustomisationHooks {

  static $null = NULL;

  /**
   * @param $bounce_message
   *
   * @return mixed
   */
  static function handle_transactional_event(&$bounce_message) {

    if (version_compare(CRM_Utils_System::version(), '4.5', '<')) {
      return CRM_Utils_Hook::singleton()->invoke(3, $bounce_message, self::$null, self::$null, self::$null, self::$null, 'civicrm_mailjet_transactional_bounce');
    }
    else {
      return CRM_Utils_Hook::singleton()->invoke(3, $bounce_message, self::$null, self::$null, self::$null, self::$null, self::$null, 'civicrm_mailjet_transactional_bounce');
    }
  }

  /**
   * @param $bounce_message
   *
   * @return mixed
   */
  static function handle_mailing_event(&$bounce_message) {

    if (version_compare(CRM_Utils_System::version(), '4.5', '<')) {
      return CRM_Utils_Hook::singleton()->invoke(3, $bounce_message, self::$null, self::$null, self::$null, self::$null, 'civicrm_mailjet_mailing_bounce');
    }
    else {
      return CRM_Utils_Hook::singleton()->invoke(3, $bounce_message, self::$null, self::$null, self::$null, self::$null, self::$null, 'civicrm_mailjet_mailing_bounce');
    }
  }
}
