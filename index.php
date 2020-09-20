<!doctype html>
<html lang="en">
  <head>
    <title>Live Search Jquery + PHP + Mysql + Json</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="asset/style.css">
    <script src="https://kit.fontawesome.com/bceccd620c.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
               <!-- Input busca-->
     <div class="container-fluid mb-lg-5 mt-lg-5">
       <div class="row">
        <div class="col-sm-12 text-center my-lg-4 py-lg-4">
          <h2 class="d-lg-none d-md-none display-5">Busque o NCM Para Cadastrar Seu Produto</h2>
          <h2 class="d-none mb-lg-4 d-md-block display-3">Busque o NCM Para Cadastrar Seu Produto</h2>
          <h3>Tabela de NCM 2019/2020</h3>
         </div>
       </div>
       <div class="row font-roboto">
         <div class="col-sm-3"></div>
         <div class="col-sm-6 col-md-6">
          <div class="p-2 bg-light rounded rounded-pill shadow-sm mb-4">
            <div class="input-group">
              <input type="search" id="search" placeholder="Digite a Descrição ou NCM" aria-describedby="button-addon1" class="form-control border-0 bg-light">
              <div class="input-group-append">
                <button id="button" onclick="myFunction()" type="submit" class="btn btn-link text-primary" data-toggle="tooltip" data-placement="top" title="Copiar NCM"><i class="far fa-copy"></i></button>
              </div>              
          </div><ul class="list-group" id="result"></ul>
         </div><div class="alert alert-light" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>NCM Copiado com sucesso! </strong>
            </div>
            <div class="row">
              <div class="col text-center">
                
              </div>
            </div>
       </div> 
       <div class="col-sm-3"></div>
     </div> 
     <!-- fim input busca-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="asset/all.js"></script>
  </body>
</html>