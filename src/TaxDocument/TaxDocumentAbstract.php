<?php

namespace TaxDocument;

/**
 * Class TaxDocumentAbstract
 * @package TaxDocument
 */
abstract class TaxDocumentAbstract
{
    /**
     * @param string $value
     * @return bool
     */
    abstract public function isValid($value);
} 