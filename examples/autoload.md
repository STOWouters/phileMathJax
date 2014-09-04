<!--
Title: MathJax autoload example
Description: MathJax example, autoloading a package.

mathjax.enabled
mathjax.config: TeX-AMS_HTML-full
-->
<script type="text/x-mathjax-config">
MathJax.Hub.Register.StartupHook("TeX Jax Ready",function () {
  MathJax.Hub.Insert(MathJax.InputJax.TeX.Definitions.macros,{
    cancel: ["Extension","cancel"],
    bcancel: ["Extension","cancel"],
    xcancel: ["Extension","cancel"],
    cancelto: ["Extension","cancel"]
  });
});
</script>

Put this on top of the markdown file to make `\cancel`, `\bcancel`, `\xcancel`,
and `\cancelto` so that they will load the `cancel.js` extension when first
used.

```html
<script type="text/x-mathjax-config">
MathJax.Hub.Register.StartupHook("TeX Jax Ready",function () {
  MathJax.Hub.Insert(MathJax.InputJax.TeX.Definitions.macros,{
    cancel: ["Extension","cancel"],
    bcancel: ["Extension","cancel"],
    xcancel: ["Extension","cancel"],
    cancelto: ["Extension","cancel"]
  });
});
</script>
```

Here is the first usage:  \\( \cancel{x+1} \\).  It will cause the cancel 
package to be loaded automatically.
