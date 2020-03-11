<?php

class DatabaseTable
{
  private $connection;
  private $table;
  private $primaryKey;

  public function __construct($_connection, $_table, $_primaryKey)
  {
    $this->connection = $_connection;
    $this->table = $_table;
    $this->primaryKey = $_primaryKey;
  }

  private function query($sql, $types_params = null, $params = null)
  {
    $query = $this->connection->prepare($sql);
    if(!empty($params)) {
      $query->bind_param($types_params, implode(',', $params));
    }
    $query->execute();
    if(!$query) {
      throw new Exception('Query errata');
    }

    $result = $query->get_result();

    if($result->num_rows > 1) {
      $results = [];

      while ($row = $result->fetch_assoc()) {
        $results[] = $row;
      }
      return $results;
    }

    return $result->fetch_assoc();
  }

  public function getAll()
  {
    $results = $this->query("SELECT * FROM `$this->table`");
    return $results;
  }

  public function getById($id)
  {
    $results = $this->query("SELECT * FROM `$this->table` WHERE `id` = ?", 'i', [$id]);
    return $results;
  }
}
