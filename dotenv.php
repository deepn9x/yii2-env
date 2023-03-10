<?php

namespace deepn9x\env;

use yii\helpers\FileHelper;

/**
 * This is just an example.
 * Author: DEEPN9X
 */
class dotenv
{
    private $word;
    public $key;

    public function __construct($key)
    {
        $envDir = \Yii::getAlias('@app') . '/config/.env';
        $find = file_exists($envDir);
        if(!$find){
            fopen($envDir, 'w');
            file_put_contents($envDir, "test=testEnv");
        }
        $envDir = file_get_contents($envDir);
        $env = explode(PHP_EOL, $envDir);
        $list = [];
        foreach ($env as $item) {
            if ($item != '') {
                $env_explode = explode('=', $item);
                $list[$env_explode[0]] = $env_explode[1];
            }
        }
        if ($this->key) {
            if (isset($list[$this->key])) {
                $word = $list[$this->key];
                $this->word = $word;
                return $this->word;
            } else {
                $this->word = 'null';
                return $this->word;
            }
        } else {
            if (isset($list[$key])) {
                $word = $list[$key];
                $this->word = $word;
                return $this->word;
            } else {
                $this->word = 'null';
                return $this->word;
            }
        }
    }
    public function key($key)
    {
        return $this->__construct($key);
    }
    public function __toString()
    {
        return $this->word;
    }
}
