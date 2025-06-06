<?php

namespace PHPNomad\Markdown\Interfaces;

use PHPNomad\Markdown\Exceptions\ConvertToMarkdownException;

interface CanConvertHtmlToMarkdown
{
    /**
     * Convert HTML to markdown
     * @throws ConvertToMarkdownException
     */
    public function toMarkdown(string $html): string;
}