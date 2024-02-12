<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('material_dashboard/assets/img/LogoPln.png'); ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('material_dashboard/assets/img/LogoPln.png'); ?>">
  <title>
    Monitoring
  </title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('material_dashboard/assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('material_dashboard/assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('material_dashboard/assets/img/bg.png'); ?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url('material_dashboard/assets/css/argon-dashboard.css?v=2.0.4'); ?>" rel="stylesheet" />
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* Add the background image */
        background-image: url('<?php echo base_url('material_dashboard/assets/img/plndepan3.jpeg'); ?>');
        background-size: cover;
        background-position: center;
        height: 100vh; /* Ensure the body covers the entire viewport height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    #logo {
        height: 50px;
       
    }

    /* Center the text */
.centered-text {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;

}

.centered {
    display: flex;
    justify-content: center;
    align-items: center;
}


    #login-button {
        border: none;
        background-color: #0066cc;
        cursor: pointer;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        color: #fff;
        font-size: 16px;
        margin-bottom: 20px; /* Add margin to create space between text and button */
    }

    #login-button:hover {
        background-color: #0052a3;
    }

    /* Center the text */
    h1 {
        color: white;
        text-align: center;
    }

  </style>
</head>
<body>
    <header>
        <img src="material_dashboard/assets/img/LogoPln.png" alt="Company Logo" id="logo">
    </header>
    <div class="centered-text">
    <h1>Welcome to the Information System</h1>
    </div>
       
    <div class="centered-text">
        <a id="login-button" a href="/login">Login</a>
    </div>
</body>
</html>