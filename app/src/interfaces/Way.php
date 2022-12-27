<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport\interfaces;

interface Way {
	public function getNode(): Node;

	public function getWeight(Comparator $comparator): int|float|null;
}