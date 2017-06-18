<?php

/**
 * From Laravel
 * Illuminate/Foundation/helpers.php:444
 */
if(!function_exists('env')) {
    function env($key, $default = null) {
        $value = getenv($key);

        return ($value) ? : $default;
    }
}

if(!function_exists('load_dotenv')) {
    function load_dotenv($path = false, $file_name = ".env.example") {
        $path = ($path) ? : getcwd();

        if(file_exists($path . "/" . $file_name)) {
            $dot = new \Dotenv\Dotenv($path, $file_name);
            $dot->load();
        }
    }
}

if(!function_exists('config')) {
    function config($path = false, $file_name = "config.yml") {
        $path = ($path) ? : getcwd();

        $config = [];

        if(file_exists($path . "/" . $file_name)) {
            /**
             * Get file from path command is run in
             */
            $config_yaml = file_get_contents($path . "/" . $file_name);

            $config = \Symfony\Component\Yaml\Yaml::parse($config_yaml);
        }

        return $config;
    }
}