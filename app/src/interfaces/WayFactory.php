<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport\interfaces;

interface WayFactory {
	public function getInstance(Node $node, EdgeProperties $edgeProperties): Way;
}