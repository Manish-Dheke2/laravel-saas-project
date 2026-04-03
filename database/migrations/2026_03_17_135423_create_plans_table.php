<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('number_of_qrcodes');
            $table->integer('price');
            $table->string('price_id'); 
            $table->timestamps();
        });

        //insert default plans
        DB::table('plans')->insert([
            [
                'name' => 'Starter','price' => 9, 'number_of_qrcodes' => 100, 
                'price_id' => 'price_1TGjbWDrjH7JPZQaeUlTYOfI'
            ],
            [
                'name' => 'Full Qrcodes','price' => 18, 'number_of_qrcodes' => 400, 
                'price_id' => 'price_1TGjceDrjH7JPZQa2a2jvKmO'
            ],
            [
                'name' => 'Super Full Qrcodes','price' => 36, 'number_of_qrcodes' => 800, 
                'price_id' => 'price_1TGjdYDrjH7JPZQaVa3hKbHP'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
