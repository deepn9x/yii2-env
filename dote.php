<?php

namespace deepn9x\env;

/**
 * This is just an example.
 */
class dote
{

    private $word;

    public function __construct($key)
    {
        $envDir = \Yii::getAlias('@app') . '/config/.env';
        $envDir = file_get_contents($envDir);
        $env = explode(PHP_EOL, $envDir);
        $list = [];

        foreach ($env as $item){
            $env_explode = explode('=', $item);
            $list[$env_explode[0]] = $env_explode[1];
        }

        if(isset($list[$key])){
            $word = $list[$key];
            $this->word = $word;
            return $this->word;
        }
        else{

            $this->word = 'null';
            return $this->word;
        }


    }

    public function __toString()
    {
        return $this->word;
    }


}
