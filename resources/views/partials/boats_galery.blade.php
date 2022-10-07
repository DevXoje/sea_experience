<div class="row">

    {{-- @foreach ($users as $user) --}}
    @for ($i = 0; $i < 9; $i++)
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Nombre</h5>
                </div>
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">

                <div class="card-body">


                    <h5 class="card-subtitle">Precio</h5>
                    <ul class="list-group list-group-flush">
                        {{-- @foreach ($users as $user) --}}
                        @for ($j = 0; $j < 3; $j++)
                            <li class="list-group-item">Tipo: Velero.</li>
                        @endfor
                        {{--  @endforeach --}}

                    </ul>
                    <p class="card-text text-danger fw-bolder">ALQUILER CON PATRÓN Y TRIPULACIÓN</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>
    @endfor
    {{--  @endforeach --}}

</div>
