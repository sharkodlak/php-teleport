<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport\interfaces;

interface Node {
	public function setProperties(NodeProperties $properties): self;

	public function addEdge(Edge $edge): self;
}