<?php

use Kirby\Cms\Page;
use Kirby\Cms\Url;


class DefaultPage extends Page
{
    /**
     * Returns the relative path to use fo hx requests
     */
    public function hxPath(): string
    {
        return "/" . Url::path($this->url());
    }
}
