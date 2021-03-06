<!DOCTYPE html>
<!-- saved from url=(0060)https://getbootstrap.com/docs/4.1/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/pw3.ico">

    <title>PW3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/77f3dd62a7.js"> crossorigin="anonymous"</script>
  </head>

  <body class="bg-secondary">



    <main role="main" class="container">

      <div class="row">
          <div class="col-sm-4 offset-sm-4 border bg-white" >
              <h1 class="text-center">
                  <a href="index.php">PW3</a>
              </h1>
              <p class="text-center">
                Crie sua conta gratuita
              </p>

              <form action="" method="">

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                 <input type="text" name="nome" class="form-control" placeholder="Nome completo" aria-label="Nome completo" aria-describedby="basic-addon1">
               </div>

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                </div>
                 <input type="mail" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
               </div>

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                </div>
                 <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
               </div>

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                </div>
                 <input type="password" name="senha" class="form-control" placeholder="Repita a senha" aria-label="Repita a senha" aria-describedby="basic-addon1">
               </div>

               <div class="form-group form-check">
                 <input type="checkbox" name="termos" class="form-check-input" id="termos">
                 <label class="form-check-label" for="exampleCheck1">
                     Aceitar os <a href="#" data-toggle="modal" data-target="#modalTermos">termos</a>
                 </label>
             </div>

               <div class="form-group text-right">
                   <button class="btn btn-primary">Cadastrar</button>
               </div>

               <p>
                   <a href="login.php">J?? tenho uma conta</a>
               </p>

              </form>
          </div>
      </div>

    </main><!-- /.container -->

 
<!-- Modal -->
<div class="modal fade" id="modalTermos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Termos PW3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus qui, eaque accusamus soluta, delectus debitis explicabo eos aut, voluptatem sunt numquam atque! Debitis, officia similique vitae velit tempore possimus praesentium!
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Et odit officiis, dolore tempore eius esse facere maiores fuga sequi quod dicta praesentium reiciendis omnis rerum rem ratione consectetur, temporibus eos?
    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
       
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js.download"></script>  
    <script src="js/bootstrap.min.js.download"></script>
  

</body></html>