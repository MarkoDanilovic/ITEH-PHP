<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.css"/>
</head>
<body>
    
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">ITEH2021/22</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <button type="button" class="btn btn-dark m-1 float-right" data-toggle="modal" data-target="#addModal">
                Novi Korisnik
        </button>
      </li>
    </ul>
  </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center text-dark font-weight-normal my-3">PRVI DOMACI PHP OOP MySQL</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-2 text-proimary"></h4>
        </div>
        <div class="col-lg-6">
        </div>
    </div>
    <hr class="my-1">   
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive" id="showUser">
            </div>
        </div>
    </div>
</div>



<!-- Add New User Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Dodaj novog korisnika</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <form action="" method="post" id="form-data">
                <div class="form-group">
                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                </div>

                <div class="form-group">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>

                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="E-Mail" required>
                </div>

                <div class="form-group">
                    <input type="text" name="room" class="form-control" placeholder="Room" required>
                </div>

                <div class="form-group">
                    <input type="submit" name="insert" id="insert" value="Dodaj korisnika" class="btn btn-danger btn-block">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>



  <!-- Edit User Modal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Izmeni korisnika</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <form action="" method="post" id="edit-form-data">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <input type="text" name="fname" class="form-control" id="fname" required>
                </div>

                <div class="form-group">
                    <input type="text" name="lname" class="form-control" id="lname"  required>
                </div>

                <div class="form-group">
                    <input type="text" name="email" class="form-control" id="email" required>
                </div>

                <div class="form-group">
                    <input type="text" name="room" class="form-control" id="room" required>
                </div>

                <div class="form-group">
                    <input type="submit" name="update" id="update" value="Izmeni korisnika" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script type="text/javascript">

</script>
</body>
</html>