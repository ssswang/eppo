<?php
$isActive = isset($ppo->is_active) ? $ppo->is_active : true;
$isCycle = isset($ppo->is_cycle) ? $ppo->is_cycle : true;
$isReason = isset($ppo->is_dose_reason) ? $ppo->is_dose_reason : true;
$isStartDate = isset($ppo->is_start_date) ? $ppo->is_start_date : true;
?>
<div class="form-group">
    {!! Form::hidden('is_active', false) !!}
    {!! Form::checkbox('is_active', null, $isActive) !!}
    {!! Form::label('is_active','Active for new prescription ', ['class' => 'control-label']) !!}
</div>

<div class="form-group">
    {!! Form::label('regimen_id','Regimen: ',['class' => 'control-label']) !!}
    {!! Form::select('regimen_id',$regimens, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('diagnoses[]','Diagnoses: ',['class' => 'control-label']) !!}
    {!! Form::select('diagnoses[]',$diagnoses, $diagnosesSelected, ['class'=>'form-control','multiple'=>'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::label('name','Name: ',['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('version','Version: ',['class' => 'control-label']) !!}
    {!! Form::text('version', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::hidden('is_cycle', false) !!}
    {!! Form::checkbox('is_cycle', null, $isCycle) !!}
    {!! Form::label('is_cycle','Show cycle infomation input ', ['class' => 'control-label']) !!}
</div>

<div class="form-group">
    {!! Form::hidden('is_dose_reason', false) !!}
    {!! Form::checkbox('is_dose_reason', null, $isReason) !!}
    {!! Form::label('is_reason','Show Dose modification reasons selection ', ['class' => 'control-label']) !!}
</div>

<div class="form-group">
    {!! Form::hidden('is_start_date', false) !!}
    {!! Form::checkbox('is_start_date', null, $isStartDate) !!}
    {!! Form::label('is_start_date','Show start date input ', ['class' => 'control-label']) !!}
</div>

{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}