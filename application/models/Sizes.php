<?php

/**
 * Sizes Model for Sizes table in the database
 *
 * @author eva
 */

class Sizes extends MY_Model {

        public function __construct()
        {
                parent::__construct('sizes', 'id');
        }
}