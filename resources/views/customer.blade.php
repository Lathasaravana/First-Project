@if($isShow)

    <h1>I am Visible</h1>

@else
    <h2>Sorry</h2>
@endif

@for($i=0;$i<=10;$i++)
{{$i}}

@endfor

@foreach($customers as $customer)
{{$customer}}
@endforeach