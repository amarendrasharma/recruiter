<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadGeneratesTable extends Migration
{

    public function up()
    {
        Schema::create('lead_generates', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('alternate_no')->nullable();
            $table->string('cctc')->nullable();
            $table->string('ectc')->nullable();
            $table->string('noticeperiod')->nullable();
            $table->string('note')->nullable();
            $table->foreignId('categor_id');
            $table->foreign('categor_id')->references('id')->on('categories')->onDelete('cascade');// mba tech 
            $table->string('status')->nullable();//dead, active, 
            $table->json('extrainfo')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lead_generates');
    }
}
