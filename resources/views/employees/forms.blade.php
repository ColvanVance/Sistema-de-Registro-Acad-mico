<h6 class="heading-small text-muted mb-4">Información del Empleado</h6>

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">
                <i class="fas fa-user"></i> Nombre completo
                </label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del empleado"
                    value="{{ old('name', $employee->name }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="last_name">
                <i class="fas fa-user"></i> Apellido Completo
                </label>
                <input type="text" id="last_name" name="last_name" class="form-control form-control-alternative"
                    placeholder="Ingresar apellido del empleado"
                    value="{{ old('last_name', $employee->last_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_of_birth">Fecha de nacimiento
                </label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control form-control-alternative"
                    value="{{ old('date_of_birth', isset($employee->date_of_birth)) ? $employee->date_of_birth->format(Y-m-d) : '' }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="gender">
                <i class="fas fa-venus-mars"></i> Género
                </label>
                <input type="text" id="gender" name="gender" class="form-control form-control-alternative"
                    placeholder="Ingresar género del empleado"
                    value="{{ old('gender', $employee->gender) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="civil_status">
                <i class="fas fa-heart"></i> Estado civil
                </label>
                <input type="text" id="civil_status" name="civil_status" class="form-control form-control-alternative"
                    placeholder="Ingresar estado civil del empleado"
                    value="{{ old('civil_status', $employee->civil_status) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="number_phone">
                <i class="fas fa-phone"></i> Número telefónico
                </label>
                <input type="number" id="number_phone" name="number_phone" class="form-control form-control-alternative"
                    placeholder="Ingresar número telefónico del empleado"
                    value="{{ old('number_phone', $employee->number_phone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="emergency_contact_phone">
                <i class="fas fa-phone-alt"></i> Número de emergencia
                </label>
                <input type="number" id="emergency_contact_phone" name="emergency_contact_phone"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar número de emergencia del empleado"
                    value="{{ old('emergency_contact_phone', $employee->emergency_contact_phone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="emergency_contact_name">
                <i class="fas fa-user-friends"></i> Nombre de contacto para emergencias
                </label>
                <input type="text" id="emergency_contact_name" name="emergency_contact_name"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar nombre de contacto para emergencias"
                    value="{{ old('emergency_contact_name', $employee->emergency_contact_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">
                <i class="fas fa-envelope"></i> Correo electrónico
                </label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                    placeholder="Ingresar correo electrónico del empleado"
                    value="{{ old('email', $employee->email) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="nacionality">
                <i class="fas fa-flag"></i> Nacionalidad
                </label>
                <input type="text" id="nacionality" name="nacionality" class="form-control form-control-alternative"
                    placeholder="Ingresar nacionalidad del empleado"
                    value="{{ old('nacionality', $employee->nacionality) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="educative_level">
                <i class="fas fa-graduation-cap"></i> Nivel educativo
                </label>
                <input type="text" id="educative_level" name="educative_level"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar nivel educativo del empleado"
                    value="{{ old('educative_level', $employee->educative_level) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification">
                <i class="fas fa-id-card"></i> Cédula de identificación
                </label>
                <input type="text" id="identification" name="identification"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar cédula de identificación del empleado"
                    value="{{ old('identification', $employee->identification) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">
                <i class="fas fa-map-marker-alt"></i> Dirección
                </label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresar dirección del empleado"
                    value="{{ old('address', $employee->address) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hire_date">
                <i class="fas fa-calendar-alt"></i> Fecha de contratación
                </label>
                <input type="date" id="hire_date" name="hire_date" class="form-control form-control-alternative"
                    value="{{ old('hire_date', isset($employee->hire_date) ? $employee->hire_date->format('Y-m-d') : '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group
                <label class="form-control-label" for="position">
                <i class="fas fa-briefcase"></i> Cargo
                </label>
                <input type="text" id="position" name="position" class="form-control form-control-alternative"
                    placeholder="Ingresar cargo del empleado"
                    value="{{ old('position', $employee->position) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="departament">
                <i class="fas fa-building"></i> Departamento
                </label>
                <input type="text" id="departament" name="departament" class="form-control form-control-alternative"
                    placeholder="Ingresar departamento del empleado"
                    value="{{ old('departament', $employee->departament) }}">
            </div>
        </div>
    </div>
</div>

    <hr class="my-4">
    <h6 class="heading-small text-muted mb-4"> Guardar</h6>

<div class="row">
    <div class="col-lg-6">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar
        </button>
    </div>
</div>
