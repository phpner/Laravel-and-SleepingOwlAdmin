<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{
     protected $widgets = [
        \App\Admin\Widgets\AdminMenu::class,
    ];

	/**
	 * Register sections.
	 *
	 * @return void
	 */
    protected $sections = [
        \App\User::class => 'App\Http\Sections\Users',
        \App\Page::class => 'App\Http\Sections\Pages',
    ];

	/**
	 * @param \SleepingOwl\Admin\Admin $admin
	 */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
	    // Регистрация виджетов в реестре
	    /** @var WidgetsRegistryInterface $widgetsRegistry */
	    $widgetsRegistry = $this->app[\SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface::class];

	    foreach ($this->widgets as $widget)
	    {
		    $widgetsRegistry->registerWidget($widget);
	    }

	    $this->loadViewsFrom( base_path( "/resources//views/admin" ), 'admin' );

        parent::boot($admin);
    }
}
