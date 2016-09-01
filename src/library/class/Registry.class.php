<?php
class Registry implements ArrayAccess {

    private static $registry = false;
    private $vars = array();

    public static function getInstance() {
        if (self::$registry === false)
            self::$registry = new Registry();

        return self::$registry;
    }

    public function offsetGet($pVarName) {
        return $this->vars[$pVarName];
    }

    public function offsetSet($pVarName, $pValue) {
        $this->vars[$pVarName] = $pVarName;
    }

    public function offsetExists ($pVarName) {
        return array_key_exists($pVarName, $this->vars);
    }

    public function offsetUnset ($pVarName) {
        unset($this->vars[$pVarName]);
    }
}