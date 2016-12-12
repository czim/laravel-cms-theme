# CMS for Laravel - Theme Package

Simple default theme package to use with the CMS Core.
This is a simple web-based bootstrap setup, not recommended for more than demonstrative purposes.


## Installation

Add the service provider to the `cms-core.php` config (*NOT* your `app.php` config!):

``` php
    'providers' => [
        // ...
        \Czim\CmsTheme\CmsThemeServiceProvider::class,
    ],
```

To publish the assets for the CMS theme:

``` bash
php artisan vendor:publish
```


## Compiling assets

An Elixir setup is provided for compiling the assets for the CMS.
The output directory for this process is `resources/assets/build`.

To compile css and javascript, you can run

``` bash
npm install
gulp --production
```

... in the base directory of this repository.
 

## Plugins and scripts used

- [CKEditor](http://ckeditor.com)
- [Bootstrap datetime picker](https://github.com/Eonasdan/bootstrap-datetimepicker)
- [MomentJS](http://momentjs.com) with locales
- [Featherlight](http://noelboss.github.io/featherlight)
- [jQuery sortable](http://johnny.github.com/jquery-sortable)
- [Multiselect with two sides](http://crlcu.github.io/multiselect) ([documentation](http://crlcu.github.io/multiselect/examples/zero-configuration.html))


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-contributors]: ../../contributors
