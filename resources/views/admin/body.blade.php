<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resto-Admin</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style>
       
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            max-width: 1200px;
            width: 100%;
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .card .icon {
            font-size: 36px;
            color: #3C91E6;
        }
        .card .text h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #342E37;
        }
        .card .text p {
            color: #AAAAAA;
        }
    </style>
</head>

<body>
 

<div class="body-wrapper">
<div class="container">
          <div class="card">
              <div class="icon">&#128100;</div>
              <div class="text">
                  <h3>{{$user}}</h3>
                  <p>Users</p>
              </div>
          </div>
          <div class="card">
              <div class="icon">&#128722;</div>
              <div class="text">
                  <h3>{{$product}}</h3>
                  <p>Total Products</p>
              </div>
          </div>
          <div class="card">
              <div class="icon">&#128179;</div>
              <div class="text">
                  <h3>{{$order}}</h3>
                  <p>Total Orders</p>
              </div>
          </div>
      </div>
    </div>
    </body>
    </html>