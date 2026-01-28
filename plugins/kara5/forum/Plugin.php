<?php namespace Kara5\Forum;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Forum',
            'description' => 'No description provided yet...',
            'author' => 'Kara5',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Kara5\Forum\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        // return []; // Remove this line to activate

        return [
            'kara5.forum.some_permission' => [
                'tab' => 'Forum',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        // return []; // Remove this line to activate

        return [
            'forum' => [
                'label' => 'Forum',
                'url' => Backend::url('kara5/forum/topics'),
                'icon' => 'icon-leaf',
                'permissions' => ['kara5.forum.*'],
                'order' => 500,

                'sideMenu' => [
                    'topics' => [
                        'label' => 'Topics',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('kara5/forum/topics'),
                        'permissions' => ['kara5.forum.*'],
                    ],
                    'categories' => [
                        'label' => 'Categories',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('kara5/forum/categories'),
                        'permissions' => ['kara5.forum.*'],
                    ],
                    'comments' => [
                        'label' => 'Comments',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('kara5/forum/comments'),
                        'permissions' => ['kara5.forum.*'],
                    ],
                ]
            ],
        ];
    }
}
