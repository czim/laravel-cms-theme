<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CMS Header
    |--------------------------------------------------------------------------
    |
    | Customize how the CMS header / logo area appears.
    |
    */

    'header' => [

        // The title to show in the header, if no custom partial has been defined.
        'title' => 'CMS',

        // The view partial to use in place of the CMS header/logo area.
        // If this is set, the title above will only be used if the partial uses it.
        'partial' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | Customize the appearance of pagination links.
    |
    */

    'pagination' => [

        // The view partial to use for rendering paginated results.
        // To use the Laravel default, set this to NULL.
        'partial' => 'cms.layout.partials.pagination',
    ],

];
