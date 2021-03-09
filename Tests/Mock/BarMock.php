<?php

namespace SoureCode\Bundle\Common\Tests\Mock;

use SoureCode\Component\Common\Model\ResourceInterface;

class BarMock implements ResourceInterface
{
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
