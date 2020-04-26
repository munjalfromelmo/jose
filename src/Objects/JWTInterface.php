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

interface JWTInterface
{
    /**
     * Returns the payload of the JWT.
     *
     * @return string                       Payload
     * @return array                        Payload
     * @return \Jose\Objects\JWKInterface    Payload
     * @return \Jose\Objects\JWKSetInterface Payload
     * @return mixed                        Payload
     */
    public function getPayload();

    /**
     * @param mixed $payload
     *
     * @return \Jose\Objects\JWTInterface
     * @internal
     *
     */
    public function withPayload($payload);

    /**
     * Returns the value of the payload of the specified key.
     *
     * @param string $key The key
     *
     * @return mixed|null Payload value
     */
    public function getClaim($key);

    /**
     * Returns the claims.
     *
     * @return array Payload value
     */
    public function getClaims();

    /**
     * @param string $key The key
     *
     * @return bool
     */
    public function hasClaim($key);

    /**
     * @return bool
     */
    public function hasClaims();
}
