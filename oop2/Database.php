<?php 


class Database {

    public $conn ;
    
    public function __construct(public $table) {
        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli('localhost','root' , '' , 'limit');
    }

    public function readAll()
    {
        $select = "SELECT * FROM {$this->table}";
        $query = $this->conn->query($select);

        // $result = [] ;
        // foreach ($query as $value) {
        //     $result[] = $value ;
        // }
        
        return $query->fetch_all(MYSQLI_ASSOC) ;
    }

    public function read($key , $value)
    {
        $select = "SELECT * FROM {$this->table} WHERE {$key} = '{$value}' ";
        $query = $this->conn->query($select);
        if ($query->num_rows > 1) {
            return $query->fetch_all(MYSQLI_ASSOC) ;
        } else {
            return $query->fetch_assoc();
        }
    }

    public function insert($val)
    {
        $keys = array_keys($val);
        $keys = implode(',' , $keys);

        $values = array_values($val);
        $values = "'" . implode("','" , $values) . "'";


        $this->conn->query("INSERT INTO {$this->table} ({$keys}) VALUES ({$values}) ");

    }


}

$users = new Database('products');
// $data = $users->readAll();
// $data = $users->read('id' , '1');

$users -> insert([
    'name' => 'iphone-',
    'views' => '1',
    'category' => '4',
    'brand' => '4',
    'num' => 2323
]);

echo "<pre>";
// print_r($data);