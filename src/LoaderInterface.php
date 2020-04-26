<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose;

/**
 * Loader Interface.
 */
interface LoaderInterface
{
    /**
     * Load data and try to return a JWSInterface object, a JWEInterface object or a list of these objects.
     * If the result is a JWE (list), nothing is decrypted and method `decrypt` must be executed
     * If the result is a JWS (list), no signature is verified and method `verifySignature` must be executed.
     *
     * @param string $input A string that represents a JSON Web Token message
     *
     * @return \Jose\Objects\JWSInterface|\Jose\Objects\JWEInterface if the data has been loaded
     */
    public function load($input);

    /**
     * @param string                    $input
     * @param \Jose\Objects\JWKInterface $jwk
     * @param string[]                  $allowed_key_encryption_algorithms
     * @param string[]                  $allowed_content_encryption_algorithms
     * @param null|int                  $recipient_index
     *
     * @return \Jose\Objects\JWSInterface|\Jose\Objects\JWEInterface if the data has been loaded
     */
    public function loadAndDecryptUsingKey($input, Objects\JWKInterface $jwk, array $allowed_key_encryption_algorithms, array $allowed_content_encryption_algorithms, &$recipient_index = null);

    /**
     * @param string                       $input
     * @param \Jose\Objects\JWKSetInterface $jwk_set
     * @param string[]                     $allowed_key_encryption_algorithms
     * @param string[]                     $allowed_content_encryption_algorithms
     * @param null|int                     $recipient_index
     *
     * @return \Jose\Objects\JWEInterface if the data has been loaded
     */
    public function loadAndDecryptUsingKeySet($input, Objects\JWKSetInterface $jwk_set, array $allowed_key_encryption_algorithms, array $allowed_content_encryption_algorithms, &$recipient_index = null);

    /**
     * @param string                    $input
     * @param \Jose\Objects\JWKInterface $jwk
     * @param string[]                  $allowed_algorithms
     * @param null|int                  $signature_index
     *
     * @return \Jose\Objects\JWSInterface if the data has been loaded
     */
    public function loadAndVerifySignatureUsingKey($input, Objects\JWKInterface $jwk, array $allowed_algorithms, &$signature_index = null);

    /**
     * @param string                       $input
     * @param \Jose\Objects\JWKSetInterface $jwk_set
     * @param string[]                     $allowed_algorithms
     * @param null|int                     $signature_index
     *
     * @return \Jose\Objects\JWSInterface if the data has been loaded
     */
    public function loadAndVerifySignatureUsingKeySet($input, Objects\JWKSetInterface $jwk_set, array $allowed_algorithms, &$signature_index = null);

    /**
     * @param string                    $input
     * @param \Jose\Objects\JWKInterface $jwk
     * @param string[]                  $allowed_algorithms
     * @param string                    $detached_payload
     * @param null|int                  $signature_index
     *
     * @return \Jose\Objects\JWSInterface if the data has been loaded
     */
    public function loadAndVerifySignatureUsingKeyAndDetachedPayload($input, Objects\JWKInterface $jwk, array $allowed_algorithms, $detached_payload, &$signature_index = null);

    /**
     * @param string                       $input
     * @param \Jose\Objects\JWKSetInterface $jwk_set
     * @param string[]                     $allowed_algorithms
     * @param string                       $detached_payload
     * @param null|int                     $signature_index
     *
     * @return \Jose\Objects\JWSInterface if the data has been loaded
     */
    public function loadAndVerifySignatureUsingKeySetAndDetachedPayload($input, Objects\JWKSetInterface $jwk_set, array $allowed_algorithms, $detached_payload, &$signature_index = null);
}
