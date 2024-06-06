<?php

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
        Schema::disableForeignKeyConstraints();

        Schema::create('product_boikots', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('product_name');
            $table->foreignId('type_id')->constrained();
            $table->unsignedBigInteger('alternative_id')->nullable();
            //$table->foreignId('alternative_id')->nullable()->constrained('alternative_products')->nullOnDelete();
            $table->string('brand_name');
            $table->string('status');
            $table->string('description');
            $table->timestamps();

           // $table->foreign('alternative_id')->references('id')->on('alternative_products')->onDelete('set null');
        });        
        
        Schema::enableForeignKeyConstraints();

    }

    public function down(): void
    {
        Schema::dropIfExists('product_boikots');
    }
};
