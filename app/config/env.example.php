<?php

/**
 * Environment specific application configuration.
 *
 * You should store all secret information (username, password, tokens, private keys) here.
 *
 * Make sure the env.php file is added to your .gitignore,
 * so it is not checked-in the code
 *
 * Place the env.php _outside_ the project root directory, to protect against
 * overwriting at deployment.
 *
 * This usage ensures that no sensitive passwords or API keys will
 * ever be in the version control history so there is less risk of
 * a security breach, and production values will never have to be
 * shared with all project collaborators.
 */

return function (array $settings): array {
    // Database credentials
    // $settings['db']['username'] = 'root';
    // $settings['db']['password'] = '';

    // Docker example
    if (isset($_ENV['DOCKER'])) {
       $settings['db']['host'] = $_ENV['POSTGRES_HOST'] ?? 'pdf-api-postgres';
       $settings['db']['port'] = $_ENV['POSTGRES_PORT'] ?? '5432';
       $settings['db']['username'] = $_ENV['POSTGRES_USER'] ?? 'password';
       $settings['db']['password'] = $_ENV['POSTGRES_PASSWORD'] ?? 'postgress';
    }

    return $settings;
};
