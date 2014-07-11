<?php

namespace TaxDocument;

/**
 * Class Cpf
 * @package TaxDocument
 */
class Cpf extends TaxDocumentAbstract
{
    const DIGITS = 11;

    /**
     * @param string $value
     *
     * @return bool
     */
    public function isValid($value)
    {
        if (!preg_match('/^-?\d+[\.]?\d\d$/', $value)) {
            return false;
        }

        $value = preg_replace('/[^0-9]/', '', $value);

        if (self::DIGITS < strlen($value)) {
            return false;
        }

        return true;
    }
}
