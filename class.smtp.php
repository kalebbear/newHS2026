<?php
/**
 * 简单的 SMTP 邮件发送类（支持 SSL）
 */
class SimpleMailer {
    private $host;
    private $port;
    private $username;
    private $password;
    private $from;
    private $socket;
    private $ssl;

    public function __construct($config) {
        $this->host = $config['host'];
        $this->port = $config['port'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->from = $config['from'];
        $this->ssl = isset($config['ssl']) && $config['ssl'];
    }

    public function send($to, $subject, $body, $isHtml = true) {
        $errno = 0;
        $errstr = '';

        // 连接 SMTP 服务器
        $host = $this->ssl ? "ssl://{$this->host}" : $this->host;
        $this->socket = fsockopen($host, $this->port, $errno, $errstr, 30);
        if (!$this->socket) {
            return "连接失败: $errstr ($errno)";
        }

        stream_set_timeout($this->socket, 30);

        // 读取欢迎信息
        $this->readResponse();

        // 发送 HELO
        $this->sendCommand("EHLO localhost");
        $this->readResponse();

        // 如果需要认证
        if (!empty($this->username)) {
            $this->sendCommand("AUTH LOGIN");
            $this->readResponse();

            $this->sendCommand(base64_encode($this->username));
            $this->readResponse();

            $this->sendCommand(base64_encode($this->password));
            $this->readResponse();
        }

        // 发送 MAIL FROM
        $this->sendCommand("MAIL FROM: <{$this->from}>");
        $this->readResponse();

        // 发送 RCPT TO
        $this->sendCommand("RCPT TO: <{$to}>");
        $this->readResponse();

        // 发送 DATA
        $this->sendCommand("DATA");
        $this->readResponse();

        // 构建邮件内容
        $headers = $isHtml ? "Content-Type: text/html; charset=UTF-8\r\n" : "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: {$this->from}\r\n";
        $headers .= "Reply-To: {$this->from}\r\n";
        $headers .= "MIME-Version: 1.0\r\n";

        $email = "To: {$to}\r\n";
        $email .= "Subject: {$subject}\r\n";
        $email .= $headers;
        $email .= "\r\n";
        $email .= $body;
        $email .= "\r\n.\r\n";

        $this->sendCommand($email);
        $this->readResponse();

        // 发送 QUIT
        $this->sendCommand("QUIT");
        $this->readResponse();

        fclose($this->socket);
        return true;
    }

    private function sendCommand($cmd) {
        fwrite($this->socket, $cmd . "\r\n");
    }

    private function readResponse() {
        $response = '';
        while ($line = fgets($this->socket, 515)) {
            $response .= $line;
            if (substr($line, 3, 1) === ' ') break;
        }
        return $response;
    }
}
?>
