<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="dashboard">
    <div class="sidebar">
      <a class="brand" href="#">Dashboard</a>
      <ul class="sidebar-menu">
        <li><a href="#" class="active">Current Projects</a></li>
        <li><a href="#">Restore</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Rollback</a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><hr></li>
            <li><a href="#">Something else here</a></li>
          </ul>
        </li>
        <li><a href="#" class="disabled">Schedule backup</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Logout</a></li>
        
      </ul>
    </div>
    <div class="content">
      <input type="text" placeholder="Search..">
      <h1>Welcome to the Dashboard</h1>
      
  </div>
  <script>
    function logout() {
      // Redirect the user back to the login page
      window.location.href = "login.php";
    }
  </script>
</body>
</html>
