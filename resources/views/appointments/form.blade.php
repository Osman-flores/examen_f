<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="duration">Duracion</label>
                <input type="text" id="duration" name="duration" class="form-control form-control-alternative"
                placeholder="Ingresar duración"
                value="{{ old('duration', $appointment->duration)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date">Fecha</label>
                <input type="date" id="date" name="date" class="form-control form-control-alternative"
                placeholder="Ingresar fecha"
                value="{{ old('date', $appointment->date)}}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="treatment">Tratamiento.</label>
                <input type="text" id="treatment" name="treatment" class="form-control form-control-alternative"
                placeholder="Ingresa tratamiento"
                value="{{ old('treatment', $appointment->treatment)}}">
            </div>
        </div>
    </div>

       <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="reason">razon.</label>
                <input type="text" id="reason" name="reason" class="form-control form-control-alternative"
                placeholder="Ingresar razón"
                value="{{ old('reason', $appointment->reason)}}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name_client">Nombre del cliente.</label>
                <input type="text" id="name_client" name="name_client" class="form-control form-control-alternative"
                placeholder="Ingresa su nombre"
                value="{{ old('name_client', $appointment->name_client)}}">
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="number_client">Número del cliente.</label>
                <input type="text" id="number_client" name="number_client" class="form-control form-control-alternative"
                placeholder="Ingresa su número"
                value="{{ old('number_client', $appointment->number_client)}}">
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
                        {{ old('patients_id', $appointment->patients_id ?? '') == $patient->id ? 'selected' : '' }}>
                        {{ $patient->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

            <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="dentits_id">
                <i class="fas fa-solid fa-aligin-justify"><i> Dentista
            </label>
            <select name="dentits_id" id="dentits_id" class="form-control">
                <option dislabel selected>Seleccione un dentista</option>
                @foreach($dentits as $dentist)
                    <option value="{{ $dentist->id }}"
                        {{ old('dentits_id', $appointment->dentits_id ?? '') == $dentist->id ? 'selected' : '' }}>
                        {{ $dentist->name }}
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