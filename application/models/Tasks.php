<?php

/**
 * Tasks Model for Tasks table in the database
 *
 * @author eva
 */

class Tasks extends MY_Model {

        public function __construct()
        {
                parent::__construct('tasks', 'id');
        }
}