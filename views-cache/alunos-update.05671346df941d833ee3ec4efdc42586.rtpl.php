<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuário</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/alunos/<?php echo htmlspecialchars( $aluno["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome" value="<?php echo htmlspecialchars( $aluno["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="cpf">Cpf</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o cpf"  value="<?php echo htmlspecialchars( $aluno["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="turma">Turma</label>
              <input type="text" class="form-control" id="turma" name="turma" placeholder="Informe a turma"  value="<?php echo htmlspecialchars( $aluno["turma"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="unidade">Unidade</label>
              <input type="text" class="form-control" id="unidade" name="unidade" placeholder="Informe a unidade" value="<?php echo htmlspecialchars( $aluno["unidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->