<?php
$con = mysqli_connect("localhost","root","","db_arkademy");
$q = $con->query("SELECT persons.*FROM persons ORDER BY name ASC");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
      </div>
    </nav>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">name_persons</th>
              <th scope="col">name_hobbies</th>
            </tr>
          </thead>
          <?php
					while ($data = mysqli_fetch_assoc($q)) {
						$s = $con->query("SELECT *FROM hobbies WHERE person_id='$data[id]'");
					?>
          <tbody>
               <tr>
                  <td><?php echo $data['id']; ?></td>
                  <td><?php echo $data['name']; ?></td>
                  <td>
                    <?php
                    while ($datas = mysqli_fetch_assoc($s)) {
                      echo $datas['nameh'].',';
                    }
                    ?>
                  </td>
              </tr>
          <?php
					  }
					?>
          </tbody>
        </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>