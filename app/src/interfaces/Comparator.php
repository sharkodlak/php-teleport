<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport\interfaces;

interface Comparator {
	public function getWeight(EdgeProperties $properties): int|float|null;
}