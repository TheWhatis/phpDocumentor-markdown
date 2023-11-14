<?php

namespace PhpDocumentorMarkdown\Example;

use JsonSerializable;
use PhpDocumentorMarkdown\Example\Pizza\Base;

/**
 * A ManyInterfaces
 */
interface ManyInterfaces extends ProductInterface, JsonSerializable
{
    // ...
}
