<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

       <input type="text" id="stats" name="stats" value="online" disabled="">
       <input type="text" id="in_aula" name="in_aula" value="YES" disabled="">
       <button id="btn_online" type="button" class="btn btn-primary">Checar Online</button>
       <div id="mensagens">Clique para checar a quantidade de alunos online</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->