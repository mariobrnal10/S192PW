@extends('layouts.plantilla')

@section('titulo', 'Home')

@section('css-')
    <link rel="stylesheet" href="">
@endsection

@section('Inicio')
<div class="container vh-100 d-flex align-items-center">
  <div class="row w-100">
    <!-- Título General -->
    <div class="col-12 text-center  mb-4" style="color: #fff;">
      <h5 class="card-title">Noticias Del Dia</h5>
    </div>
    
    <!-- Columna izquierda -->
    <div class="col d-flex justify-content-start">
      <div class="card" style="width: 25rem;">
        <img src="{{asset('img/noticia1.png')}}" class="card-img-top" alt="img">
        <div class="card-body">
          <h6 class="card-title">La escritora surcoreana Han Kang ganó el premio Nobel de Literatura</h6>
          <p class="card-text">El Premio Nobel de Literatura 2024 fue para la escritora surcoreana Han Kang. La Academia sueca le entregó el galardón “por su intensa prosa poética que confronta traumas históricos y expone la fragilidad de la vida humana”. Considera además que su obra se caracteriza por una doble exposición del sufrimiento, como tormento mental y físico, y por sus conexiones con el pensamiento oriental.</p>
          <a href="https://tn.com.ar/internacional/2024/10/10/la-escritora-surcoreana-hang-kan-gano-el-premio-nobel-de-literatura/" class="btn btn-dark">Mas Información</a>
        </div>
      </div>
    </div>
    
    <!-- Columna central -->
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 25rem;">
        <img src="{{asset('img/noticia2.png')}}" class="card-img-top" alt="img">
        <div class="card-body">
          <h6 class="card-title">La literatura comprometida de Manuel Rivas se hace con el Premio Nacional de las Letras 2024</h6>
          <p class="card-text">El popular escritor y periodista coruñés Manuel Rivas, creador de una literatura marcada por el compromiso social y medioambiental además de por la defensa de la lengua y la cultura gallegas, ha sido galardonado este martes con el Premio Nacional de las Letras Españolas correspondiente al año 2024. No es el primer Premio Nacional con el que se hace el autor, que ya se había llevado el de Narrativa en 1996 por su obra ¿Qué me quieres amor?. En este caso, lo que se reconoce es toda una trayectoria literaria que en el caso de Rivas ha estado sembrada de premios importantes: además de los citados, y entre otros muchos, tiene en su haber el Torrente Ballester, varios premios de la Crítica, la Medalla de Oro de las Bellas Artes y hasta un Goya por la adaptación, a seis manos con Rafael Azcona y José Luis Cuerda, de varios de sus cuentos para la película La lengua de las mariposas (1999).</p>
          <a href="https://www.laopiniondezamora.es/cultura/2024/10/29/manuel-rivas-premio-nacional-letras-espanolas-2024-110810108.html" class="btn btn-dark">Mas Información</a>
        </div>
      </div>
    </div>
    
    <!-- Columna derecha -->
    <div class="col d-flex justify-content-end">
      <div class="card" style="width: 25rem;">
        <img src="{{asset('img/noticia3.png')}}" class="card-img-top" alt="img">
        <div class="card-body">
          <h6 class="card-title">La Feria del Libro de Sevilla reúne a los grandes nombres de la literatura en su edición 2024</h6>
          <p class="card-text">La edición de la Feria del Libro de Sevilla, que se celebra del 24 de octubre al 3 de noviembre de 2024 en los Jardines de Murillo, va a contar con la presencia de alrededor de un centenar de escritores consagrados de la literatura española e hispanoamericana. El evento, que traslada su sede a esta nueva ubicación, ofrece una amplia programación que incluye lecturas teatralizadas, coloquios, encuentros, presentaciones, mesas redondas, firmas y conciertos, junto a actividades destinadas al público infantil y familiar.</p>
          <a href="https://www.diariodesevilla.es/ocio/feria-libro-sevilla-reune-grandes_0_2002593592.html" class="btn btn-dark">Mas Información</a>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection