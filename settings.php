<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Clean theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_standard_clean
 * @copyright udagawa mitsuru
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    
    // Main theme background color setting. 
    $name = 'theme_standard_clean/themebgcolor'; 
    $visiblename = get_string('themebgcolor', 'theme_standard_clean'); 
    $description = get_string('themebgcolordesc', 'theme_standard_clean'); 
    $defaultsetting = '#e1e1df'; 
    $previewconfig = null; 
    $setting = new admin_setting_configcolourpicker($name, $visiblename, $description, $defaultsetting, $previewconfig); 
    $setting->set_updatedcallback('theme_reset_all_caches'); 
    $settings->add($setting); 
    
    // Main theme font color setting. 
    $name = 'theme_standard_clean/themefontcolor'; 
    $visiblename = get_string('themefontcolor', 'theme_standard_clean'); 
    $description = get_string('themefontcolordesc', 'theme_standard_clean'); 
    $defaultsetting = '#000000'; 
    $previewconfig = null; 
    $setting = new admin_setting_configcolourpicker($name, $visiblename, $description, $defaultsetting, $previewconfig); 
    $setting->set_updatedcallback('theme_reset_all_caches'); 
    $settings->add($setting);
    
    // Main theme link color setting. 
    $name = 'theme_standard_clean/themelinkcolor'; 
    $visiblename = get_string('themelinkcolor', 'theme_standard_clean'); 
    $description = get_string('themelinkcolordesc', 'theme_standard_clean'); 
    $defaultsetting = '#0070a8'; 
    $previewconfig = null; 
    $setting = new admin_setting_configcolourpicker($name, $visiblename, $description, $defaultsetting, $previewconfig); 
    $setting->set_updatedcallback('theme_reset_all_caches'); 
    $settings->add($setting);
    
    // Logo file setting.
    $name = 'theme_standard_clean/logo';
    $title = get_string('logo','theme_standard_clean');
    $description = get_string('logodesc', 'theme_standard_clean');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_standard_clean/customcss';
    $title = get_string('customcss', 'theme_standard_clean');
    $description = get_string('customcssdesc', 'theme_standard_clean');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_standard_clean/footnote';
    $title = get_string('footnote', 'theme_standard_clean');
    $description = get_string('footnotedesc', 'theme_standard_clean');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
