{include 'overall/header.tpl'}

</head>

<body>

	{include 'overall/nav.tpl'}
      
	<div class="container" style="margin-top: 100px;">
		<div class="row center">
			<div class="col m2 offset-m1">
				<a href='?type=new' class="waves-effect waves-light btn">Recientes</a>
			</div>
			<div class="col m2">
				<a href='?type=tops' class="waves-effect waves-light btn">Mejores</a>
			</div>
			<div class="col m2">
				<a href='?type=cat1' class="waves-effect waves-light btn">Categoria 1</a>
			</div>
			<div class="col m2">
				<a href='?type=cat2' class="waves-effect waves-light btn">Categoria 2</a>
			</div>
			<div class="col m2">
				<a href='?type=cat3' class="waves-effect waves-light btn">Categoria 3</a>
			</div>
		</div>

		<h1>{$title}</h1>

		<table class="striped">
			<thead>
				<tr class="row">
					<th class="col m6" data-field="id" style="margin: 10px 0">Título</th>
					<th class="col m4" data-field="name" style="margin: 10px 0">Creador</th>
					<th class="col m1 center" data-field="price" style="margin: 10px 0">Puntos</th>
					<th class="col m1 center" data-field="price" style="margin: 10px 0">Comentarios</th>
				</tr>
			</thead>
			<tbody>

				{if isset($posts)}
				{foreach from = $posts item = p}
				<tr class="row">
					<td class="col m6" style="margin: 10px 0"><a href="?view=post&id={$p.id}">{$p.title}</a></td>
					<td class="col m4" style="margin: 10px 0"><a href="?view=profile&id={$p.id_user}">{$p.user}</a></td>
					<td class="col m1 center" style="margin: 10px 0">{$p.points}</td>
					<td class="col m1 center" style="margin: 10px 0">{}</td>
				</tr>
				{/foreach}
				{else}
				<tr>
					<td>No se han encontrado resultados.</td>
				</tr>
				{/if}
			</tbody>
		</table>

		{if isset($posts)}
		<ul class="pagination center">
			{if ($page == 1)}
			<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
			{else}
			<li><a href="?type={$smarty.get.type}&page={$page - 1}"><i class="material-icons">chevron_left</i></a></li>
			{/if}

			{for $x=1 to $amountOfPages}
			{if $x == $page}
			<li class="waves-effect active"><a href="?type={$smarty.get.type}&page={$x}">{$x}</a></li>
			{else}
			<li class="waves-effect"><a href="?type={$smarty.get.type}&page={$x}">{$x}</a></li>
			{/if}
			{/for}

			{if ($page == $amountOfPages)}
			<li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
			{else}
			<li class="waves-effect"><a href="?type={$smarty.get.type}&page={$page + 1}"><i class="material-icons">chevron_right</i></a></li>
			{/if}
		</ul>
		{/if}
	</div>

	{include 'overall/footer.tpl'}

    
  </body>
</html>