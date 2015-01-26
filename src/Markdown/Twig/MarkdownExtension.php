<?php

namespace Markdown\Twig;

class MarkdownExtension extends \Twig_Extension
{
    /**
     * @var string
     */
    protected $converterClass;

    public function __construct($class)
    {
        $this->converterClass = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFilter('html_to_md', array($this, 'htmlToMarkdown'), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('md_to_html', array($this, 'markdownToHtml'), array('is_safe' => array('html'))),
        );
    }

    /**
     * Convert HTML to Markdown
     *
     * @param string $html
     *
     * @return string
     */
    public function htmlToMarkdown($html)
    {
        $converterClass = $this->converterClass;

        return $class::htmlToMarkdown($html);
    }

    /**
     * Convert Markdown to HTML
     *
     * @param string $markdown
     *
     * @return string
     */
    public function markdownToHtml($markdown)
    {
        $converterClass = $this->converterClass;

        return $converterClass::markdownToHtml($markdown);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'markdown';
    }
}
