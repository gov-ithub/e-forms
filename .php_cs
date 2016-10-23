<?php

$header = <<<EOF
Copyright (c) 2016 GovITHub

This source file is subject to the license that is bundled with this source
code in the LICENSE.md file. All rights are reserved to authors specified in
the AUTHORS.md file.
EOF;
Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(array(__DIR__.'/src/', __DIR__.'/tests/'))
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(array(
        'psr2',
        'symfony',
        'header_comment',

        'short_array_syntax',
        'phpdoc_order',
        'ordered_use',
    ))
    ->setUsingCache(false)
    ->finder($finder)
;
