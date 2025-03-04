<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("price");
            $table->timestamps();
        });

        DB::table('motorcycles')->insert([
            [
                "name" => "Ducati 872",
                "price" => 23000,
                "created_at" => NOW(),
                "updated_at" => NOW()
            ],
            [
                "name" => "Kisbee 762",
                "price" => 1100,
                "created_at" => NOW(),
                "updated_at" => NOW()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycles');
    }
};
