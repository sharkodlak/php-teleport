<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport\interfaces;

interface Edge {
	public function setProperties(EdgeProperties $properties): self;

	public function getWayFrom(Node $a, Comparator $comparator): ?Way;
}