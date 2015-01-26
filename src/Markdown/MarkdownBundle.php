<?php

namespace Markdown;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Markdown\DependencyInjection\Compiler\MarkdownPass;

class MarkdownBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new MarkdownPass());
    }
}
