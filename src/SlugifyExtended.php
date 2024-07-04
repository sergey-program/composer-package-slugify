<?php

use Cocur\Slugify\Slugify;

class SlugifyExtended extends Slugify
{
    /**
     * Return count of slugify result string.
     *
     * @param string $string
     * @param array|string|null $options
     * @return int
     */
    public function slugifyCount(string $string, array|string|null $options = null): int
    {
        $result = $this->slugify($string, $options);

        return strlen($result);
    }
}
