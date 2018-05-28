<?php

Route::get('/', function () {
    $usage = "Usage: TBD";
return $usage;
});
Route::get('/list-commands', function () {
    $commands = \App\UserDefinedCommand::all();
return $commands;
});
Route::post('/new-command', function (\Illuminate\Http\Request $request) {
    $userDefinedCommand = new \App\UserDefinedCommand();
$userDefinedCommand->command_name = $request->Input('command_name');
$userDefinedCommand->command_text = $request->Input('command_text');
$userDefinedCommand->template_text = $request->Input('template_text');
$userDefinedCommand->save();
});