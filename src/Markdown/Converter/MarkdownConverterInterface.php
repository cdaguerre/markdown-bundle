<?php

namespace Markdown\Converter;

interface MarkdownConverterInterface
{
    /**
     * Convert HTML to markdown
     *
     * @param string $html
     *
     * @return string
     */
    public function htmlToMarkdown($html);

    /**
     * Convert markdown to HTML
     *
     * @param string $markdown
     *
     * @return string
     */
    public function markdownToHtml($markdown);
}
