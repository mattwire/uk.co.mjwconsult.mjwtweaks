<?php
/*--------------------------------------------------------------------+
 | CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2017                                |
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
 +-------------------------------------------------------------------*/

return [
  'mjwtweaks_display_hidenotyoumessage' => [
    'admin_group' => 'mjwtweaks_display',
    'admin_grouptitle' => 'Display Settings',
    'admin_groupdescription' => 'Tweaks for display.',
    'group_name' => 'MJWTweaks Settings',
    'group' => 'mjwtweaks',
    'name' => 'mjwtweaks_display_hidenotyoumessage',
    'type' => 'Boolean',
    'add' => '5.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => FALSE,
    'description' => 'Hide the "Not You" message/link on Contribution/Event Registration pages',
    'html_type' => 'Checkbox',
    'html_attributes' => [],
  ],
  'mjwtweaks_display_disableshoreditchtweaks' => [
    'admin_group' => 'mjwtweaks_display',
    'group_name' => 'MJWTweaks Settings',
    'group' => 'mjwtweaks',
    'name' => 'mjwtweaks_display_disableshoreditchtweaks',
    'type' => 'Boolean',
    'add' => '5.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => FALSE,
    'description' => 'Disable loading the shoreditch.css customisations included in this extension.',
    'html_type' => 'Checkbox',
    'html_attributes' => [],
  ],
];