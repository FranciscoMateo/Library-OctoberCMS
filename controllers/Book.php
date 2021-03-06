<?php namespace Fmateo\Library\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use fmateo\library\Models\Author ;

/**
 * Book Back-end Controller
 */
class Book extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
	    'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
	public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Fmateo.Library', 'library', 'book');
    }
}
