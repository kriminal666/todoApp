<?php namespace todoApp;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

    protected $fillable = array('title', 'done');

}
