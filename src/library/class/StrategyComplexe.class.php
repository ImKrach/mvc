<?php 

interface IWriter {
	public function write($message);
}

interface IFormatter {
    public function format($message);
}

class Formatter_String implements IFormatter {
    public function format($message) {
        return $message . PHP_EOL;
    }
}

class Formatter_XML implements IFormatter {
    public function format($message) {
        $timestamp = time();
        // Syntaxe heredoc
        $xml = <<<XML_EOL
            <message>
                <time>$timestamp</time>
                <text>$message</text>
            </message>
XML_EOL;
        return $xml . PHP_EOL;
    }
}

class Formatter_HTML implements IFormatter {
    public function format($message) {
        $timestamp = time();
        // Syntaxe heredoc
        $html = <<<HTML_EOL
            <p>
            <b>Timestamp:</b> $timestamp
            <br />
            <b>Message:</b> $message
            </p>
HTML_EOL;
        return $html . PHP_EOL;
    }
}

abstract class Logger implements IWriter {
    protected $formatter;

    protected function __construct(IFormatter $formatter) {
        $this->formatter = $formatter;
    }
}

class Logger_File extends Logger {
    private $file = null;

    public function __construct($formatter, $file) {
        parent::__construct($formatter);
        $this->file = $file;
    }

    public function write($message) {
        $formatted_message = $this->formatter->format($message);
        file_put_contents($this->file, $formatted_message, FILE_APPEND);
    }

    public function getFile() { return $this->file; }
}
 
class Logger_DB extends Logger {
	// Dans notre exemple, $db est un objet de connexion de base de données ADOdb Lite.
    private $db = null;

    public function __construct($formatter, $db) {
        parent::__construct($formatter);
        $this->db = new PDO($db["dsn"], $db["user"], $db["pass"]);
    }

    public function write($message) {
        $formatted_message = $this->formatter->format($message);
        $_date = time();
        $_escaped_message = $message;
        
        // Préparation de la requête
        $stmt = $this->db->prepare('INSERT INTO log (message, date) VALUES (:message, :date)');
        $stmt->execute(array('message' => $message, 'date' => $_date));
    }
}

?>