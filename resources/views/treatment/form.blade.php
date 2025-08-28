<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <input type="text" id="status" name="status" class="form-control form-control-alternative"
                placeholder="Ingresar estado del tratamiento"
                value="{{ old('status', $treatments->status)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="cost">Costo</label>
                <input type="text" id="cost" name="cost" class="form-control form-control-alternative"
                placeholder="Ingresar costo del tratamiento"
                value="{{ old('cost', $treatments->cost)}}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="payment_status">Estado de pago.</label>
                <input type="text" id="payment_status" name="payment_status" class="form-control form-control-alternative"
                placeholder="Ingresa estado de pago"
                value="{{ old('payment_status', $treatments->payment_status)}}">
            </div>
        </div>
    </div>

       <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name_doctor">Nombre de doctor.</label>
                <input type="text" id="name_doctor" name="name_doctor" class="form-control form-control-alternative"
                placeholder="Ingresar nombre de doctor"
                value="{{ old('name_doctor', $treatments->name_doctor)}}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="area">Área.</label>
                <input type="text" id="area" name="area" class="form-control form-control-alternative"
                placeholder="Ingresa su área"
                value="{{ old('area', $treatments->area)}}">
            </div>
        </div>
    </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>