@extends('layout')

@section('content')

  <div class="container">
    {{-- Carreras de interes --}}
    <section class="row py-5">
      <div class="col-12 mb-3 ">
        <div class="d-flex justify-content-between" >
          <span class="font-weight-bold h6 i-text-primary">Tus carreras de interés</span>
          <span class="i-text-primary font-weight-bold i-text-primary ">ver todas</span>
        </div>
      </div>
      
      @php
        $titles = [
          ['name' => 'Ingenieria industrial', 'color' => 'green-blue'],
          ['name' => 'Medicina', 'color' => 'blue'],
          ['name' => 'Administración', 'color' => 'red'],
        ]
      @endphp
      @foreach ($titles as $title)
        <div class="col-4">
          @include('components.card', ['title' => $title])
        </div>
      @endforeach
      
    </section>
  
    {{-- Facultades --}}
    <section class="row py-5 mb-2">
      <div class="col-12 mb-3 ">
        <div class="d-flex justify-content-between" >
          <span class="font-weight-bold h6 i-text-primary">Facultades</span>
          <span class="i-text-primary font-weight-bold i-text-primary ">ver todas</span>
        </div>
      </div>
      
      @php
        $titles = [
          ['name' => 'Ingeniería', 'color' => 'green-blue'],
          ['name' => 'Ciencias de la Salud', 'color' => 'blue'],
          ['name' => 'Ciencias Económicas y Empresariales', 'color' => 'red'],
          ['name' => 'Humanidades', 'color' => 'pourple'],
          ['name' => 'Arquitectura y Diseño', 'color' => 'orange'],
          ['name' => 'Ciencias Ambientales y Agrícolas', 'color' => 'green'],
          ['name' => 'Ciencias Jurídicas y Sociales', 'color' => 'primary'],
          ['name' => 'Ciencias Jurídicas y Políticas', 'color' => 'brown'],
          ['name' => 'Teología', 'color' => 'secondary'],
        ]
      @endphp
      @foreach ($titles as $title)
        <div class="col-4 mb-5">
          @include('components.card-single', ['title' => $title])
        </div>
      @endforeach
      
    </section>
  </div>

  {{-- Call action --}}
  <section class="d-flex justify-content-around align-items-center i-bg-primary w-100 py-3">
    <div class="">
      <h3 class="text-white">¿Quieres saber tus siguientes pasos?</h3>
      <span class="font-weight-bold i-text-secondary h6">
        Entérate aquí de todo lo que necesitas
      </span>
    </div>

    <button class="btn-call-action ">
      Siguientes pasos
    </button>
  </section>

  <div class="container mt-5 mb-4">
    <section class="row mt-3">
      
      <div class="col-6">
        <div class="d-flex justify-content-between" >
          <span class="font-weight-bold h6 i-text-primary">Próximos eventos</span>
          <span class="i-text-primary font-weight-bold i-text-primary ">Ver agenda</span>
        </div>
        <div class="panel-container border rounded">
          <div class="panel ">
             @foreach (range(1,6) as $item)
               @include('components.panel-event')
             @endforeach
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="d-flex justify-content-between" >
          <span class="font-weight-bold h6 i-text-primary">Unidades</span>
          <span class="i-text-primary font-weight-bold i-text-primary ">Ver más unidades</span>
        </div>
        <div class="panel-container border rounded ">
          <div class="panel p-2 px-3 ">
             @foreach (range(1,6) as $item)
               @include('components.panel-unit')
             @endforeach
          </div>
        </div>
      </div>


    </section>

    <section class="row py-5">
      <div class="col-12 mb-3 ">
        <div class="d-flex justify-content-between" >
          <span class="font-weight-bold h6 i-text-primary">También te podría interesar</span>
          <span class="i-text-primary font-weight-bold i-text-primary ">ver todas</span>
        </div>
      </div>
      
      @php
        $titles = [
          ['name' => 'Ingenieria industrial', 'color' => 'green-blue'],
          ['name' => 'Medicina', 'color' => 'blue'],
          ['name' => 'Administración', 'color' => 'red'],
        ]
      @endphp
      @foreach ($titles as $title)
        <div class="col-4">
          @include('components.card', ['title' => $title])
        </div>
      @endforeach
      
    </section>
  </div>


@endsection