<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container"><br><br>
<form method="POST" action="/produto/add" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Imagem</label>
    <input type="file" class="form-control" name="image">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Valor</label>
    <input step="any" type="number" class="form-control" name="price" id="exampleInputPassword1" placeholder="Valor">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>