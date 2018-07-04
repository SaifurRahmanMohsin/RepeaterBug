<?php namespace Mohsin\RepeaterBug;

use Backend;
use System\Classes\PluginBase;

/**
 * RepeaterBug Plugin Information File
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
            'name'        => 'RepeaterBug',
            'description' => 'No description provided yet...',
            'author'      => 'Mohsin',
            'icon'        => 'icon-leaf'
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
            'Mohsin\RepeaterBug\Components\MyComponent' => 'myComponent',
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
            'mohsin.repeaterbug.some_permission' => [
                'tab' => 'RepeaterBug',
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
        return [
            'projects' => [
                'label'       => 'RepeaterBug',
                'url'         => Backend::url('mohsin/repeaterbug/projects/create'),
                'icon'        => 'icon-leaf',
                'permissions' => ['mohsin.repeaterbug.*'],
                'order'       => 500,
            ],
        ];
    }
}
