<?php
require_once __DIR__ . '/DatabaseTable.php';

class Stanza
{
  private $id;
  private $number;
  private $floor;
  private $beds;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getFloor()
  {
    return $this->floor;
  }

  public function setFloor($floor)
  {
    $this->floor = $floor;
  }

  public function getBeds()
  {
    return $this->beds;
  }

  public function setBeds($beds)
  {
    $this->beds = $beds;
  }

  public function getById($_id)
  {
    require_once __DIR__ . '/../connection.php';

    $stanzeDb = new DatabaseTable($conn, 'stanze', 'id');
    $stanza = $stanzeDb->getById($_id);

    if (!$stanza) {
      throw new Exception('Stanza non trovata');
    }

    $this->id = $_id;
    $this->number = $stanza['room_number'];
    $this->beds = $stanza['beds'];
    $this->floor = $stanza['floor'];

    return [
      'id' => $this->id,
      'number' => $this->number,
      'beds' => $this->beds,
      'floor' => $this->floor,
    ];
  }

  public function index() {
    require_once __DIR__ . '/../connection.php';

    $stanzeDb = new DatabaseTable($conn, 'stanze', 'id');
    $stanze = $stanzeDb->getAll();
    return $stanze;
  }
}