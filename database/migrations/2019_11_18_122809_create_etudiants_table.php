<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Etudiant;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
               $table->string('email')->unique();
                     $table->string('password');
                        $table->string('nom');
                           $table->string('prenom');
                           $table->integer('groupe')->nullable();
                               $table->double('noteIgl', 8, 2)->nullable();
                               $table->double('noteANA', 8, 2)->nullable();
                               $table->double('noteSYS', 8, 2)->nullable();
                               $table->double('noteORG', 8, 2)->nullable();
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
        Schema::dropIfExists('etudiants');
    }
}
