<?php

return array(
  /**
   * Enable mathjax.
   *
   * MathJax is disabled by default, so the page loads faster. This allows you
   * to only enable MathJax plugin when it's actually used.
   *
   * It's recommended to keep it disabled by default, unless all your
   * markdown files requires MathJax.
   */
  'enabled' => false,

  /**
   * Which version of MathJax to use.
   *
   * For all supported MathJax versions, see:
   *
   *    http://docs.mathjax.org/en/latest/configuration.html#loading-mathjax-from-the-cdn
   *
   * The version string must be of the following format:
   *
   *    X.Y-latest
   *
   * Or use the default latest version.
   */
  'version' => 'latest',

  /**
   * Configuration options for MathJax.
   *
   * For a complete list of supported configuration options for the latest
   * MathJax version, see:
   *
   *    http://docs.mathjax.org/en/latest/configuration.html#using-a-configuration-file
   *
   * The config string must be one from the list, without `.js` extension (e.g.
   * `TeX-AMS-MML_HTMLorMML` instead of `TeX-AMS-MML_HTMLorMML.js`).
   *
   * Defaults to (nearly) all possible configuration options (this may result
   * in a slower performance).
   */
  'config'  => 'default',
);
