<?php

namespace deepn9x\env;

/**
 * This is just an example.
 */
class dote
{

    private $word;
    public $key;

    public function __construct($key)
    {

        $envDir = \Yii::getAlias('@app') . '/config/.env';
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

        //Build by DEEPN9X
    }

    public function key($key)
    {
        return $this->__construct($key);
//        $this->key = $key;
    }

    public function __toString()
    {
        return $this->word;
    }


}
