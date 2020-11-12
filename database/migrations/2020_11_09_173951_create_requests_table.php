<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',100);
            $table->string('nationality',100);
            $table->string('gender',10);
            $table->string('age',100);
            $table->string('mobile',14);
            $table->string('email',40);
            $table->string('district',100);
            $table->string('race_category',50);
            $table->string('team_name',120);
            $table->string('emergency',100);
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
        Schema::dropIfExists('requests');
    }
}
