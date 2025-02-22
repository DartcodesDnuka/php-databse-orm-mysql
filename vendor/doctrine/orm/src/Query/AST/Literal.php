<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

class Literal extends Node
{
    public const STRING  = 1;
    public const BOOLEAN = 2;
    public const NUMERIC = 3;

    /**
     * @var int
     * @phpstan-var self::*
     */
    public $type;

    /** @var mixed */
    public $value;

    /**
     * @param int   $type
     * @param mixed $value
     * @phpstan-param self::* $type
     */
    public function __construct($type, $value)
    {
        $this->type  = $type;
        $this->value = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function dispatch($walker)
    {
        return $walker->walkLiteral($this);
    }
}
