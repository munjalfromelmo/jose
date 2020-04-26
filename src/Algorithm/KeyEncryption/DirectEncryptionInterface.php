<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Algorithm\KeyEncryption;

use Jose\Algorithm\KeyEncryptionAlgorithmInterface;
use Jose\Objects\JWKInterface;

interface DirectEncryptionInterface extends KeyEncryptionAlgorithmInterface
{
    /**
     * @param \Jose\Objects\JWKInterface $key The key used to get the CEK
     *
     * @return string The CEK
     *@throws \Exception If key does not support the algorithm or if the key usage does not authorize the operation
     *
     */
    public function getCEK(JWKInterface $key);
}
