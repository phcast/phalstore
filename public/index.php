<?php

use App\Library\Bootstrap;

try {
    require __DIR__.'/../bootstrap/autoloader.php';
    
    $bootstrap = new Bootstrap();
    
    echo $bootstrap->run();
    
}catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}