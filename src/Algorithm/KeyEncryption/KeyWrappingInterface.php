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

interface KeyWrappingInterface extends KeyEncryptionAlgorithmInterface
{
    /**
     * Encrypt the CEK.
     *
     * @param \Jose\Objects\JWKInterface $key                The key used to wrap the CEK
     * @param string                    $cek                The CEK to encrypt
     * @param array                     $complete_headers   The complete header of the JWT
     * @param array                     $additional_headers The complete header of the JWT
     *
     * @return string The encrypted CEK
     *@throws \Exception If key does not support the algorithm or if the key usage does not authorize the operation
     *
     */
    public function wrapKey(JWKInterface $key, $cek, array $complete_headers, array &$additional_headers);

    /**
     * Decrypt de CEK.
     *
     * @param \Jose\Objects\JWKInterface $key              The key used to wrap the CEK
     * @param string                    $encrypted_cek    The CEK to decrypt
     * @param array                     $complete_headers The complete header of the JWT
     *
     * @return string The decrypted CEK
     *@throws \Exception If key does not support the algorithm or if the key usage does not authorize the operation
     *
     */
    public function unwrapKey(JWKInterface $key, $encrypted_cek, array $complete_headers);
}
