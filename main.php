<?php
namespace main\main\main;

use other\other\other\Container;
use other\other\other\ContainerMaker;
use other\other\other\HolderParameters;
use other\other\other\Item;

$maker = new ContainerMaker();
$container = $maker->make();

$item1 = $container->get(Item::class);
echo $item1->item_property;

class ContainerHolder {
	/** @var Container */
	public $container;

	function __construct(HolderParameters $r) {
		$this->container = $r->container;
	}
}

$holder_params = new HolderParameters();
$holder_params->container = $container;

$holder = new ContainerHolder($holder_params);

$item2 = $holder->container->get(Item::class);
echo $item2->item_property;

