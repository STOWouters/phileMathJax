# phileMathjax
[Phile][] plugin for beautiful math formulas using [MathJax][].


## Installation
**Using composer**

    $ composer require 'stijn-flipper/phile-mathjax:dev-master' --prefer-dist

**But I don't like composer**

    $ git clone https://github.com/Stijn-Flipper/phileMathjax plugins/stijnFlipper/phileMathjax

**I don't like git either**

Are you serious?

1. Download the repo's content
2. Put the content into the `plugins/stijnFlipper/phileMathjax` directory

Don't forget to enable the plugin by adding the following line to your
`default_config.php` or `config.php`:

```php
$config['plugins']['stijnFlipper\\phileMathjax'] = array('active' => true);
```

## Usage
First, put this in the `<head>` section of your theme (or at the bottom of the
`<body>` section, but this will slow down the processing).

```html
<!DOCTYPE html>
<html>
<head>
  ...
  {{ mathjax }}
</head>

<body>
  ...
</body>
</html>
```

You can define global configuration (i.e. applies over all markdown files)
using the plugins `config.php`:

```php
return array(
  /*
   * Enable mathjax.
   *
   * MathJax is disabled by default, so the page loads faster. This allows you
   * to only enable MathJax plugin when it's actually used.
   *
   * It's recommended to keep it disabled by default, unless all your
   * markdown files requires MathJax.
   */
  'enabled' => false,

  /*
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

  /*
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
```

Another (and the preferred) way is to load the configurations from the post
meta. Use the `mathjax.` prefix for all mathjax configuration options.

```html
<!--
Title: MathJax Examples
Description: Mathjax examples in markdown.

mathjax.enabled
mathjax.config: TeX-AMS_HTML-full
-->
```

This will override the settings as given by `config.php` for the content file.


## Examples
Drop the markdown files in the `examples` directory in the `content` dir, so
you can view it in your browser, or peek into the source for how-to.


## Contributing
Feel free to report bugs and/or send useful PR's.


[Phile]: https://github.com/PhileCMS/Phile
[Mathjax]: https://github.com/mathjax/MathJax
