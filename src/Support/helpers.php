<?php

if ( ! function_exists('cms_trans')) {

    /**
     * Translate the given message using CMS translations.
     *
     * Falls back to application translations if CMS does not have the key.
     *
     * @param  string  $id
     * @param  array   $parameters
     * @param  string  $domain
     * @param  string  $locale
     * @return \Symfony\Component\Translation\TranslatorInterface|string
     */
    function cms_trans($id = null, $parameters = [], $domain = 'messages', $locale = null)
    {
        /** @var \Illuminate\Translation\Translator $translator */
        $translator = app('translator');

        if (is_null($id)) {
            return $translator;
        }

        $key = 'cms::' . $id;

        // Fall back to non-cms translation if unavailable for CMS
        if ( ! $translator->has($key)) {
            $key = $id;
        }

        return $translator->trans($key, $parameters, $domain, $locale);
    }
}

if ( ! function_exists('cms_trans_choice')) {

    /**
     * Translates the given message based on a count using CMS-translations.
     *
     * Falls back to application translations if CMS does not have the key.
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
        /** @var \Illuminate\Translation\Translator $translator */
        $translator = app('translator');

        $key = 'cms::' . $id;

        // Fall back to non-cms translation if unavailable for CMS
        if ( ! $translator->has($key)) {
            $key = $id;
        }

        return app('translator')->transChoice($key, $number, $parameters, $domain, $locale);
    }
}
