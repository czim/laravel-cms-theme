<?php

if ( ! function_exists('cms_trans')) {

    /**
     * Translate the given message using CMS translations.
     *
     * @param  string  $id
     * @param  array   $parameters
     * @param  string  $domain
     * @param  string  $locale
     * @return \Symfony\Component\Translation\TranslatorInterface|string
     */
    function cms_trans($id = null, $parameters = [], $domain = 'messages', $locale = null)
    {
        if (is_null($id)) {
            return app('translator');
        }

        return app('translator')->trans('cms::' . $id, $parameters, $domain, $locale);
    }
}

if ( ! function_exists('cms_trans_choice')) {

    /**
     * Translates the given message based on a count using CMS-translations.
     *
     * @param  string  $id
     * @param  int|array|\Countable  $number
     * @param  array   $parameters
     * @param  string  $domain
     * @param  string  $locale
     * @return string
     */
    function cms_trans_choice($id, $number, array $parameters = [], $domain = 'messages', $locale = null)
    {
        return app('translator')->transChoice('cms::' . $id, $number, $parameters, $domain, $locale);
    }
}
