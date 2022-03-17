<?php

class Conexao {

  private $username = 'root';
  private $password = '';
  private $banco = 'avaliacao_web2';
  private $host = 'localhost';
  private $conn;

  public function __construct() {
    $conn = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->username, $this->password);

    return $this->conn = $conn;
  }

  public function getConn() {
    return $this->conn;
  }

  public function getSelect($sql) {
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}