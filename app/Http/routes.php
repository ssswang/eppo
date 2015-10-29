<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
     return view('welcome');
});
Route::resource('diagnoses', 'DiagnosesController');
Route::resource('diagnosisprimarycategories', 'DiagnosisPrimaryCategoriesController');
Route::resource('diagnosissecondarycategories', 'DiagnosisSecondaryCategoriesController');
Route::resource('regimens', 'RegimensController');
Route::resource('medications', 'MedicationsController');
Route::resource('prescriptions', 'PrescriptionsController');
Route::resource('ppos', 'PposController');
Route::resource('lucodes', 'LucodesController');
Route::resource('patients', 'PatientsController');
Route::resource('pposections', 'PpoSectionsController');
Route::resource('prescriptionoperationrecords', 'PrescriptionOperationRecordsController');
Route::resource('dosingschedules', 'DosingSchedulesController');
Route::resource('dosecalculationtypes', 'DoseCalculationTypesController');
Route::resource('doseroutes', 'DoseRoutesController');
Route::resource('doseunits', 'DoseUnitsController');
Route::resource('mitteunits', 'MitteUnitsController');
Route::resource('dosemodificationreasons', 'DoseModificationReasonsController');
Route::resource('ppos.dosingschedules', 'DosingSchedulesController');

