<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="amountpaid">cantidad pagada</label>
                <input type="text" id="amountpaid" name="amountpaid" class="form-control form-control-alternative"
                placeholder="Ingresar cantidad pagada"
                value="{{ old('amountpaid', $payments->amountpaid)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="payment_date">fecha de pago</label>
                <input type="text" id="payment_date" name="payment_date" class="form-control form-control-alternative"
                placeholder="Ingresar fecha de pago"
                value="{{ old('payment_date', $payments->payment_date)}}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="payment_type">Tipo de pago.</label>
                <input type="text" id="payment_type" name="payment_type" class="form-control form-control-alternative"
                placeholder="Ingresa tipo de pago"
                value="{{ old('payment_type', $payments->payment_type)}}">
            </div>
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
                        {{ old('treatments_id', $payment->treatment_id ?? '') == $treatment->id ? 'selected' : '' }}>
                        {{ $treatment->status }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>