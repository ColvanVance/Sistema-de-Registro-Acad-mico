<h6 class="heading-small text-muted mb-4">Información del cargo</h6>

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">
                <i class="fas fa-user"></i> Nombre del cargo
                </label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del cargo"
                    value="{{ old('name', $charge->name_charge) }}">
            </div>
        </div>
    </div>
