<?php namespace App;

abstract class Sub {

    public function layBread()
    {
        var_dump('laying down the br ead');
        return $this;
    }

    public function addLettuce()
    {
        var_dump('add some lettuce');
        return $this;
    }

    public function addSauces()
    {
        var_dump('add oil and vinegar');
        return $this;
    }
}

