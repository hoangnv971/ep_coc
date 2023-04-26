<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File; 

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('code_id')->nullable();
            $table->string('serial');
            $table->integer('phone');
            $table->string('coc');
            $table->string('thep_chu');
            $table->string('mac_be_tong');
            $table->string('so_lo');
            $table->timestamps();
        });
        File::deleteDirectory(public_path('files'));
        \App\Models\User::factory(1)->create();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
}
