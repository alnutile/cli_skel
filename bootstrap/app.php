<?php


use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;


$app = new Silly\Edition\Pimple\Application();


$app->getContainer()[\League\Skeleton\SkeletonClass::class] = function() {

    return new \League\Skeleton\SkeletonClass();

};


$app->getContainer()['skel'] = $app->getContainer()[\League\Skeleton\SkeletonClass::class];

$app->getContainer()['output'] = function() use ($app) {

    return new Symfony\Component\Console\Output\ConsoleOutput();

};


return $app;