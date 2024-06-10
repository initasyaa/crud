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
            $table->bigInteger('code');
            $table->string('product_name');
            $table->string('brand_name');
            $table->string('status');
            $table->foreignId('type_id')->constrained();
            $table->text('description');
            $table->unsignedBigInteger('alternative_id')->nullable();
            $table->string('image')->nullable();
            $table->string('halal_certificate_number')->nullable();
            $table->string('bpom_certificate_number')->nullable();
            $table->timestamps();

            $table->foreign('alternative_id')->references('id')->on('alternative_products')->onDelete('set null');
        });        
        
        Schema::enableForeignKeyConstraints();

    }

    public function down(): void
    {
        Schema::dropIfExists('product_boikots');
    }
};
