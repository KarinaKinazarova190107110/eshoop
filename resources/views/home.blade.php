<html>
<body>
  
    @extends('layout')
@section('content')
    <div class="container">
        <h1 class="display-4 text-center" style="font-size: 3.0rem">{{ __('lang.welcome', ['Name' => 'Karina'])}}</h1>
        <h3 class="display-4 text-center" style="font-size: 2.0rem">{{ __('lang.title') }}</h3>
        <h4 class="display-4 text-center" style="font-size: 1.5rem">{{ __('lang.body')}}</h4>
        <br><br>
        <h4 class="display-4 text-center" style="font-size: 1.5rem">{{ __(
    "Абайдың ел ішіндегі есті жас Ерболмен достығы да осындай, азаматтың ат үстінде жүрген шақтарында тапқан рухани олжасы.")}}</h4>
      
    </div>
@endsection
</body>
</html>