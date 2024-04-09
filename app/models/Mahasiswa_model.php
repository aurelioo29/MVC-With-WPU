<?php

class Mahasiswa_model
{
  private $dbh, $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      // root = username, '' = password
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
