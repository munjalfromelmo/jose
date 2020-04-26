<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Objects;

interface JWEInterface extends JWTInterface
{
    /**
     * Returns the number of recipients associated with the JWS.
     *
     * @return int
     */
    public function countRecipients();

    /**
     * @return bool
     */
    public function isEncrypted();

    /**
     * @param \Jose\Objects\JWKInterface $recipient_key
     * @param array                     $recipient_headers
     *
     * @return \Jose\Objects\JWEInterface
     */
    public function addRecipientInformation(JWKInterface $recipient_key, $recipient_headers = []);

    /**
     * @param string|null $encrypted_key
     * @param array       $recipient_headers
     *
     * @return \Jose\Objects\JWEInterface
     */
    public function addRecipientWithEncryptedKey($encrypted_key, array $recipient_headers);

    /**
     * Returns the recipients associated with the JWS.
     *
     * @return \Jose\Objects\RecipientInterface[]
     */
    public function getRecipients();

    /**
     * @param int $id
     *
     * @return \Jose\Objects\RecipientInterface
     */
    public function &getRecipient($id);

    /**
     * @param int $recipient
     *
     * @return string
     */
    public function toCompactJSON($recipient);

    /**
     * @param int $recipient
     *
     * @return string
     */
    public function toFlattenedJSON($recipient);

    /**
     * @return string
     */
    public function toJSON();

    /**
     * @internal
     *
     * @return string|null The cyphertext
     */
    public function getCiphertext();

    /**
     * @param string $ciphertext
     *
     * @return \Jose\Objects\JWEInterface
     * @internal
     *
     */
    public function withCiphertext($ciphertext);

    /**
     * @internal
     *
     * @return string|null
     */
    public function getAAD();

    /**
     * @param string $aad
     *
     * @return \Jose\Objects\JWEInterface
     * @internal
     *
     */
    public function withAAD($aad);

    /**
     * @internal
     *
     * @return string|null
     */
    public function getIV();

    /**
     * @param string $iv
     *
     * @return \Jose\Objects\JWEInterface
     * @internal
     *
     */
    public function withIV($iv);

    /**
     * @internal
     *
     * @return string|null
     */
    public function getTag();

    /**
     * @param string $tag
     *
     * @return \Jose\Objects\JWEInterface
     *@internal
     *
     */
    public function withTag($tag);

    /**
     * @internal
     *
     * @return string|null
     */
    public function getEncodedSharedProtectedHeaders();

    /**
     * @param string $encoded_shared_protected_headers
     *
     * @return \Jose\Objects\JWEInterface
     *@internal
     *
     */
    public function withEncodedSharedProtectedHeaders($encoded_shared_protected_headers);

    /**
     * @return array
     */
    public function getSharedProtectedHeaders();

    /**
     * @param array $shared_protected_headers
     *
     * @return \Jose\Objects\JWEInterface
     */
    public function withSharedProtectedHeaders(array $shared_protected_headers);

    /**
     * @param string     $key
     * @param mixed|null $value
     *
     * @return \Jose\Objects\JWEInterface
     */
    public function withSharedProtectedHeader($key, $value);

    /**
     * @param string $key The key
     *
     * @return mixed|null Header value
     */
    public function getSharedProtectedHeader($key);

    /**
     * @param string $key The key
     *
     * @return bool
     */
    public function hasSharedProtectedHeader($key);

    /**
     * @return array
     */
    public function getSharedHeaders();

    /**
     * @param array $shared_headers
     *
     * @return \Jose\Objects\JWEInterface
     */
    public function withSharedHeaders(array $shared_headers);

    /**
     * @param string     $key
     * @param mixed|null $value
     *
     * @return \Jose\Objects\JWEInterface
     */
    public function withSharedHeader($key, $value);

    /**
     * @param string $key The key
     *
     * @return mixed|null Header value
     */
    public function getSharedHeader($key);

    /**
     * @param string $key The key
     *
     * @return bool
     */
    public function hasSharedHeader($key);
}
