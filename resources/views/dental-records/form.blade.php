<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date">Fecha de ingreso</label>
                <input type="text" id="date" name="date" class="form-control form-control-alternative"
                placeholder="Fecha de ingreso"
                value="{{ old('date', $dental_records->date)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="treatment">Tratamiento</label>
                <input type="text" id="treatment" name="treatment" class="form-control form-control-alternative"
                placeholder="Ingresar tratamiento"
                value="{{ old('treatment', $dental_records->treatment)}}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="progress">Progreso.</label>
                <input type="text" id="progress" name="progress" class="form-control form-control-alternative"
                placeholder="Ingresa el progreso"
                value="{{ old('progress', $dental_records->progress)}}">
            </div>
        </div>
    </div>

       <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="allergiances">Alergias.</label>
                <input type="text" id="allergiances" name="allergiances" class="form-control form-control-alternative"
                placeholder="Ingresar alergias"
                value="{{ old('allergiances', $dental_records->allergiances)}}">
            </div>
        </div>
    </div>

        <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="patients_id">
                <i class="fas fa-solid fa-aligin-justify"><i> Paciente
            </label>
            <select name="patients_id" id="patients_id" class="form-control">
                <option dislabel selected>Seleccione un paciente</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}"
                        {{ old('patients_id', $dental_records->patients_id ?? '') == $patient->id ? 'selected' : '' }}>
                        {{ $patient->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="treatments_id">
                <i class="fas fa-solid fa-aligin-justify"><i> Tratamiento
            </label>
            <select name="treatments_id" id="treatments_id" class="form-control">
                <option dislabel selected>Seleccione un tratamiento</option>
                @foreach($treatments as $treatment)
                    <option value="{{ $treatment->id }}"
                        {{ old('treatments_id', $dental_records->treatments_id ?? '') == $treatment->id ? 'selected' : '' }}>
                        {{ $treatment->status }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
