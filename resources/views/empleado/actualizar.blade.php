<x-app-layout>
    <x-slot name="header">
        Actualizar empleado
    </x-slot>
    @if(!empty($empleado))
    <div class="container-md d-flex justify-content-center">
        <!-- general form elements -->
        <div class="card card-primary container">
            <div class="card-header">
                <h3 class="card-title">Actualizar Empleado</h3>
            </div>
            <!-- /.card-header -->
            <x-toast-message></x-toast-message>
            <!-- form start -->
            <form method="POST" action="{{ route('empleado.update.put') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$empleado->id}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputCedula1">Cedula</label>
                        <input type="text" name="cedula" value="{{ $empleado->cedula }}" class="form-control" id="exampleInputCedula1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNombres1">Nombres</label>
                        <input type="text" name="nombres" value="{{ $empleado->nombres }}" class="form-control" id="exampleInputNombres1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputApellidos1">Apellidos</label>
                        <input type="text" name="apellidos" value="{{ $empleado->apellidos }}" class="form-control" id="exampleInputApellidos1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" value="{{ $empleado->email }}" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDireccion1">Dirección</label>
                        <input type="text" name="direccion" value="{{ $empleado->direccion }}" class="form-control" id="exampleInputDireccion1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputHorario1">Horario</label>
                        <select class="form-control" name="horario_id" id="exampleInputHorario1">
                            @if(!empty($horarios)) <option disabled selected>Escoja un horario</option> @endif
                            @forelse($horarios as $horario)
                                <option value="{{$horario->id}}" {{ !is_null($empleado->horario_id)? ($horario->id==$empleado->horario_id ? 'selected' : '') : '' }} >{{$horario->descripcion}}</option>
                            @empty
                                <option disabled selected>No existen horarios</option>
                            @endforelse
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Fecha Ingreso</label>
                        <input type="date" name="fecha_ingreso" value="{{ $empleado->fecha_ingreso }}" class="form-control"  required/>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Actualizar Empleado</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    @else
        <x-error404></x-error404>
    @endif
</x-app-layout>