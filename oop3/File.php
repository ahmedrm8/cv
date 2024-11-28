<?php 


class AdminsTable
{
    private $table_name = "users";
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "admin_project";

    private $connection;


    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->db_name);
    }

    public function showAllData()
    {
        $sql = "SELECT * FROM $this->table_name";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
        
            while ($row = $result->fetch_assoc()) {
                echo " - id: " . $row["id"] 
                    . "<br>"
                    . " - Name: " . $row["username"]
                    . "<br>"
                    . " - Email: " . $row["password"]
                    . "<br>"
                    . " - Password: " . $row["email"]
                    . "<br>"
                    . " - Address: " . $row["address"]
                    . "<br>"
                    . " - Phone: " . $row["phone"]
                    
                    . " - Gender: " . $row["gender"]
                    . "<br>"
                    . " - Role_Id: " . $row["priv"]
                    . "<br>"
                    . "<br>"
                    . "<br>";

            }
        } else {
            echo " No Data ";
        }
    }

    // استدعاء بيانات محددة من الجدول
    public function getData() //=======لو عايز اعرض id واحد فقط امرر هنا $id
    {
    
        $sql = "SELECT * FROM $this->table_name";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            
            return $result->fetch_assoc();
        } 
    }
}

// انشاء object
$admins_table = new AdminsTable();

// عرض  البيانات من الجدول
$admins_table->showAllData(); 












?>" - Phone: " . $row["phone"]
                    . "<br>"
                    . " - Pri: " . $row["pri"]
                    . "<br>"
                    . " - Gender: " . $row["gender"]
                    . "<br>"
                    . " - Role_Id: " . $row["role_id"]
                    . "<br>"
                    . "<br>"
                    . "<br>";

            }
        } else {
            echo " No Data ";
        }
    }

    // استدعاء بيانات محددة من الجدول
    public function getData() //=======لو عايز اعرض id واحد فقط امرر هنا $id
    {
    
        $sql = "SELECT * FROM $this->table_name";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            
            return $result->fetch_assoc();
        } 
    }
}

// انشاء object
$admins_table = new AdminsTable();

// عرض  البيانات من الجدول
$adm