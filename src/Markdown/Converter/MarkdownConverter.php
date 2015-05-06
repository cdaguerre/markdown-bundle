<?php

namespace Markdown\Converter;

use HTML_To_Markdown;
use Michelf\MarkdownExtra;

class MarkdownConverter implements MarkdownConverterInterface
{
    /**
     * {@inheritdoc}
     */
    public function htmlToMarkdown($html)
    {
        $markdown = new HTML_To_Markdown($html);

        return $markdown->output();
    }

    /**
     * {@inheritdoc}
     */
    public function markdownToHtml($markdown)
    {
        $html = MarkdownExtra::defaultTransform($markdown);

        return $html;
    }
}
