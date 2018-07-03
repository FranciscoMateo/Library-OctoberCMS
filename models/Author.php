<?php namespace Fmateo\Library\Models;

use Model;

/**
 * Author Model
 */
class Author extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'fmateo_library_authors';

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
	    'book' => [
		    '\fmateo\library\models\book',
		    'table' => 'fmateo_library_book_author',
		    'key'   => 'author_id',
		    'otherKey' => 'book_id'
	    ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
