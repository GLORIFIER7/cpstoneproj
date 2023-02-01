<?php
// :: = scope resolution operator

//public - the property or method can be accessed from everywhere. This is default

// protected - the property or method can be accessed within the class and by classes derived from that class

// private - the property or method can ONLY be accessed within the class


//class is a template for objects, and an object is an instance of class.

Class MyInventory{
    private $server = "mysql:host=localhost;dbname=db";
    private $user = "root";
    private $password = "p@SSW0RD,)";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function openConnection()
    {
        try
        {

           $this->con = new PDO($this->server, $this->user, $this->password, $this->options);  
           return $this->con;
           
        }catch(PDOException $e)
        {
            echo "Connection failed:". $e->getMessage();
        }
    }

    public function closeConnection()
    {
        $this->con = null;
    }


    public function login()
    {
        if(isset($_POST['submit'])){
            $password = md5($_POST['password']);
            $username = $_POST['user_name'];
            
            $connection = $this->openConnection();

            try {
                $stmt = $connection->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
                $stmt->execute([$username, $password]);
                $total = $stmt->rowCount();
                echo ($total);
                    if($total > 0){
                        echo header("Location: dashboard.php");
                    }else{
                        echo "Login Failed!";
                    }

            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

//User section start here

    public function add_user()
    {
        if(isset($_POST['add'])){

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['user_name'];
            $pass = md5($_POST['password']);
            $status = $_POST['status'];
            $user_level = $_POST['user_level'];

            $connection = $this->openConnection();

        try {
            if($this->check_user_exist($username) == 0){
                $stmt = $connection->prepare("INSERT INTO users (`first_name`,`last_name`,`username`,`password`,`status_id`,`user_lvl_id`) VALUES (?,?,?,?,?,?)");
                $stmt->execute([$first_name, $last_name, $username, $pass, $status, $user_level]);
                echo '<script language="javascript">';
                echo 'alert("Username Successfully Added!")';
                echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("Username Already Exists!")';
                echo '</script>';
            }

            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
     }

     public function check_user_exist($username)
     {
        $connection = $this->openConnection();

        try {
            $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $total = $stmt->rowCount();
            
            return $total;

        } catch(PDOException $e){
            echo $e->getMessage();
        }
     }

     public function getUser()
     {
         $connection = $this->openConnection();

        try{

            $stmt = $connection->prepare("SELECT * FROM users");
            $stmt -> execute();
    
           $users = $stmt->fetchAll();
            $userCount = $stmt->rowCount();
               echo $userCount;
            if($userCount > 0){
                return $users;
                echo "$userCount";
            }else{
                return 0;
            }

        }catch(PDOException $e){
                echo $e->getMessage();
        }
     }

     public function getTotalUsers(){
        $connection = $this->openConnection();

        try{
            $stmt = $connection->prepare("SELECT * FROM users");
            $stmt -> execute();

            $userCount = $stmt->rowCount();
            echo $userCount;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
     }
    
//User section end here


//Supplier section Start here

public function getSuppliers()
     {
         $connection = $this->openConnection();
    try{
        $stmt = $connection->prepare("SELECT * FROM suppliers");
        $stmt -> execute();
        $suppliers = $stmt->fetchAll();
        $suppliersCount = $stmt->rowCount();
         if($suppliersCount > 0){
             return $suppliers;
         }else{
             return 0;
         }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
        
     }

     public function check_supplier_exist($email)
     {
        $connection = $this->openConnection();

        try {
            $stmt = $connection->prepare("SELECT * FROM suppliers WHERE email = ?");
            $stmt->execute([$email]);
            $total = $stmt->rowCount();
            
            return $total;

        } catch(PDOException $e){
            echo $e->getMessage();
        }
     }


public function getTotalSuppliers(){
    $connection = $this->openConnection();

    try{
        $stmt = $connection->prepare("SELECT * FROM suppliers");
        $stmt -> execute();

        $supplierCount = $stmt->rowCount();
        echo $supplierCount;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
 }

 public function add_supplier()
 {
     if(isset($_POST['add'])){

         $full_name = $_POST['name'];
         $phone_number = $_POST['phone_number'];
         $email = $_POST['email'];
         $status = $_POST['status'];
         $tax = $_POST['tax_number'];
         $shipping_address = $_POST['shipping_address'];
         $billing_address = $_POST['billing_address'];

         $connection = $this->openConnection();

     try {
         if($this->check_supplier_exist($email) == 0){
             $stmt = $connection->prepare("INSERT INTO suppliers (`company_name`,`contact_no`,`email`,`status_id`,`tin_number`,`shipping_address`,`billing_address`) VALUES (?,?,?,?,?,?,?)");
             $stmt->execute([$full_name, $phone_number, $email, $status, $tax, $shipping_address,$billing_address]);
             echo '<script language="javascript">';
             echo 'alert("Supplier Successfully Added!")';
             echo '</script>';
         }else{
             echo '<script language="javascript">';
             echo 'alert("Supplier Already Exists!")';
             echo '</script>';
         }

         } catch(PDOException $e){
             echo $e->getMessage();
         }
     }
  }


//Supplier section end here

//Categories section Start here

public function getTotalCategory(){
    $connection = $this->openConnection();

    try{
        $stmt = $connection->prepare("SELECT * FROM categories");
        $stmt -> execute();

        $categoryCount = $stmt->rowCount();
        echo $categoryCount;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
 }


 public function getCategory()
{
         $connection = $this->openConnection();
    try{
        $stmt = $connection->prepare("SELECT * FROM categories");
        $stmt -> execute();
        $items = $stmt->fetchAll();
        $categoryCount = $stmt->rowCount();
         if($categoryCount > 0){
             return $items;
         }else{
             return 0;
         }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
        
}

public function add_category()
 {
     if(isset($_POST['add'])){

         $category_name = $_POST['category_name'];
         $description = $_POST['description'];

         $connection = $this->openConnection();

     try {
         if($this->check_category_exist($category_name ) == 0){
             $stmt = $connection->prepare("INSERT INTO categories (`category_name`,`description`) VALUES (?,?)");
             $stmt->execute([$category_name, $description]);
             echo '<script language="javascript">';
             echo 'alert("Category Successfully Added!")';
             echo '</script>';
         }else{
             echo '<script language="javascript">';
             echo 'alert("Category Already Exists!")';
             echo '</script>';
         }

         } catch(PDOException $e){
             echo $e->getMessage();
         }
     }
  }

  public function check_category_exist($category_name )
  {
     $connection = $this->openConnection();

     try {
         $stmt = $connection->prepare("SELECT * FROM categories WHERE category_name = ?");
         $stmt->execute([$category_name ]);
         $total = $stmt->rowCount();
         
         return $total;

     } catch(PDOException $e){
         echo $e->getMessage();
     }
  }

//Category section end here

//Items section Start here


 public function getItems()
{
         $connection = $this->openConnection();
    try{
        $stmt = $connection->prepare("SELECT * FROM items");
        $stmt -> execute();
        $items = $stmt->fetchAll();
        $itemsCount = $stmt->rowCount();
         if($itemsCount > 0){
             return $items;
         }else{
             return 0;
         }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
        
}

public function add_items()
 {
     if(isset($_POST['add'])){

         $item_name = $_POST['item_name'];
         $item_description = $_POST['item_description'];
         $unit = $_POST['unit'];
         $category_id = $_POST['category_id'];
         $sku = $_POST['sku'];
         $stock_limit = $_POST['stock_limit'];
    
         $connection = $this->openConnection();

     try {
         if($this->check_item_exist($item_name ) == 0){
             $stmt = $connection->prepare("INSERT INTO items (`item_name`,`item_description`,`unit`,`category_id `,`sku`,`stock_limit`) VALUES (?,?,?,?,?,?,?)");
             $stmt->execute([$item_name, $item_description, $unit, $category_id, $sku, $stock_limit]);
             echo '<script language="javascript">';
             echo 'alert("Item Successfully Added!")';
             echo '</script>';
         }else{
             echo '<script language="javascript">';
             echo 'alert("Item Already Exists!")';
             echo '</script>';
         }

         } catch(PDOException $e){
             echo $e->getMessage();
         }
     }
  }

  public function check_item_exist($item_name)
  {
     $connection = $this->openConnection();

     try {
         $stmt = $connection->prepare("SELECT * FROM items WHERE item_name = ?");
         $stmt->execute([$item_name]);
         $total = $stmt->rowCount();
         
         return $total;

     } catch(PDOException $e){
         echo $e->getMessage();
     }
  }

//Items section end here


//Status section Start here

 public function getStatus()
{
         $connection = $this->openConnection();
    try{
        $stmt = $connection->prepare("SELECT * FROM status");
        $stmt -> execute();
        $status = $stmt->fetchAll();
        $statusCount = $stmt->rowCount();
         if($statusCount > 0){
             return $status;
         }else{
             return 0;
         }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
        
}

public function add_status()
 {
     if(isset($_POST['add'])){

         $status_name = $_POST['status_name'];

         $connection = $this->openConnection();

     try {
         if($this->check_category_exist($status_name ) == 0){
             $stmt = $connection->prepare("INSERT INTO status (`status_name`) VALUES (?)");
             $stmt->execute([$status_name]);
             echo '<script language="javascript">';
             echo 'alert("Status Successfully Added!")';
             echo '</script>';
         }else{
             echo '<script language="javascript">';
             echo 'alert("Status Already Exists!")';
             echo '</script>';
         }

         } catch(PDOException $e){
             echo $e->getMessage();
         }
     }
  }

  public function check_status_exist($status_name )
  {
     $connection = $this->openConnection();

     try {
         $stmt = $connection->prepare("SELECT * FROM status WHERE status_name = ?");
         $stmt->execute([$status_name ]);
         $total = $stmt->rowCount();
         
         return $total;

     } catch(PDOException $e){
         echo $e->getMessage();
     }
  }

//Status section end here

}

$invt = new MyInventory();
