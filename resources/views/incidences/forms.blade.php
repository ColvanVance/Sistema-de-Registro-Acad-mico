<h6 class="heading-small text-muted mb-4">Información de la Incidencia</h6>

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
                            {{ old('$employee_id', $absence->employee_id ?? '') == $employee->id ? 'selected' : '' }}>
                            {{ $employee->name }}
                        </option>
                    @endforeach
               </select>
            </div>
        </div>

        <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="departament_id">
                <i class="fas fa-solid fa-aligin-justify"></i> Nombre del departamento
            </label>
            <select name="departament_id" id="departament_id" class="form-control form-control-alternative">
                <option disabled selected> Seleccionar departamento</option>
                @foreach ($departaments_id as $departament_id)
                    <option value="{{ $attendance_registration_id }}"
                        {{ old('attendance_registration_id', $absence->attendance_registration_id ?? '' ) == $attendance_registration->id ? 'selected' : ''}}>
                        {{ $attendance_registration->hours_worked }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
