<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport;

use Sharkodlak\Teleport\interfaces\EdgeProperties;
use Sharkodlak\Teleport\interfaces\Node;

class WayFactory implements interfaces\WayFactory {
	public function getInstance(Node $node, EdgeProperties $edgeProperties): Way {
		return new Way($node, $edgeProperties);
	}
}