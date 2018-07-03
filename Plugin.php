<?php namespace Fmateo\Library;

use Backend;
use System\Classes\PluginBase;

/**
 * library Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Library',
            'description' => 'Library system',
            'author'      => 'fmateo',
            'icon'        => 'icon-book'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Fmateo\Library\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'fmateo.library.some_permission' => [
                'tab' => 'library',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'library' => [
                'label'       => 'library',
                'url'         => Backend::url('fmateo/library/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['fmateo.library.*'],
                'order'       => 500,
            ],
        ];
    }
}
