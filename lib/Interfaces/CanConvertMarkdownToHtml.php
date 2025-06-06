<?php

namespace PHPNomad\Markdown\Interfaces;

use PHPNomad\Markdown\Exceptions\ConvertToHtmlException;

interface CanConvertMarkdownToHtml
{
    /**
     * Convert markdown to HTML
     * @throws ConvertToHtmlException
     */
    public function toHtml(string $markdown): string;
}
