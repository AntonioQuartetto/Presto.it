<x-template>
	<div class="kode-content">
		<div class="container">
			<div class="error-404">
				<h2>OPS!!!</h2>
				<div class="page-404">
					<p>404</p>
					<span>{{__('ui.errors404')}}</span>
				</div>
				<p>{{__('ui.errors404_2')}}</p>
				<a href="{{route('page.homepage')}}" class="go-back">{{__('ui.errors404_3')}}</a>
			</div>   
		</div>   
	</div>
</x-template>