<h6 class="heading-small text-muted mb-4">Información del Horario</h6>

<div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="employees_id">
                        <i class="fas fa-user-graduate"> Nombre de empleado
                    </label>
                    <select name="employees_id" id="employees_id" class="form-control form-control-alternative">
                        <option disabled selected>Seleccione un empleado</option>
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id}}"
                                {{ old('$employee_id', $incidences->employee_id ?? '') == $employee->id ? 'selected' : '' }}>
                                {{ $employee->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
