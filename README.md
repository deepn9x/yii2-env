DOT-ENV
=======
DOT-ENV

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

create .env file to config folder

First add link to composer.json
```
{
  "type": "git",
  "url": "https://github.com/deepn9x/yii2-env"
}

```
Either run

```
composer require deepn9x/yii2-env
```

or add

```
"deepn9x/yii2-env": "1.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \deepn9x\env\dotenv($key); ?>```


or add to web.php
in components
```
'dotenv' => [
  'class' => deepn9x\env\dotenv::class
],
```


Using examples
$example_1 = Yii::$app->dotenv->key("KEY");
$example_2 = new dotenv("ISP_KEY");
