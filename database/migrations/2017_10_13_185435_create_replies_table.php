<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    protected $table = 'replies';

    public function up()
    {
        if (!Schema::hasTable($this->table))
            Schema::create($this->table, function (Blueprint $table)
            {
                $table->increments('id');
                $table->integer('thread_id');
                $table->integer('user_id');
                $table->text('body');
                $table->timestamps();
            });
    }

    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
