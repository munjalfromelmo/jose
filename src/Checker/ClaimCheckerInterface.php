<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Checker;

use Jose\Objects\JWTInterface;

/**
 * Interface ClaimCheckerInterface.
 */
interface ClaimCheckerInterface
{
    /**
     * @param \Jose\Objects\JWTInterface $jwt
     *
     * @return string[]
     *@throws \InvalidArgumentException
     *
     */
    public function checkClaim(JWTInterface $jwt);
}
