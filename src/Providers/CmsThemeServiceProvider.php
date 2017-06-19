<?php
namespace Czim\CmsTheme\Providers;

use Czim\CmsCore\Contracts\Core\CoreInterface;
use Czim\CmsCore\Support\Enums\Component;
use Czim\CmsTheme\Contracts\Menu\MenuInterface;
use Czim\CmsTheme\Http\ViewComposers\MenuComposer;
use Czim\CmsTheme\Http\ViewComposers\TopComposer;
use Czim\CmsTheme\Menu\Menu;
use Illuminate\Support\ServiceProvider;

class CmsThemeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->bootConfig()
             ->loadTranslations();
    }

    public function register()
    {
        $this->registerConfig()
             ->registerMenu()
             ->loadViews()
             ->registerViewComposers()
             ->publishAssets();
    }

    /**
     * @return $this
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            realpath(dirname(__DIR__) . '/../config/cms-theme.php'),
            'cms-theme'
        );

        return $this;
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
            realpath(dirname(__DIR__)) . '/../resources/assets/build' => public_path('_cms'),
            realpath(dirname(__DIR__)) . '/../resources/assets/img'   => public_path('_cms/img'),
            realpath(dirname(__DIR__)) . '/../resources/lang'         => base_path('resources/lang/vendor/cms'),
        ], 'assets');

        return $this;
    }

    /**
     * @return $this
     */
    protected function bootConfig()
    {
        $this->publishes([
            realpath(dirname(__DIR__) . '/../config/cms-theme.php') => config_path('cms-theme.php'),
        ]);

        return $this;
    }

    /**
     * Registers routes for the entire CMS.
     *
     * @return $this
     */
    protected function registerViewComposers()
    {
        $core = $this->getCore();

        view()->composer($core->config('views.menu'), MenuComposer::class);
        view()->composer($core->config('views.top'), TopComposer::class);

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
