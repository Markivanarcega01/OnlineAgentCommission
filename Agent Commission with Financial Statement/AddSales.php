<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="AddSales.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <link rel = "stlesheed" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Add Sales</title>
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
            <a href="AddAgent.php" class="sub-item">Add Agent</a>
            <a href="AddProject.php" class="sub-item">Add Project</a>
            <a href="#" class="sub-item">Add Sales</a>
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
            <a href="IncomeStatement.php" class="sub-item">Income Statement</a>
            <a href="CashFlow.php" class="sub-item">Cashflow</a>
        </div>
        </div>
            <div class="item"><a href="Accounts.php"><i class=""></i>Accounts</a></div>
            <div class="item"><a href="Settings.php"><i class=""></i>Settings</a></div>
         </div>
        </div>
</div>
<!--ADDING OF SALES TABLE-->
<div class="agenttbl" id="addprojecttbl">
    <!-- Add your table below this line -->
    <table class="agentdata">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>POSITION</th>
            <th>PROJECT/S</th>
            <th>UNIT TYPE</th>
            <th>BLOCK&LOT</th>
            <th>PRICE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <!-- Table data goes here -->
          <tr>
            <td>1</td>
            <td>Diether Aquino</td>
            <td>Agent</td>
            <td>Project 1</td>
            <td>House&Lot</td>
            <td>Blk4 L5</td>
            <td>4,000,000</td>
            <td>
                <button class="actionbtnedit">Edit</button>
                <button class="actionbtndelete">Delete</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Post Malone</td>
            <td>Agent</td>
            <td>Project 2</td>
            <td>House&lot</td>
            <td>Blk3 L1</td>
            <td>2,000,000</td>
            <td>
                <button class="actionbtnedit">Edit</button>
                <button class="actionbtndelete">Delete</button>
            </td>
        </tr>
        </tbody>
      </table>
       <!--JQUERY CDN LINK--> 
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"> </script>
        <!--Javascript Dropdown--> 
       <script src="index.js"></script>
    
</body>
</html>