<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport;

use Sharkodlak\Teleport\interfaces\Comparator;
use Sharkodlak\Teleport\interfaces\Node;

class PathWidthFirstIterator implements \Iterator {
	private interfaces\PathTree $pathTree;

	public function __construct(
		private Node $start,
		private Node $end,
		private Comparator $comparator,
	) {}

	public function rewind(): void {
		$this->pathTree = new PathTree($this->start);
	}

	public function current(): Node {
		return $this->pathTree->current();
	}

	public function next(): void {
		$this->pathTree->next();
	}

	public function key(): void {
		$this->pathTree->key();
	}

	public function valid(): bool {
		return $this->current() !== null;
	}
}