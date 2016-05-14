<?php

namespace App;

use Moloquent;

class Book extends Moloquent {
    protected $collection = 'book_collection';
    protected $connection = 'mongodb';
    

}
