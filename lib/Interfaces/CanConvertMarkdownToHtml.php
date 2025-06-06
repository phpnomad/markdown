<?php

namespace PHPNomad\Markdown\Interfaces;

interface CanConvertMarkdownToHtml
{
    /**
     * Convert markdown to HTML
     */
    public function toHtml(string $markdown): string;
}
