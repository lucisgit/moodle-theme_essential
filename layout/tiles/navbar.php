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
 * Essential is a clean and customizable theme.
 *
 * @package     theme_essential
 * @copyright   2017 Gareth J Barnard
 * @copyright   2016 Gareth J Barnard
 * @copyright   2014 Gareth J Barnard, David Bezemer
 * @copyright   2013 Julian Ridden
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

?>
    <nav id="essentialnavbar" role="navigation" class="moodle-has-zindex<?php echo ($oldnavbar) ? ' oldnavbar' : '';  echo ($haslogo) ? ' logo' : ' nologo';?>">
        <?php
        // Course search for main header.
        $courserenderer = $PAGE->get_renderer('core', 'course');
        echo $OUTPUT->box($courserenderer->course_search_form(), 'coursesearch');
        ?>
        <div class="navbar">
            <div class="container-fluid navbar-inner">
                <div class="row-fluid">
                    <div class="custommenus pull-left">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target="#essentialmenus">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <?php echo $OUTPUT->get_title('navbar'); ?>
                    <div class="pull-right">
                        <?php echo $OUTPUT->custom_menu_week_name(); ?>
                        <?php echo $OUTPUT->custom_menu_activitystream(); ?>
                        <?php echo $OUTPUT->custom_menu_courses(); ?>
                        <div class="usermenu navbarrightitem">
                            <?php echo $OUTPUT->custom_menu_user(); ?>
                        </div>
                        <div class="messagemenu navbarrightitem">
                            <?php echo $OUTPUT->navbar_plugin_output(); ?>
                        </div>
                        <div class="gotobottommenu navbarrightitem">
                            <?php echo $OUTPUT->custom_menu_goto_bottom(); ?>
                        </div>
                        <?php echo $OUTPUT->context_header_settings_menu(); ?>
                        <?php echo $OUTPUT->region_main_settings_menu(); ?>
                        <div id="custom_menu_editing" class="navbarrightitem">
                            <?php echo $OUTPUT->custom_menu_editing(); ?>
                        </div>
                        <div class="navbarrightitem">
                            <?php echo $OUTPUT->search_box(); ?>
                        </div>
                    </div>
                        <div id='essentialmenus' class="nav-collapse collapse">
                            <div class="pull-left">
                                <?php echo $OUTPUT->custom_menu_language(); ?>
                            </div>
                            <?php
                            if ($colourswitcher) {
                                echo $OUTPUT->custom_menu_themecolours();
                            }
                            echo $OUTPUT->custom_menu();
                            // Course search for custom menu.
                            $courserenderer = $PAGE->get_renderer('core', 'course');
                            echo $OUTPUT->box($courserenderer->course_search_form('', 'short'), 'coursesearch');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
