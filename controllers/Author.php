<?php namespace Fmateo\Library\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Author Back-end Controller
 */
class Author extends Controller
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

        BackendMenu::setContext('Fmateo.Library', 'library', 'author');
    }
}
