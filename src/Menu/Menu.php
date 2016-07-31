<?php
namespace Czim\CmsTheme\Menu;

use Czim\CmsCore\Contracts\Menu\MenuRepositoryInterface;
use Czim\CmsTheme\Contracts\Menu\MenuInterface;

class Menu implements MenuInterface
{

    /**
     * @var MenuRepositoryInterface
     */
    protected $repository;

    /**
     * @param MenuRepositoryInterface $repository
     */
    public function __construct(MenuRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return MenuRepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }


    /**
     * Returns variables prepared for the menu partial view.
     *
     * @return array
     */
    public function composeMenuVariables()
    {
        return [
            'menu' => $this->repository,
        ];
    }

    /**
     * Returns variables prepared for the top/header partial view.
     *
     * @return array
     */
    public function composeTopVariables()
    {
        return [
            'menu' => $this->repository,
        ];
    }

}
