<?php 


include "db.php";

		$consulta = "SELECT * FROM tb_mensagens";
		$executar = $conexao->query($consulta);
		while($linha = $executar->fetch_array()):
		?>	
			<div id="dados-chat">
				<span style="color: #1C62C4;font-weight: bold;font-size: 13px;"><?php echo formatarNome($linha['nome']); ?>:</span>
				<span style="color: black;"><?php echo $linha['mensagem']; ?> </span>
			</div>
		<?php endwhile; ?>