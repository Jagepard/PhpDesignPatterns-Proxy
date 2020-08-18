#! usr/bin/env php
<?php

namespace Structural\Proxy;

require_once "vendor/autoload.php";

$subject = new Subject();

$subject->setItem("key1", "value1");
$subject->setItem("key2", "value2");
$subject->setItem("key3", "value3");

printf("%s\n%s\n", "Subject: ", print_r($subject->getArray(), true));

$proxy  = new JsonProxy();

$proxy->setItem("key1", "value1");
$proxy->setItem("key2", "value2");
$proxy->setItem("key3", "value3");

printf("%s\n%s\n", "JsonProxy: ", $proxy->getJson());
