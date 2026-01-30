<?php namespace Kara5\ContactForm;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'ContactForm',
            'description' => 'No description provided yet...',
            'author' => 'Kara5',
            'icon' => 'icon-mail-templates'
        ];
    }
    protected function registerMailViews()
    {
        // Lowercase plugin namespace, dot notation
        $this->app['view']->addNamespace(
            'kara5.contactform',
            plugins_path('kara5/contactform')
        );
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
        $this->registerMailViews();
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Kara5\ContactForm\Components\GenericForm' => 'genericForm',
            'Kara5\ContactForm\Components\ContactForm' => 'contactForm'
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        // return []; // Remove this line to activate

        return [
            'kara5.contactform.some_permission' => [
                'tab' => 'ContactForm',
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
            'contactform' => [
                'label' => 'ContactForm',
                'url' => Backend::url('kara5/contactform/forms'),
                'icon' => 'icon-mail-templates',
                'permissions' => ['kara5.contactform.*'],
                'order' => 500,
            ],
        ];
    }
}
