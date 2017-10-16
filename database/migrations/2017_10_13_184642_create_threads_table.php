<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    protected $table = 'threads';

    public function up()
    {
        if (!Schema::hasTable($this->table))
            Schema::create($this->table, function (Blueprint $table)
            {
                $table->increments('id');
                $table->unsignedInteger('user_id');
                $table->string('title');
                $table->text('body');
                $table->timestamps();
            });
    }

    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
