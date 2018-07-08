<?php namespace Mohsin\RepeaterBug\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_repeaterbug_projects';

    public function getAwesomenessAttribute($value)
    {
        if(is_null($value))
            return 'Nope!';
    }

    public function getProjectsAttribute($value)
    {
        if(is_null($value))
            return [
                  0 => [
                      'name' => 'Awesomness'
                  ],
                  1 => [
                      'name' => 'And Attractiveness!'
                  ]
              ];
    }
}
