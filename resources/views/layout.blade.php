<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <style>
        .divider-text {
       position: relative;
       text-align: center;
       margin-top: 15px;
       margin-bottom: 15px;
   }
   .divider-text span {
       padding: 7px;
       font-size: 12px;
       position: relative;   
       z-index: 2;
   }
   .divider-text:after {
       content: "";
       position: absolute;
       width: 100%;
       border-bottom: 1px solid #ddd;
       top: 55%;
       left: 0;
       z-index: 1;
   }
   .btn-facebook {
       background-color: #405D9D;
       color: #fff;
   }
   .btn-twitter {
       background-color: #42AEEC;
       color: #fff;
   }
       </style>
   

</head>
<body>

        @yield('content')
    
</body