[!WARNING]
**⚠️ This project has been archived and is no longer maintained. ⚠️**

Github has shown it does not respect its users. Other have said it better than I can.

- https://www.theregister.com/2022/06/30/software_freedom_conservancy_quits_github/
- https://www.andrlik.org/dispatches/migrating-from-github-motivation/
- https://techresolve.blog/2025/12/27/looking-to-migrate-company-off-github-whats-the/
- https://lord.io/leaving-github/
- https://dev.to/alanwest/how-to-actually-migrate-from-github-to-codeberg-without-losing-your-mind-33bf>
> Development has moved to Codeberg:
> **➡️ https://codeberg.org/DavidJEddy/yii2-zeroforksgiven-theme**
>
> Please update your remotes:
> ```bash
> git remote set-url origin https://codeberg.org/DavidJEddy/yii2-zeroforksgiven-theme
> ```

---
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