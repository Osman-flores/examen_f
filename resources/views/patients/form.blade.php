<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del paciente"
                value="{{ old('name', $patients->name)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification">Número de cédula</label>
                <input type="text" id="identification" name="identification" class="form-control form-control-alternative"
                placeholder="Ingresar número de cédula"
                value="{{ old('identification', $patients->identification)}}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="p_Birth">Lugar de Nacimiento.</label>
                <input type="text" id="p_Birth" name="p_Birth" class="form-control form-control-alternative"
                placeholder="Ingresa lugar de nacimiento"
                value="{{ old('p_Birth', $patients->p_Birth)}}">
            </div>
        </div>
    </div>

       <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad.</label>
                <input type="number" id="age" name="age" class="form-control form-control-alternative"
                placeholder="Ingresar edad"
                value="{{ old('age', $patients->age)}}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="addres">Dirección.</label>
                <input type="text" id="addres" name="addres" class="form-control form-control-alternative"
                placeholder="Ingresa su dirección"
                value="{{ old('addres', $patients->addres)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="sex">Género</label>
                <select name="sex" id="sex" class="form-control">
                    <option value="" disabled>Seleccione su género</option>
                    <option value="Masculino" {{ old('sex', $patients->sex ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('sex', $patients->sex ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="nationality">Nacionalidad.</label>
                <input type="text" id="nationality" name="nationality" class="form-control form-control-alternative"
                placeholder="Ingrese su nacionalidad"
                value="{{ old('nationality', $patients->nationality)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="ethnicity">Etnia</label>
                <select name="ethnicity" id="ethnicity" class="form-control">
                    <option value="" disabled>Seleccione su etnia</option>
                    <option value="Mestizo" {{ old('ethnicity', $patients->ethnicity ?? '') == 'Mestizo' ? 'selected' : '' }}>Mestizo</option>
                    <option value="Ruso" {{ old('ethnicity', $patients->ethnicity ?? '') == 'Ruso' ? 'selected' : '' }}>Ruso</option>
                    <option value="Criollo" {{ old('ethnicity', $patients->ethnicity ?? '') == 'Criollo' ? 'selected' : '' }}>Criollo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Número Telefónico.</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingresar su número telefónico"
                value="{{ old('telephone', $patients->telephone)}}">
            </div>
        </div>
    </div>
   <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="departament">Departamento.</label>
                <input type="text" id="departament" name="departament" class="form-control form-control-alternative"
                placeholder="Ingresar su departamento"
                value="{{ old('departament', $patients->departament)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="responsible">Responsable.</label>
                <input type="text" id="responsible" name="responsible" class="form-control form-control-alternative"
                placeholder="Ingresar el nombre del responsable"
                value="{{ old('responsible', $patients->responsible)}}">
            </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="country">País.</label>
                <input type="text" id="country" name="country" class="form-control form-control-alternative"
                placeholder="Ingresar su País"
                value="{{ old('country', $patients->country)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mail">Correo electrónico.</label>
                <input type="email" id="mail" name="mail" class="form-control form-control-alternative"
                placeholder="Ingrese su Correo electrónico"
                value="{{ old('mail', $patients->mail)}}">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="municipality">Municipio.</label>
                <input type="text" id="municipality" name="municipality" class="form-control form-control-alternative"
                placeholder="Ingrese su municipio"
                value="{{ old('municipality', $patients->municipality)}}">
            </div>
        </div>
    </div>

 
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="marital_status">Estado civil.</label>
                <input type="text" id="marital_status" name="marital_status" class="form-control form-control-alternative"
                placeholder="Ingrese su estado civil"
                value="{{ old('marital_status', $patients->marital_status)}}">
            </div>
        </div>
    </div>



</div>

<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>Guardar Estudiante
        </button>
    </div>
</div>