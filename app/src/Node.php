<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport;

use Sharkodlak\Teleport\interfaces\Edge;
use Sharkodlak\Teleport\interfaces\NodeProperties;

class Node {
	/* Edges to nodes.
	 *
	 * @var Edge[]
	 */
	private array $edges = [];

	public function __construct(
		private NodeProperties $properties,
	) {}

	public function setProperties(NodeProperties $properties): self {
		$this->properties = $properties;
		return $this;
	}

	public function addEdge(Edge $edge): self {
		$this->edges[] = $edge;
		return $this;
	}
}