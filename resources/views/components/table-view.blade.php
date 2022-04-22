
<div>

	@for($a = 1; $a < 12; $a++)
	
	 	<h2>{{ $a }} x table:</h2>
	 	
	 	@for($b = 1; $b < 13; $b++)
	 	
	 		<x-one-x-table :firstNum="$a" :secondNum="$b" />
	 		<br/>
	 		
	 	@endfor
	 	
	@endfor
 	
</div>
