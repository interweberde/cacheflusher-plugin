<?php namespace Interweber\CacheFlusher;

use Backend;
use System\Classes\PluginBase;
use Interweber\CacheFlusher\ReportWidgets\CacheFlusher;

/**
 * CacheFlusher Plugin Information File
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
            'name'        => 'CacheFlusher',
            'description' => 'No description provided yet...',
            'author'      => 'Interweber',
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
            'Interweber\CacheFlusher\Components\MyComponent' => 'myComponent',
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
            'interweber.cacheflusher.some_permission' => [
                'tab' => 'CacheFlusher',
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
            'cacheflusher' => [
                'label'       => 'CacheFlusher',
                'url'         => Backend::url('interweber/cacheflusher/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['interweber.cacheflusher.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerReportWidgets()
    {
        return [
            CacheFlusher::class => [
                'label' => 'Cache zurücksetzen',
                'context' => 'dashboard',
            ],
        ];
    }
}
