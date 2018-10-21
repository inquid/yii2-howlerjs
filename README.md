howler.js
=========
Javascript audio library for the modern web. https://howlerjs.com *WIDGET FOR Yii*

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist inquid/yii2-howler-js "dev-master"
```

or add

```
"inquid/yii2-howler-js": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :
Some Howler options are available like volume
```php
<?= \inquid\howlerjs\HowlerJsSimple::widget(['songs' => ["http://www.hochmuth.com/mp3/Vivaldi_Sonata_eminor_.mp3"]]); ?>
```
Or if you want to use the example full screen player (recommended to use with an empty layout view):
```php
<?= \inquid\howlerjs\HowlerJsPlayer::widget(['path' => Yii::getAlias('@web/music'),
        'files' =>
        [
            ['title' => 'Vivaldi Example', 'file' => 'Vivaldi_Sonata_eminor_.mp3', 'howl' => null]
        ]
    ]); ?>
```
If you want to use remote http files
```php
\inquid\howlerjs\HowlerJsPlayer::widget([
    'remoteFiles' => true,
    'files' =>
[['title' => $file->name, 'file' => 'https://storage.googleapis.com/enter-video.appspot.com/music/Vivaldi_Sonata_eminor_.mp3', 'howl' => null]]
]);
```
