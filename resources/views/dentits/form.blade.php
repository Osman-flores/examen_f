<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                       placeholder="Ingresar nombre del estudiante"
                       value="{{ old('name', $dentit->name ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="record">Registro</label>
                <input type="text" id="record" name="record" class="form-control form-control-alternative"
                       placeholder="Ingresar registro de dentista"
                       value="{{ old('record', $dentit->record ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                       placeholder="Ingresa su dirección"
                       value="{{ old('address', $dentit->address ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Género</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Seleccione su género</option>
                    <option value="Masculino" {{ old('gender', $dentit->gender ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('gender', $dentit->gender ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="number" id="age" name="age" class="form-control form-control-alternative"
                       placeholder="Ingresar edad" 
                       value="{{ old('age', $dentit->age ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="p_Birth">Lugar de Nacimiento</label>
                <input type="text" id="p_Birth" name="p_Birth" class="form-control form-control-alternative"
                       placeholder="Ingresa lugar de nacimiento"
                       value="{{ old('p_Birth', $dentit->p_Birth ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="nationality">Nacionalidad</label>
                <input type="text" id="nationality" name="nationality" class="form-control form-control-alternative"
                       placeholder="Ingrese su nacionalidad"
                       value="{{ old('nationality', $dentit->nationality ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                       placeholder="Ingrese su Correo electrónico"
                       value="{{ old('email', $dentit->email ?? '') }}">
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="allergies">Alergias</label>
                <input type="text" id="allergies" name="allergies" class="form-control form-control-alternative"
                       placeholder="Ingresar sus alergias"
                       value="{{ old('allergies', $dentit->allergies ?? '') }}">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Número Telefónico</label>
                <input type="text" id="telephone" name="telephone" 
                       class="form-control form-control-alternative"
                       placeholder="Ingresar su número telefónico"
                       value="{{ old('telephone', $dentit->telephone ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="speciality">Especialidades</label>
                <input type="text" id="speciality" name="speciality" class="form-control form-control-alternative"
                       placeholder="Ingresar sus especialidades"
                       value="{{ old('speciality', $dentit->speciality ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="ethnicity">Etnia</label>
                <select name="ethnicity" id="ethnicity" class="form-control">
                    <option value="" disabled>Seleccione su etnia</option>
                    <option value="Mestizo" {{ old('ethnicity', $dentit->ethnicity ?? '') == 'Mestizo' ? 'selected' : '' }}>Mestizo</option>
                    <option value="Ruso" {{ old('ethnicity', $dentit->ethnicity ?? '') == 'Ruso' ? 'selected' : '' }}>Ruso</option>
                    <option value="Criollo" {{ old('ethnicity', $dentit->ethnicity ?? '') == 'Criollo' ? 'selected' : '' }}>Criollo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="country">País</label>
                <input type="text" id="country" name="country" class="form-control form-control-alternative"
                       placeholder="Ingrese el país"
                       value="{{ old('country', $dentit->country ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="municipality">Municipio</label>
                <input type="text" id="municipality" name="municipality" class="form-control form-control-alternative"
                       placeholder="Ingrese su municipio"
                       value="{{ old('municipality', $dentit->municipality ?? '') }}">
            </div>
        </div>
    </div>

</div>

<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar dentista
        </button>
    </div>
</div>