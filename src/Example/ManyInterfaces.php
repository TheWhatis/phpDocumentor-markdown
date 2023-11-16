<?php

namespace PhpDocumentorMarkdown\Example;

use JsonSerializable;
use PhpDocumentorMarkdown\Example\Pizza\Base;

/**
 * A ManyInterfaces
 *
 * See to {@see AbstractProduct}
 */
interface ManyInterfaces extends ProductInterface, JsonSerializable
{
    // ...
}
