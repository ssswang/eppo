<table class="table table-bordered ppo-allergies">
<tbody>
<tr>
    <td class="col-md-12">
    {!! Form::label('is_allergies', 'Allergies: ', ['class' => 'control-label']) !!}
    {!! Form::hidden('is_allergies', false) !!}
    {!! Form::checkbox('is_allergies', null, null, ['id' => 'is-allergies']) !!}
    {!! Form::label('is_allergies', 'Yes ', ['class' => 'control-label']) !!}

    {!! Form::hidden('is_allergies_unknown', false) !!}
    {!! Form::checkbox('is_allergies_unknown', null, null, ['id' => 'is-allergies-unknown']) !!}
    {!! Form::label('is_allergies_unknown','Unknown', ['class' => 'control-label']) !!}
    <p>
        {!! Form::textarea('allergies', null, ['class'=>'form-control width_100_percent hidden', 'rows'=>"3", 'id' => 'allergies-detail']) !!}
    </p>
    </td>
</tr>
</tbody>
</table>

<table class="table table-bordered ppo-protocol">
<tbody>
<tr>
    <td class="col-md-6">
        <p><strong>Regimen: </strong><span class="regimen-code">{{ $ppo->regimen->code }}</span></p>
        <p class="regimen-name">{{ $ppo->regimen->name }}</p>

        <p><strong>Diagnosis: </strong>
        @if(isset($diagnosis))
            <span class="diagnosis-name"><strong>{{ $diagnosis->name }}</strong></span>
            {!! Form::hidden('diagnosis_id', $diagnosis->id) !!}
        @else
            </p>
            @foreach($ppo->diagnoses as $diagnosis)
                <p class="diagnosis-name"><strong>{{ $diagnosis->name }}</strong></p>
            @endforeach
        @endif
    </td>
    <td class="col-md-6">
        @if($ppo->is_cycle)
        <div class="ppo-cycle">
            {!! Form::label('cycle_id','Cycle #: ', ['class' => 'control-label']) !!}
            {!! Form::text('cycle_id', null, ['class' => 'integer-field form-control mandatory-field', 'size'=> 2]) !!}
             Cycle repeats every {{ $ppo->cycle_days }} days
        </div>
        @endif
        @if($ppo->is_bsa)
        <div class="ppo-bsa">
            <p>
                {!! Form::label('height','Height: ', ['class' => 'control-label']) !!}
                {!! Form::text('height', null, ['class' => 'decimal-field form-control mandatory-field', 'size'=> 6]) !!} cm&nbsp;&nbsp;&nbsp;&nbsp;
                {!! Form::label('weight','Weight: ', ['class' => 'control-label']) !!}
                {!! Form::text('weight', null, ['class' => 'decimal-field form-control mandatory-field', 'size'=> 6]) !!} kg
            </p>
            <p>
                {!! Form::label('bsa','Body Surface Area (BSA): ', ['class' => 'decimal-field control-label mandatory-field']) !!}
                {!! Form::text('bsa', null, ['class' => 'form-control', 'size'=> 6]) !!} m<sup>2</sup>
                <button type="button" class="btn btn-xs btn-primary get-bsa-btn">Calculate</button>
            </p>
        </div>
        @endif
    </td>
</tr>
</tbody>
</table>
{!! Form::hidden('ppo_id', $ppo->id) !!}
{!! Form::hidden('regimen_id', $ppo->regimen->id) !!}
{!! Form::hidden('is_start_date',$ppo->is_start_date) !!}
{!! Form::hidden('is_bsa',$ppo->is_bsa) !!}
{!! Form::hidden('is_dose_reason',$ppo->is_dose_reason) !!}
{!! Form::hidden('is_cycle',$ppo->is_cycle) !!}
{!! Form::hidden('cycle_days',$ppo->cycle_days) !!}
@if($patient)
{!! Form::hidden('patient_id', $patient->id) !!}
@endif
