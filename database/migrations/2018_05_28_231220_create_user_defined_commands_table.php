<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUserDefinedCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('user_defined_commands', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('command_name');
$table->string('command_text');
$table->string('template_text');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_defined_commands');
    }
}