<?php
namespace Czim\CmsTheme\Providers;

use Czim\CmsCore\Contracts\Core\CoreInterface;
use Czim\CmsCore\Support\Enums\Component;
use Czim\CmsTheme\Contracts\Menu\MenuInterface;
use Czim\CmsTheme\Menu\Menu;
use Illuminate\Support\ServiceProvider;

class CmsThemeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadTranslations();
    }

    public function register()
    {
        $this->registerMenu()
             ->loadViews()
             ->publishAssets();
    }

    /**
     * Registers the Menu with the service container.
     *
     * @return $this
     */
    protected function registerMenu()
    {
        $this->app->singleton(MenuInterface::class, Menu::class);

        return $this;
    }

    /**
     * Loads basic CMS views.
     *
     * @return $this
     */
    protected function loadViews()
    {
        $this->loadViewsFrom(
            realpath(dirname(__DIR__) . '/../resources/views'),
            'cms'
        );

        return $this;
    }

    /**
     * @return $this
     */
    protected function loadTranslations()
    {
        $this->loadTranslationsFrom(
            realpath(dirname(__DIR__) . '/../resources/lang'),
            'cms'
        );

        return $this;
    }

    /**
     * @return $this
     */
    protected function publishAssets()
    {
        $this->publishes([
            realpath(dirname(__DIR__)) . '/../resources/assets/build' => public_path('cms'),
            realpath(dirname(__DIR__)) . '/../resources/lang'         => base_path('resources/lang/czim/cms'),
        ], 'assets');

        return $this;
    }

    /**
     * @return CoreInterface
     */
    protected function getCore()
    {
        return app(Component::CORE);
    }

}
