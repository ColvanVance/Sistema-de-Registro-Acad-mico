<h6 class="heading-small text-muted mb-4">Información del cargo</h6>

<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name_chargues">Nombre del cargo</label>
                <select name="name_chargues" id="name_chargues" class="form-control">
                    <option value="" disabled>Seleccione un cargo</option>
                    <option value="Director" {{ old('name_chargues', $charges->name_charges ?? '') == 'Director' ? 'selected' : '' }}>Director</option>
                    <option value="Sub Director" {{ old('name_chargues', $charges->name_charges ?? '') == 'Sub Director' ? 'selected' : '' }}>Sub Director</option>
                    <option value="Coordinador Academico" {{ old('name_chargues', $charges->name_charges ?? '') == 'Coordinador Academico' ? 'selected' : '' }}>Coordinador Academico</option>
                    <option value="Jefe de estudios" {{ old('name_chargues', $charges->name_charges ?? '') == 'Jefe de estudios' ? 'selected' : '' }}>Jefe de estudios</option>
                    <option value="Maestro/Docente" {{ old('name_chargues', $charges->name_charges ?? '') == 'Maestro/Docente' ? 'selected' : '' }}>Maestro/Docente</option>
                    <option value="Secretario/ria" {{ old('name_chargues', $charges->name_charges ?? '') == 'Secretario/ria' ? 'selected' : '' }}>Secretario/ria</option>
                    <option value="Personal de administracion" {{ old('name_chargues', $charges->name_charges ?? '') == 'Personal de administracion' ? 'selected' : '' }}>Personal de administracion</option>
                    <option value="Orientador" {{ old('name_chargues', $charges->name_charges ?? '') == 'Orientador' ? 'selected' : '' }}>Orientador</option>
                    <option value="Personal de mantenimiento" {{ old('name_chargues', $charges->name_charges ?? '') == 'Personal de mantenimiento' ? 'selected' : '' }}>Personal de mantenimiento</option>
                    <option value="Personal de servicios generales" {{ old('name_chargues', $charges->name_charges ?? '') == 'Personal de limpieza' ? 'selected' : '' }}>Personal de limpieza</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_charges">Tipo de cargo</label>
                <select name="type_charges" id="type_charges" class="form-control">
                    <option value="" disabled>Seleccione su tipo de cargo</option>
                    <option value="Directivo" {{ old('type_charges', $charges->type_charges ?? '') == 'Directivo' ? 'selected' : '' }}>Directivo</option>
                    <option value="Docente" {{ old('type_charges', $charges->type_charges ?? '') == 'Docente' ? 'selected' : '' }}>Docente</option>
                    <option value="Administrativo" {{ old('type_charges', $charges->type_charges ?? '') == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                    <option value="Apoyo" {{ old('type_charges', $charges->type_charges ?? '') == 'Apoyo' ? 'selected' : '' }}>Apoyo</option>
                </select>
            </div>
        </div>
    </div>
