<?php

namespace Markdown\Converter;

use HTML_To_Markdown;
use Michelf\MarkdownExtra;

class MarkdownConverter implements MarkdownConverterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function htmlToMarkdown($html)
    {
        $markdown = new HTML_To_Markdown($html);

        return $markdown->output();
    }

    /**
     * {@inheritdoc}
     */
    public static function markdownToHtml($markdown)
    {
        $html = MarkdownExtra::defaultTransform($markdown);

        return $html;
    }
}
