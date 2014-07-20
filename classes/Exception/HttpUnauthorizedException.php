<?php

/*
 * This file is part of the Indigo Core package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Core\Exception;

/**
 * HTTP Unauthorized Exception
 *
 * Return 401 code
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class HttpUnauthorizedException extends \HttpException
{
	public function response()
	{
		return new \Response(\View::forge('401'), 401);
	}
}
