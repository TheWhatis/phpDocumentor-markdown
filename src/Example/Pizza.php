<?php

namespace PhpDocumentorMarkdown\Example;

use JsonSerializable;
use PhpDocumentorMarkdown\Example\Pizza\Base;

/**
 * A pizza.
 *
 * some description see {@see Manyinterfaces}
 */
class Pizza extends AbstractProduct implements ProductInterface, JsonSerializable
{
    use ReviewableTrait;

    /**
     * Product name.
     *
     * @var string
     */
    private string $name;

    /**
     * Product price.
     *
     * @var float
     */
    protected float $price;

    /**
     * Pizza base.
     *
     * Propberty base description {@see ManyInterfaces}
     *
     * @var Base|null
     */
    protected ?Base $base;

    /**
     * Construct title
     *
     * Construct description {@see ManyInterfaces}
     *
     * @param  string  $name  Product name.
     * @param  float  $price  Product price.
     * @param  Base|null  $base  Pizza base.
     */
    public function __construct(string $name, float $price, ?Base $base = null)
    {
        $this->name  = $name;
        $this->price = $price;
        $this->base  = $base;
    }

    /**
     * Get the name of the product.
     *
     * @return string The name of the product.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the price of the product.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
