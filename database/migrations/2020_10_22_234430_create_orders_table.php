<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'orders',
            function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->enum('status', [0, 1, 2])->default(0);
                $table->string('currency', 10);
                $table->text('note')->nullable();
                $table->float('sum')->nullable();
                $table->timestamps();
                $table->softDeletes();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
