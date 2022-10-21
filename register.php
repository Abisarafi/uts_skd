<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="bg-light">
        <div class="bd-cheatsheet container-fluid bg-secondary">

            <section id="forms">
                <article class="my-3" id="overview">
                    <div style="height: 100vh; display: flex; justify-content: center; align-items:center">
                        <div class="bd-example card" style="padding: 30px 20px;">
                            <h1>Register Form</h1>
                            <form action="accept_register.php" method="POST">
                            <div class="mb-3">
                                <label  class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Sudah punya akun?</label>
                                <a href="index.php">klik disini</a>
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </article>
        </section>

        </div>
      
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>