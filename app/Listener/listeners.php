<?php

/** @var Binding $binding */
use Minute\Event\Binding;
use Minute\Event\TodoEvent;
use Minute\Todo\BonusTodo;

$binding->addMultiple([
    //tasks
    ['event' => TodoEvent::IMPORT_TODO_ADMIN, 'handler' => [BonusTodo::class, 'getTodoList']],
]);