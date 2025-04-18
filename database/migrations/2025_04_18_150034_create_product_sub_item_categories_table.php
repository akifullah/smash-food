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
        Schema::create('product_sub_item_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('sub_item_category_id')->constrained('sub_item_categories')->onDelete('cascade');
            $table->boolean("is_required")->default(0);
            $table->string("selection_type")->default("single")->comment('single, multiple');
            $table->string("min_qty")->nullable()->default(0);
            $table->string("max_qty")->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sub_item_categories');
    }
};
