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
        <form role="form" action="/admin/usuarios/<?php echo htmlspecialchars( $aluno["cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
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
              <label for="cpf">Email:</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Informe o email"  value="<?php echo htmlspecialchars( $aluno["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="instagram">Instagram</label>
              <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram"  value="<?php echo htmlspecialchars( $aluno["instagram"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="turma">Turma</label>
              <input type="text" class="form-control" id="turma" name="turma" placeholder="Informe a turma"  value="<?php echo htmlspecialchars( $aluno["turma"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="unidade">Unidade</label>
              <input type="text" class="form-control" id="unidade" name="unidade" placeholder="Informe a unidade" value="<?php echo htmlspecialchars( $aluno["unidade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="turmaextra">Turma Extra</label>
              <input type="text" class="form-control" id="turmaextra" name="turmaextra" placeholder="Acesso Extra" value="<?php echo htmlspecialchars( $aluno["turmaextra"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="pago">Pago</label>
              <input type="text" class="form-control" id="pago" name="pago" placeholder="Aluno em dias" value="<?php echo htmlspecialchars( $aluno["pago"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="text" class="form-control" id="senha" name="senha" placeholder="senha" value="<?php echo htmlspecialchars( $aluno["senha"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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