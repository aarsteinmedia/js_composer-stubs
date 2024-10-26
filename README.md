# WPBakery Page Builder Stubs

This package provides stub declarations for [WPB_VC_](http://wpbakery.com) core functions, classes, interfaces, and global variables.  These stubs can help plugin and theme developers leverage static analysis tools like [Psalm](https://getpsalm.org/) and plugins like Intellisense, Intelephense.

## Installation

Require this package as a dev-dependency with [Composer](https://getcomposer.org):

```
composer require --dev aarsteinmedia/js_composer-stubs
```

Alternatively, you may download `js_composer-stubs.php` directly.

## Usage with Psalm

Update your Psalm config to include the section:

```xml
<stubs>
    <file name="vendor/aarsteinmedia/js_composer-stubs/js_composer-stubs.php" />
</stubs>
```

Furthermore, ensure WPBakery Page Builder core code is _not_ included under `<projectFiles>`.

## Usage for Intellisense

If your editor has trouble parsing all of WPBakery Page Builder classes, functionc, etc, you may find the stubs useful for enabling code completion and related features.  For example, [here](https://github.com/bmewburn/vscode-intelephense/issues/113) are instructions for usage with VSCode's [Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) extension. Or in a local workspace for intelephense create a ```.php``` file and add 
``{
    "intelephense.stubs": [
    "/vendor/aarsteinmedia/js_composer-stubs/js_composer-stubs.php"
  ]
}``

## Versioning

This package is versioned to match the WPBakery Page Builder version from which the stubs are generated.  If any fixes to stubs are required, subsequent releases will be versioned as `WPB_VC_VERSION.X`.

### License
[GPLv2](LICENSE)