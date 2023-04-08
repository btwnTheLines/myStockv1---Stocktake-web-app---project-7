<?php

use App\Models\Stockyear;
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
        Schema::create('stocktake_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->timestamps();

            //Foreign keys
            $table->string('companyemail');
            $table->foreign('companyemail')->references('email')->on('users')->onDelete('cascade');

            //Item info
            $table->string('category');
            $table->string('item_name');
            $table->unsignedBigInteger('no_of_items')->nullable();
            $table->unsignedBigInteger('amount_of_item')->nullable();
            $table->string('units')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocktake_items');
    }
};
