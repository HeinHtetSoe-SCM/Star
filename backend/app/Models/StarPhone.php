<?php
namespace App\Models;

use Franzose\ClosureTable\Models\Entity;

class StarPhone extends Entity
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'star_phones';

    /**
     * ClosureTable model instance.
     *
     * @var \App\StarPhoneClosure
     */
    protected $closure = 'App\Models\StarPhoneClosure';
}
