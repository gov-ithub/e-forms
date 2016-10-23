<?php

/*
 * Copyright (c) 2016 GovITHub
 *
 * This source file is subject to the license that is bundled with this source
 * code in the LICENSE.md file. All rights are reserved to authors specified in
 * the AUTHORS.md file.
 */

namespace EForms\Bundle\BuilderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('eforms_builder');

        return $treeBuilder;
    }
}
