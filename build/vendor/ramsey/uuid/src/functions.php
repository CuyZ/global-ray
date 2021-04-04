<?php

/**
 * This file is part of the ramsey/uuid library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 * phpcs:disable Squiz.Functions.GlobalFunction
 */
declare (strict_types=1);
namespace RayGlobalScoped\Ramsey\Uuid;

use RayGlobalScoped\Ramsey\Uuid\Type\Hexadecimal;
use RayGlobalScoped\Ramsey\Uuid\Type\Integer as IntegerObject;
/**
 * Returns a version 1 (time-based) UUID from a host ID, sequence number,
 * and the current time
 *
 * @param Hexadecimal|int|string|null $node A 48-bit number representing the
 *     hardware address; this number may be represented as an integer or a
 *     hexadecimal string
 * @param int $clockSeq A 14-bit number used to help avoid duplicates that
 *     could arise when the clock is set backwards in time or if the node ID
 *     changes
 *
 * @return string Version 1 UUID as a string
 */
function v1($node = null, ?int $clockSeq = null) : string
{
    return \RayGlobalScoped\Ramsey\Uuid\Uuid::uuid1($node, $clockSeq)->toString();
}
/**
 * Returns a version 2 (DCE Security) UUID from a local domain, local
 * identifier, host ID, clock sequence, and the current time
 *
 * @param int $localDomain The local domain to use when generating bytes,
 *     according to DCE Security
 * @param IntegerObject|null $localIdentifier The local identifier for the
 *     given domain; this may be a UID or GID on POSIX systems, if the local
 *     domain is person or group, or it may be a site-defined identifier
 *     if the local domain is org
 * @param Hexadecimal|null $node A 48-bit number representing the hardware
 *     address
 * @param int|null $clockSeq A 14-bit number used to help avoid duplicates
 *     that could arise when the clock is set backwards in time or if the
 *     node ID changes
 *
 * @return string Version 2 UUID as a string
 */
function v2(int $localDomain, ?\RayGlobalScoped\Ramsey\Uuid\Type\Integer $localIdentifier = null, ?\RayGlobalScoped\Ramsey\Uuid\Type\Hexadecimal $node = null, ?int $clockSeq = null) : string
{
    return \RayGlobalScoped\Ramsey\Uuid\Uuid::uuid2($localDomain, $localIdentifier, $node, $clockSeq)->toString();
}
/**
 * Returns a version 3 (name-based) UUID based on the MD5 hash of a
 * namespace ID and a name
 *
 * @param string|UuidInterface $ns The namespace (must be a valid UUID)
 *
 * @return string Version 3 UUID as a string
 */
function v3($ns, string $name) : string
{
    return \RayGlobalScoped\Ramsey\Uuid\Uuid::uuid3($ns, $name)->toString();
}
/**
 * Returns a version 4 (random) UUID
 *
 * @return string Version 4 UUID as a string
 */
function v4() : string
{
    return \RayGlobalScoped\Ramsey\Uuid\Uuid::uuid4()->toString();
}
/**
 * Returns a version 5 (name-based) UUID based on the SHA-1 hash of a
 * namespace ID and a name
 *
 * @param string|UuidInterface $ns The namespace (must be a valid UUID)
 *
 * @return string Version 5 UUID as a string
 */
function v5($ns, string $name) : string
{
    return \RayGlobalScoped\Ramsey\Uuid\Uuid::uuid5($ns, $name)->toString();
}
/**
 * Returns a version 6 (ordered-time) UUID from a host ID, sequence number,
 * and the current time
 *
 * @param Hexadecimal|null $node A 48-bit number representing the hardware
 *     address
 * @param int $clockSeq A 14-bit number used to help avoid duplicates that
 *     could arise when the clock is set backwards in time or if the node ID
 *     changes
 *
 * @return string Version 6 UUID as a string
 */
function v6(?\RayGlobalScoped\Ramsey\Uuid\Type\Hexadecimal $node = null, ?int $clockSeq = null) : string
{
    return \RayGlobalScoped\Ramsey\Uuid\Uuid::uuid6($node, $clockSeq)->toString();
}
