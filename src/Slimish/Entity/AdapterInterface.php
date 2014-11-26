<?php
/**
 * This file is part of the Slimish package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Slimish\Entity;

interface AdapterInterface
{
    public function fetchAll($type, $context = '', $params = []);
}
