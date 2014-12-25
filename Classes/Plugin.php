<?php

/**
 * Plugin class.
 */
namespace Phile\Plugin\StijnFlipper\PhileMathjax;

/**
 * Class Plugin
 *
 * @author  Stijn Wouters
 * @link    https://github.com/Stijn-Flipper/phileMathjax
 * @license http://choosealicense.com/licenses/mit/
 * @package Phile\Plugin\StijnFlipper\Mathjax
 */
class Plugin extends \Phile\Plugin\AbstractPlugin implements \Phile\Gateway\EventObserverInterface {

  /**
   * MathJax configuration settings, see
   *
   * @var array mathjax_settings
   */
  private $mathjax_settings;

  /**
   * Mathjax prefix for meta.
   *
   * @var string mathjax_prefix
   */
  private $mathjax_prefix;

  /**
   * Constructor.
   *
   * Register plugin to Phile Core.
   */
  public function __construct() {
    \Phile\Event::registerEvent('after_parse_content', $this);

    // default plugin configurations
    $this->mathjax_settings = array(
      'enabled' => false,
      'config'  => 'default',
      'version' => 'latest',
    );

    $this->mathjax_prefix = 'mathjax_';
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
    // get current page
    $page = $data['page'];
    if (null === $page)
      return;

    // get meta prefixed with the given mathjax prefix
    $meta = array();
    foreach ($page->getMeta()->getAll() as $key => $value) {
      if (0 !== strpos($key, $this->mathjax_prefix))
        continue;

      $meta[substr($key, strlen($this->mathjax_prefix))] = $value;
    } // end foreach

    $this->mathjax_settings = array_merge($this->mathjax_settings, $this->settings, $meta);

    // get twig variables
    $key = 'templateVars';
    $twig_vars = (\Phile\Registry::isRegistered($key)) ? \Phile\Registry::get($key) : array();

    // add mathjax twig variable
    $enabled = $this->mathjax_settings['enabled'];
    $enabled = (is_bool($enabled)) ? $enabled : (0 == strlen($enabled));

    $twig_vars['mathjax'] = ($enabled) ? sprintf('<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/%s/MathJax.js?config=%s"></script>',
                                                 $this->mathjax_settings['version'], $this->mathjax_settings['config']) : '';
    \Phile\Registry::set($key, $twig_vars);
  }

}
