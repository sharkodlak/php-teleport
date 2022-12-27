<?php

declare(strict_types = 1);

namespace Sharkodlak\Teleport\interfaces;

interface PathTree {
	public function addChild(Node $parent, Node $child): self;
}