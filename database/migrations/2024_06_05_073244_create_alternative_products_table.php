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
        Schema::create('alternative_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code');
            $table->string('product_name');
            $table->string('brand_name');
            $table->foreignId('type_id')->constrained();
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('halal_certificate_number')->nullable();
            $table->string('bpom_certificate_number')->nullable();
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();


        /* Schema::disableForeignKeyConstraints();

        Schema::create('alternative_products', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('product_name');
            $table->foreignId('type_id')->constrained();
            $table->string('brand_name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints(); */
    }

    public function down(): void
    {
        Schema::dropIfExists('alternative_products');
    }
};
