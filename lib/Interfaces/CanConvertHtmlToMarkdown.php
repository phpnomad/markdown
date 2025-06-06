<?php

namespace PHPNomad\Markdown\Interfaces;

interface CanConvertHtmlToMarkdown
{
    /**
     * Convert HTML to markdown
     */
    public function toMarkdown(string $html): string;
}