<?php
/**
 * Hooks Definition Helper
 *
 * Provide a simple way for user Hooks Definition classes to extend from this
 * class and not easily load the hook definitions.
 *
 * @package   SlaxWeb\Hooks
 * @author    Tomaz Lovrec <tomaz.lovrec@gmail.com>
 * @copyright 2016 (c) Tomaz Lovrec
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://github.com/slaxweb/
 * @version   0.4
 */
namespace SlaxWeb\Hooks\Service;

abstract class Definition implements \Pimple\ServiceProviderInterface
{
    /**
     * Pimple DIC
     *
     * @var \Pimple\Container
     */
    protected $_container = null;

    /**
     * Register Provider
     *
     * Method called by the Pimple DIC when registering. Set container to class
     * property and call the define method.
     *
     * @param \Pimple\Container $container DIC
     * @return void
     */
    public function register(\Pimple\Container $container)
    {
        $this->_container = $container;

        $this->define();
    }

    /**
     * Define Hooks
     *
     * Define the Hooks by adding their definitions(user code) to the Hooks
     * Container.
     *
     * @return void
     */
    abstract public function define();
}
