# yii2-pieces-theme
Yii2 Custom Theme for zeroforksgiven.com

## Credit
Based on https://github.com/sheillendra/yii2-theme

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist davidjeddy/yii2-zfg-theme "*"
```

or add

```
"davidjeddy/yii2-zfg-theme": "*"
```

to the require section of your `composer.json` file.


## Application
Change your application config (backend or frontend)
```
'view' => [
    'theme' => [
        'class'     => 'davidjeddy\zfg\ZfgAsset',
        'active'    => 'zfg',
        'pathMap'   => [
            '@app/views' => ['@webroot/themes/zfg/views',],
        ],
    ],
],
```