<?php

namespace other\other\other {
	class ContainerMaker {
		public function make(): Container {
			return new Container();
		}
	}

	class Container {
		public $dummy;
		public function get(string $class): ItemInterface {
			return $this->dummy[$class];
		}
	}

	interface ItemInterface	{}

	class Item implements ItemInterface	{
		public $item_property;
	}

	class AnotherItem implements ItemInterface {}

	class HolderParameters {
		public $container;
	}
}