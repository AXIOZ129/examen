<div>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Nuevo Detalle  </h3>
        </div>


        <form wire:submit.prevent='guardar'>
        @include('livewire.formDetalles')

            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i>Crear</button>
            </div>
        </form>
    </div>

</div>
