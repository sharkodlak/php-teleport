<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport\Edge;

use Sharkodlak\Teleport\interfaces\Comparator;
use Sharkodlak\Teleport\interfaces\Edge;
use Sharkodlak\Teleport\interfaces\EdgeProperties;
use Sharkodlak\Teleport\interfaces\Node;
use Sharkodlak\Teleport\interfaces\Way;
use Sharkodlak\Teleport\interfaces\WayFactory;

class OneWay implements Edge {
	public function __construct(
		private Node $start,
		private Node $end,
		private EdgeProperties $properties,
		private WayFactory $wayFactory,
	) {}

	public function getWayFrom(Node $a, Comparator $comparator): ?Way {
		if ($a !== $this->start) {
			return null;
		}

		return $this->wayFactory->getInstance($this->end, $this->properties);
	}

	public function setProperties(EdgeProperties $properties): self {
		$this->properties = $properties;
		return $this;
	}
}