<?php

use Http\HttpRequest;

$app = new HttpRequest($_SERVER["REQUEST_METHOD"],$_SERVER["REQUEST_URI"]);



$app->WildCardRoute($_SERVER["REQUEST_URI"]);