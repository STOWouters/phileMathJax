<?php

/**
 * Plugin class.
 */
namespace Phile\Plugin\Flipper\MathJax;

/**
 * Class Plugin
 *
 * @author  Stijn Wouters
 * @link    https://github.com/Stijn-Flipper/phileMathJax
 * @license http://choosealicense.com/licenses/mit/
 * @package Phile\Plugin\Flipper\MathJax
 */
class Plugin extends \Phile\Plugin\AbstractPlugin implements \Phile\Gateway\EventObserverInterface {

  /**
   * Constructor.
   *
   * Register plugin to Phile Core.
   */
  public function __construct() {
    return;
  }

  /**
   * Execute plugin.
   *
   * @param string $event
   * @param null $data
   *
   * @return void
   */
  public function on($event, $data=null) {
    return;
  }

}
