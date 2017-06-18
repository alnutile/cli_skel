<?php


use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

load_dotenv();

$app = new Silly\Edition\Pimple\Application();


$app->getContainer()[\Alnutile\Skeleton\Application::class] = function() use ($app) {
    $core = new \Alnutile\Skeleton\Application($app);
    return $core;
};

$app->getContainer()['config'] = function() use ($app) {
    return config();
};

$app->getContainer()[\Alnutile\Skeleton\SkeletonClass::class] = function() use ($app) {
    $skel = new \Alnutile\Skeleton\SkeletonClass();
    return $skel;
};

$app->getContainer()['skel'] = $app->getContainer()[\Alnutile\Skeleton\SkeletonClass::class];


$app->getContainer()['app'] = $app->getContainer()[\Alnutile\Skeleton\Application::class];

$app->getContainer()['output'] = function() use ($app) {

    return new Symfony\Component\Console\Output\ConsoleOutput();

};

return $app;