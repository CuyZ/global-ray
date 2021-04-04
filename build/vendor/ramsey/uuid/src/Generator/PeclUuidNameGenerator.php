<?php

/**
 * This file is part of the ramsey/uuid library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
declare (strict_types=1);
namespace RayGlobalScoped\Ramsey\Uuid\Generator;

use RayGlobalScoped\Ramsey\Uuid\Exception\NameException;
use RayGlobalScoped\Ramsey\Uuid\UuidInterface;
use function sprintf;
use function uuid_generate_md5;
use function uuid_generate_sha1;
use function uuid_parse;
/**
 * PeclUuidNameGenerator generates strings of binary data from a namespace and a
 * name, using ext-uuid
 *
 * @link https://pecl.php.net/package/uuid ext-uuid
 */
class PeclUuidNameGenerator implements \RayGlobalScoped\Ramsey\Uuid\Generator\NameGeneratorInterface
{
    /** @psalm-pure */
    public function generate(\RayGlobalScoped\Ramsey\Uuid\UuidInterface $ns, string $name, string $hashAlgorithm) : string
    {
        switch ($hashAlgorithm) {
            case 'md5':
                $uuid = (string) \uuid_generate_md5($ns->toString(), $name);
                break;
            case 'sha1':
                $uuid = (string) \uuid_generate_sha1($ns->toString(), $name);
                break;
            default:
                throw new \RayGlobalScoped\Ramsey\Uuid\Exception\NameException(\sprintf('Unable to hash namespace and name with algorithm \'%s\'', $hashAlgorithm));
        }
        return (string) \uuid_parse($uuid);
    }
}
