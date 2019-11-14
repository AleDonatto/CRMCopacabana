@extends('contenido')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">
    <section class="page-section bg-light">
        <div class="container">
            <div style="width: 100%">
                {!! $EventosChart->container() !!}
            </div>
        </div> 
    </section>
</main>

{!! $EventosChart->script() !!}