<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Algorithm;

use Jose\Objects\JWKInterface;

/**
 * This interface is used by algorithms that have capabilities to sign data and verify a signature.
 */
interface SignatureAlgorithmInterface extends JWAInterface
{
    /**
     * Sign the input.
     *
     * @param \Jose\Objects\JWKInterface $key   The private key used to sign the data
     * @param string                    $input The input
     *
     * @return string
     *@throws \Exception If key does not support the algorithm or if the key usage does not authorize the operation
     *
     */
    public function sign(JWKInterface $key, $input);

    /**
     * Verify the signature of data.
     *
     * @param \Jose\Objects\JWKInterface $key       The private key used to sign the data
     * @param string                    $input     The input
     * @param string                    $signature The signature to verify
     *
     * @return bool
     *@throws \Exception If key does not support the algorithm or if the key usage does not authorize the operation
     *
     */
    public function verify(JWKInterface $key, $input, $signature);
}
