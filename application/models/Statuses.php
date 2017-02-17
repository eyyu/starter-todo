<?php

/**
 * Stautses Model statuses for  table in the database
 *
 * @author eva
 */

class Statuses extends MY_Model {

        public function __construct()
        {
                parent::__construct('statuses', 'id');
        }
}