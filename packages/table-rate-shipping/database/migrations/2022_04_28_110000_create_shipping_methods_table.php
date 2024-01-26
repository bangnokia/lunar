<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

class CreateShippingMethodsTable extends Migration
{
    public function up()
    {
        Schema::create($this->prefix.'shipping_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('code')->index()->nullable();
            $table->boolean('enabled')->default(true);
            $table->boolean('stock_available')->default(false);
            $table->time('cutoff')->nullable();
            $table->json('data')->nullable();
            $table->string('driver');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->prefix.'shipping_methods');
    }
}
