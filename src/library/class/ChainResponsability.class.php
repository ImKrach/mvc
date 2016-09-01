<?php 
abstract class Sauvegarde
{
    private $_next = null;

    public function setNext(Sauvegarde $Sauvegarde)
    {
        $this->_next = $Sauvegarde;
        return $this->_next;
    }

    public function log($message)
    {
        $this->_log($message);
        if ($this->_next !== null) {
            $this->_next->log($message);
        }
    }

    abstract protected function _log($message);

}

class EmailSauvegarde extends Sauvegarde
{
    public function _log($message)
    {
        echo "Sending via email: " . $message . " \n";
    }
}

class ErrorSauvegarde extends Sauvegarde
{
    protected function _log($message)
    {
        echo "Sending to stderr: " . $message . " \n";
    }
}

class StdoutSauvegarde extends Sauvegarde
{
    protected function _log($message)
    {
        echo "Writing to stdout: " . $message . " \n";
    }
}