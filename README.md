# Magento 2 Module - Enabled SVG support

## Description

with this module you are able to enable the upload of SVG files.

You will get an error during the upload in the media gallery cause Magento uses the ImageMagic function to add a white
background. You can ignore this error. The SVG will uploaded regardless and can be used.

## Install

Install the extension via composer:

```
    composer install webidea24/magento2-module-svg-support
```

## Disclaimer
please make sure, that nobody is allowed to upload SVGs who should not be allowed.
SVGs are a little security problem, cause SVGs could contain malware (Javascript).
Use this extension on your own risk!
