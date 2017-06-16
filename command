#!/usr/bin/env php
<?php

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

require __DIR__.'/bootstrap/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$app->command('hello [--name=] message', function (
    OutputInterface $output,
    \League\Skeleton\SkeletonClass $skel,
    $name, $message) use ($app) {

    $output->writeln("\nRunning your command\n");

    try {
        $message = $skel->echoPhrase($name, $message);
        $output->writeln($message);
        $output->writeln("<info>$name</info>");
        $output->writeln("<error>$name</error>");
        $output->writeln("<question>$name</question>\n");

    } catch (\Exception $e) {
        $output->writeln(sprintf(
            "<error>Error</error>\n MESSAGE: %s\n",
            $e->getMessage()
        ));
    }

})->defaults([
    'name' => "World"
])->descriptions("Hello NAME and a message",
    [
        '--name' => "Who is the message to",
        "message" => "What do you want to say?"
    ]
);

$app->run();