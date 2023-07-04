<x-template>
	<div class="kode-content">
		<div class="container">
			<div class="error-404">
				<h2>OPS!!!</h2>
				<div class="page-404">
					<p>404</p>
					<span>Pagina non trovata!!!</span>
				</div>
				<p>Non siamo riusciti a trovare la pagina che stai cercando. Prova un'altra pagina e verifica l'URL che hai inserito.</p>
				<a href="{{route('page.homepage')}}" class="go-back">Torna alla Home</a>
			</div>   
		</div>   
	</div>
</x-template>