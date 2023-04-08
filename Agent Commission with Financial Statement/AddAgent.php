<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="AddAgent.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <link rel = "stlesheed" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Add Agent</title>
</head>
<body>
        <div class="sidebar">
            <!--logo Grand Casiana-->
            <div class="profile">
                <img src="gcrlogo.jpg" alt="">  
            </div>
        <!--Menus-->
         <div class="menu">
            <div class="item"><a href="Dashboard.php"><i class=""></i>Dashboard</a></div>
            <div class="item"><a href="#" class="sub-menu-btn"><i class=""></i>Agent
            <!--drop down Agent-->
            <!--dropdown arrow-->
            <i class="fas fa-angle-right dropdown"></i>
            </a>
        <div class="sub-menu">
            <a href="#" class="sub-item">Add Agent</a>
            <a href="AddProject.php" class="sub-item">Add Project</a>
            <a href="AddSales.php" class="sub-item">Add Sales</a>
            <a href="Commission.php" class="sub-item">Commission</a>
        </div>
        </div>
            <div class="item"><a href="#" class="sub-menu-btn"><i class=""></i>Financial Statement
            <!--drop down financial Statement-->
            <!--dropdown arrow-->
            <i class="fas fa-angle-right dropdown"></i>
            </a>
        <div class="sub-menu">
            <a href="JournalEntry.php" class="sub-item">Journal Entry</a>
            <a href="GeneralLedger.php" class="sub-item">General Ledger</a>
            <a href="TrialBalance.php" class="sub-item">Trial Balance</a>
        </div>
        </div>
            <div class="item"><a href="#" class="sub-menu-btn"><i class=""></i>Reports
            <!--drop down Reports-->
            <!--dropdown arrow-->
            <i class="fas fa-angle-right dropdown"></i>
            </a>
        <div class="sub-menu">
            <a href="BalanceSheet.php" class="sub-item">Balance Sheet</a>
            <a href="TrialBalance.php" class="sub-item">Income Statement</a>
            <a href="CashFlow.php" class="sub-item">Cashflow</a>
        </div>
        </div>
            <div class="item"><a href="Accounts"><i class=""></i>Accounts</a></div>
            <div class="item"><a href="Settings"><i class=""></i>Settings</a></div>
         </div>
        </div>
</div>
<!--ADDING OF AGENT TABLE-->
<div class="agenttbl" id="addagenttbl">
    <!-- Add your table below this line -->
    <table class="agentdata">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>MOBILE NO.</th>
            <th>ADDRESS</th>
            <th>POSITION</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <!-- Table data goes here -->
          
          <?php
            require 'connection.php';
            $sql = "SELECT * FROM agent";
            $result = $conn-> query ($sql);

            if ($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){?>
            
            <tr> 
                <td><?php echo $row['agent_id']; ?></td> 
                <td><?php echo $row['name']; ?></td> 
                <td><?php echo $row['mobile_number']; ?></td> 
                <td><?php echo $row['address']; ?></td> 
                <td><?php echo $row['position']; ?></td>
                <td>  
                    <form action="" method="POST">
                    <input type="hidden" name="id" value=<?php echo $row['agent_id']; ?>>
                    <button class="actionbtnedit" data-modal="modal1">Edit</button>
                    <button class="actionbtndelete" name="delete" type="submit">Delete</button>  
                    </form>
                </td>
            </tr>
            <?php
                }
            }
            ?>
            <!-- <button class="actionbtnedit">Edit</button>
                <button class="actionbtndelete">Delete</button>-->
        </tbody>
      </table>
    </div>
    <!--Add agent popup-->
    <div class="center">
      <button class="popbtn" id="show-login">Add Agent  + </button>
      </div>
      <div class="popup">
      <div class="close-btn">&times;</div>
      <div class="form">
      <h2>Add Agent</h2>
      <div class="form-element">
      <!--form starts here-->
      <form action="" method = "post">
      <label for="name">Name</label>
      <input type="text" id="name" placeholder="Enter Name" name="name">
      </div>
      <div class="form-element">
          <label for="mobilenumber">Mobile Number</label>
          <input type="text" id="mobilenumber" placeholder="Enter Mobile Number" name="mobilenumber">
          </div>
              <div class="form-element">
                  <label for="address">Address</label>
                  <input type="text" id="address" placeholder="Enter Address" name="address">
                  </div>
      <div class="form-element">
      <label for="position">Position</label>
      <br>
      <br>
      <input class ="cb" type="checkbox" id="agent" name="position" value="a">
      <label class="checkboxlbl" for="">Agent</label>
      <input class ="cb" type="checkbox" id="broker" name="position" value="b">
      <label class="checkboxlbl" for="">Broker</label>
      </div>
      <div class="form-element">
      <br>
      <button class="donebtn" type="submit" name="submit">Done</button>
      <button class="backbtn">Back</button>
      </form>
      </div>
      
      <!-- For insert data -->
      <?php
      if (isset($_POST["submit"])){
        $name = $_POST["name"];
        $mobilenumber = $_POST["mobilenumber"];
        $address = $_POST["address"];
        $position = $_POST["position"];

        $query = "INSERT INTO agent VALUES('','$name','$mobilenumber','$position','$address')";
        mysqli_query($conn, $query);
        //echo "<script>alert('Data inserted');</script>";
      }
      ?>
      <?php
      if (isset($_POST["delete"])){
        $id = $_POST["id"];
        $query = "DELETE FROM agent WHERE agent_id = '$id'";  
        mysqli_query($conn,$query);  
        //echo "<script>alert('Data deleted');</script>";
      }
      ?>
      <?php
      if (isset($_POST["edit"])){
        $id = $_POST["id"];
        $query = "SELECT * FROM agent WHERE agent_id = '$id'";  
        mysqli_query($conn,$query);  
        //echo "<script>alert('Data deleted');</script>";
      }
      ?>
      
       <!--JQUERY CDN LINK--> 
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"> </script>
        <!--Javascript Dropdown--> 
       <script src="index.js"></script>
       <script src="popup.js"></script>
       <!--Table Refresh-->
       <script type="text/javascript">
        function refreshTable(){
            $('#addagenttbl').load(location.href+ " #addagenttbl");
        }
        </script>
</body>
</html>
