<?php

/**
 * MangoPayBundle.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@uni-alteri.com so we can send you a copy immediately.
 *
 * @copyright   Copyright (c) 2009-2015 Uni Alteri (http://uni-alteri.com)
 *
 * @link        http://teknoo.it/mangopay-bundle Project website
 *
 * @license     http://teknoo.it/license/mit         MIT License
 * @license     http://teknoo.it/license/gpl-3.0     GPL v3 License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 */

namespace UniAlteri\MangoPayBundle\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use UniAlteri\MangoPayBundle\Service\Interfaces\StorageServiceInterface;

/**
 * Class SessionStorageService
 * @package UniAlteri\MangoPayBundle\Service
 *
 * @copyright   Copyright (c) 2009-2015 Uni Alteri (http://uni-alteri.com)
 *
 * @link        http://teknoo.it/mangopay-bundle Project website
 *
 * @license     http://teknoo.it/license/mit         MIT License
 * @license     http://teknoo.it/license/gpl-3.0     GPL v3 License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 */
class SessionStorageService implements StorageServiceInterface
{
    /**
     * @var SessionInterface
     */
    protected $session;

    /**
     * @param SessionInterface $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * Gets the service container parameters.
     *
     * @return array An array of parameters
     *
     * @api
     */
    public function all()
    {
        return $this->session->all();
    }

    /**
     * Gets a service container parameter.
     *
     * @param string $name The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws \LogicException if the parameter is not defined
     *
     * @api
     */
    public function get($name)
    {
        return $this->session->get($name);
    }

    /**
     * Sets a service container parameter.
     *
     * @param string $name The parameter name
     * @param mixed $value The parameter value
     *
     * @throws \LogicException if the parameter can not be set
     *
     * @return self
     *
     * @api
     */
    public function set($name, $value)
    {
        $this->session->set($name, $value);

        return $this;
    }

    /**
     * Returns true if a parameter name is defined.
     *
     * @param string $name The parameter name
     *
     * @return bool true if the parameter name is defined, false otherwise
     *
     * @api
     */
    public function has($name)
    {
        return $this->session->has($name);
    }
}