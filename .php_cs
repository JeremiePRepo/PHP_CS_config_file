<?php
 /*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/?version=2.14#configurator
 * you can change this configuration by importing this file.
 */

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR1'                  => true,
        '@PSR2'                  => true,
        '@Symfony'               => true,
        '@Symfony'               => true,
        'yoda_style'             => false,
        'no_unused_imports'      => false,
        'phpdoc_no_empty_return' => false,
        'binary_operator_spaces' => array(
            'operators' => [
                '='  => 'align_single_space_minimal',
                '=>' => 'align_single_space_minimal',
                '??' => 'align_single_space_minimal',
            ],
        ),
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    );
