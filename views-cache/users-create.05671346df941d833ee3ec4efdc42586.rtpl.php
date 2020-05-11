<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Usuários
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/aluno">Usuários</a></li>
    <li class="active"><a href="/admin/users/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/alunos/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group">
              <label for="cpf">Cpf</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o cpf">
            </div>
            <div class="form-group">
              <label for="turma">Turma</label>
              <input type="tel" class="form-control" id="turma" name="turma" placeholder="Informe a turma">
            </div>
            <div class="form-group">
              <label for="unidade">Unidade</label>
              <input type="text" class="form-control" id="unidade" name="unidade" placeholder="Informe a unidade">
            </div>
          </div>

          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->