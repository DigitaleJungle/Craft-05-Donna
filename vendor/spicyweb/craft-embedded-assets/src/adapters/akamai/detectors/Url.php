<?php

namespace spicyweb\embeddedassets\adapters\akamai\detectors;

use Embed\Detectors\Url as BaseUrlDetector;
use Psr\Http\Message\UriInterface;

/**
 * Embed URL detector class for Akamai.
 *
 * @package spicyweb\embeddedassets\adapters\akamai\detectors
 * @author Spicy Web <plugins@spicyweb.com.au>
 * @since 4.0.0
 */
class Url extends BaseUrlDetector
{
    public function detect(): UriInterface
    {
        return $this->extractor->isVimeo()
            ? $this->extractor->getRequest()->getUri()
            : parent::detect();
    }
}
