<?php
namespace Czim\CmsTheme\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Czim\CmsTheme\Contracts\Menu\MenuInterface;

class MenuComposer
{

    /**
     * @var MenuInterface
     */
    protected $menu;

    /**
     * @param MenuInterface $menu
     */
    public function __construct(MenuInterface $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with(
            $this->menu->composeMenuVariables()
        );
    }

}
