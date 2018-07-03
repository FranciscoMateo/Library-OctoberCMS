<?php namespace Fmateo\Library\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Book Back-end Controller
 */
class Book extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Fmateo.Library', 'library', 'book');
    }
}
