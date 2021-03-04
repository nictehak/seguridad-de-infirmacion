<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Tabla de Precios</title>
    <link rel="stylesheet"  href="{{url('/')}}/tabla/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/tabla/css/estilos.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/1.jpg" alt="" width="40">
            <a href="index.html">MediApp</a>
        </div>
    </header>


    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <div class="container">
   @foreach($netflix as $item)
    
        <div class="tabla">
            <div class="titulo">
                 
                <span class="fa fa-diamond"></span>
                <h2>{{ $item->nombre }}</h2>
            </div>

            <div class="precio">
                <h3>$ <span>{{ $item->costo }}</span></h3>
            </div>

            <div class="descripcion"> 
                <ul>
                
                    <li><i class="fa fa-check"></i>{{ $item->descripcion }}</li>
                    <li><i class="fa fa-check"></i> {{ $item->tiempo }}</li>
                </ul>
            </div>

            <div class="enlace">
                <a href="{{ url('/dinero') }}">Comprar</a>
            </div>
        </div>
       
        @endforeach
        </div>
    </div>


</body>
</html>
                          
                 
