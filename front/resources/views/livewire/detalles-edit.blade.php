<div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Modificar detalle  </h3>
        </div>


        <form wire:submit.prevent='modificar'>
            @include('livewire.formDetalles')

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>Modificar</button>
            </div>
        </form>
    </div>

</div>
