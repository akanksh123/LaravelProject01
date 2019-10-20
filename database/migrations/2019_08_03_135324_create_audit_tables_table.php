<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("SV");
            $table->string("Control");
            $table->string("Observation");
            $table->string("Security");
            $table->string("Closure");
            $table->date("ClosureDate");
            $table->string("Remarks");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_tables');
    }
}
