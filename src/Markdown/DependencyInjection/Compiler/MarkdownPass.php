<?php

namespace Markdown\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;

class MarkdownPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $interface = 'Markdown\Converter\MarkdownConverterInterface';
        $converterClass = $container->getParameter('markdown.converter.class');

        if (!in_array($interface, class_implements($converterClass))) {
            throw new InvalidArgumentException(sprintf(
                'The class "%s" must implement "%s".',
                $converterClass,
                $interface
            ));
        }
    }
}
