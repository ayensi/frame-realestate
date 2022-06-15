<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('team_id')
                ->constrained('teams')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('description');
            $table->string('room_number');
            $table->string('bathroom_number');
            $table->string('property_age');
            $table->foreignId('property_status')
                ->constrained('property_statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('floor_number');
            $table->string('value');
            $table->integer('status');
            $table->string('slug');
            $table->string('area');
            $table->foreignId('district_id')
                ->constrained('districts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('estate_type')
                ->constrained('estate_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('ref_no');
            $table->string('register_status');
            $table->foreignId('city_id')
                ->constrained('cities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('which_floor');
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
        Schema::dropIfExists('properties');
    }
};
