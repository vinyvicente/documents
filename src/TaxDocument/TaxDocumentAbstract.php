<?php

namespace TaxDocument;

/**
 * Class TaxDocumentAbstract
 * @package TaxDocument
 *
 * @author Vinicius V. de Oliveira <vinicius.vicente@gmail.com>
 */
abstract class TaxDocumentAbstract
{
    /**
     * @param string $value
     *
     * @return bool
     */
    abstract public function isValid($value);
} 