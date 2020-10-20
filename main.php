<?php

use other\other\other\Item;
use other\other\other\ContainerMaker;
use holders\holders\holders\ContainerHolder;

$maker = new ContainerMaker();
$container = $maker->make();

$item1 = $container->get(Item::class);
echo $item1->item_property;

$holder = new ContainerHolder();
$holder->container = $container;

$item2 = $holder->container->get(Item::class);
echo $item2->item_property;


