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
 * local pages
 *
 * @package     local_entities
 * @author      Thomas Winkler
 * @copyright   2021 Wunderbyte GmbH
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_entities;

use stdClass;

defined('MOODLE_INTERNAL') || die;

/**
 * Class entity
 * @author      Thomas Winkler
 * @copyright   2021 Wunderbyte GmbH
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class entities {

    /**
     * entities constructor.
     */
    public function __construct() {
    }

    /**
     *
     * This is to return all entities from the database
     *
     * @return array Object
     */
    public static function list_all_entities(): array {
        global $DB;
        return $DB->get_records_sql("SELECT * FROM {local_entities} ORDER BY sortorder");
    }

    /**
     *
     * This is to return all children from parententity the database
     *
     * @return array - returns array of Objects
     */
    public static function list_all_subentities(int $parentid): array {
        global $DB;
        return $DB->get_records_sql("SELECT * FROM {local_entities} WHERE " .
        "parentid=? ORDER BY sortorder", array($parentid));
    }


    /**
     *
     * This is to return all categories and fields from the database
     *
     * @return Object
     */
    public function get_categories() {
        $categories = new stdClass;
        return $categories;
    }

    /**
     *
     * This is to set categories and fields from the database
     *
     * @return Object
     */
    public function set_categories() {
        $categories = new stdClass;
        return $categories;
    }
}
