<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('question_types');
       
       Schema::create('question_types', function (Blueprint $table) {
          $table->increments('id');
          $table->string('question_type', 64);
          
          $table->softDeletes();
           
          $table->index(['question_type', 'id'], 'question_types_questiontype_index');
           
       });
           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('question_types');
    }
}
