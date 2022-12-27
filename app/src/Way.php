<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport;

use Sharkodlak\Teleport\interfaces\Comparator;
use Sharkodlak\Teleport\interfaces\EdgeProperties;
use Sharkodlak\Teleport\interfaces\Node;

class Way implements interfaces\Way {
	public function __construct(
		private Node $end,
		private EdgeProperties $properties,
	) {}

	public function getNode(): Node {
		return $this->end;
	}

	public function getWeight(Comparator $comparator): int|float|null {
		return $comparator->getWeight($this->properties);
	}
}