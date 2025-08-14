<h6 class="heading-small text-muted mb-4">Información del Jefe</h6>

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">
                <i class="fas fa-user"></i> Nombre completo
                </label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del empleado"
                    value="{{ old('name', $boss->name_first) }}">
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
                    value="{{ old('last_name', $boss->last_name) }}">
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
                    value="{{ old('identification', $boss->identification) }}">
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
                    value="{{ old('number_phone', $boss->number_phone) }}">
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
                    value="{{ old('email', $boss->email) }}">
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
                    value="{{ old('nacionality', $boss->nacionality) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_of_birth">Fecha de nacimiento
                </label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control form-control-alternative"
                    value="{{ old('date_of_birth', isset($boss->date_of_birth)) ? $boss->date_of_birth->format(Y-m-d) : '' }}">
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
                    value="{{ old('civil_status', $boss->civil_status) }}">
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
                    value="{{ old('address', $boss->address) }}">
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
                    value="{{ old('emergency_contact_phone', $boss->emergency_contact_phone) }}">
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
                    value="{{ old('emergency_contact_name', $boss->emergency_contact_name) }}">
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
                    value="{{ old('hire_date', isset($boss->hire_date) ? $boss->hire_date->format('Y-m-d') : '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hire_date">
                <i class="fas fa-calendar-alt"></i> Fecha de inicio en su puesto actual
                </label>
                <input type="date" id="hire_date" name="hire_date" class="form-control form-control-alternative"
                    value="{{ old('hire_date', isset($boss->hire_date) ? $boss->hire_date->format('Y-m-d') : '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group
                <label class="form-control-label" for="position">
                <i class="fas fa-briefcase"></i> Cargo a cargo
                </label>
                <input type="text" id="position" name="position" class="form-control form-control-alternative"
                    placeholder="Ingresar cargo del empleado"
                    value="{{ old('position', $boss->position) }}">
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
                    value="{{ old('departament', $boss->departament) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="team_size">
                <i class="fas fa-building"></i> Personal a disposición
                </label>
                <input type="number" id="team_size" name="team_size" class="form-control form-control-alternative"
                    placeholder="Ingresar Personal a disposición del empleado"
                    value="{{ old('team_size', $boss->team_size) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="budget_responsibility">
                <i class="fas fa-building"></i> Responsabilidad presupuestaria
                </label>
                <input type="number" id="budget_responsibility" name="budget_responsibility" class="form-control form-control-alternative"
                    placeholder="Ingresar responsabilidad presupuestaria del jefe"
                    value="{{ old('budget_responsibility', $boss->budget_responsibility) }}">
            </div>
        </div>
    </div>
