<?php

namespace Deployer;

/**
 * Helper functions for defining tasks.
 */

function artisan($command, $showOutput = false) {
    return function() use ($command, $showOutput) {
        $output = run("{{bin/php}} {{release_path}}/artisan $command");
        
        if ($showOutput) {
            writeln("<info>$output</info>");
        }
    };
}

/**
 * Set up default values for our options.
 */

set('lumen', false);