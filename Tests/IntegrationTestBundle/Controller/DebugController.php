<?php

namespace Craue\ConfigBundle\Tests\IntegrationTestBundle\Controller;

use Craue\ConfigBundle\Util\Config;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2023 Christian Raue
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */
class DebugController extends AbstractController {

	public function getAction($name, Config $config) {
		return new JsonResponse([
			$name => $config->get($name),
		]);
	}

}
