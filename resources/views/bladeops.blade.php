<h2>{{10+20+30}}</h2>
<br>
<h2>{{10+20*30/40}}</h2>
<br>
<!--  we were getting there message Hello "Name" using double curly braces.-->
<br>

<!-- USING COUNT FUNCTION-->

<h1>Total Names are : {{count($name)}}</h1>
<br>

<!-- IF-ELSEIF-ELSE STATEMENT-->

@if(count($name)>5)
    <h1>There are More than 5 Names.</h1>
@elseif(count($name)<5)
    <h1>There are less than 5 Names.</h1>
@else
    <h1>There are 5 Names.</h1>
@endif

<br>

<!-- FOR LOOP -->

@for($i=1; $i<=10; $i++)
    <h1> {{$i*2}} </h1>
@endfor

<!-- FOREACH LOOP-->

@foreach($name as $nm)
    <h2>{{$nm}}</h2>
@endforeach

<!-- INCLUDING ONE VIEW IN OTHER VIEW-->

@include('simplebladeop')

<!-- PhP in JavaScript-->

@csrf

<script>
    var data = @json($name);
    console.log(data);
    console.log(data[2]);
</script>
