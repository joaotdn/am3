<?php
$servicos = get_field('am3_servicos', 'option');
if($servicos):
?>
<nav class="lista-servicos small-12 float-left section">
	<div class="row small-up-1 medium-up-2 large-up-4">
		<?php
		$i = 0;
		foreach ($servicos as $servico):
			$i = $i+0.5;
		?>
		<figure class="column text-center vh wow zoomIn" data-wow-delay="<?php echo $i . 's'; ?>">
			<img src="<?php echo $servico['am3_servico_icone']; ?>" alt="<?php echo $servico['am3_servico_titulo']; ?>">
			<figcaption class="small-12 float-left">
				<h3><?php echo $servico['am3_servico_titulo']; ?></h3>
				<p><?php echo $servico['am3_servico_resumo']; ?></p>
			</figcaption>
		</figure>
		<?php
		endforeach;
		?>
	</div>
</nav>
<?php
endif;
?>
