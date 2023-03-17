<?php

use App\Kernel;

require_once __DIR__ . '/src/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
