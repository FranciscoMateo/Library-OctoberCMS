<?php namespace Fmateo\Library\Models;

use Model;

/**
 * Book Model
 */
class Book extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'fmateo_library_books';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
	    'author' => [
	    	'\fmateo\library\models\author',
		    'table' => 'fmateo_library_book_author',
		    'key'   => 'book_id',
		    'otherKey' => 'author_id'
		    ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
