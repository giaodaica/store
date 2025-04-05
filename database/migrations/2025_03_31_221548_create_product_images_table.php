<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id('image_id');
            $table->unsignedBigInteger('product_id')->index();
            $table->unsignedBigInteger('variant_id')->nullable()->index();
            $table->string('image_url');
            $table->boolean('is_primary')->default(false);  
            // Thêm timestamps
            $table->timestamps();
            // Foreign keys
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade');
        });
        
        // 🟢 Thêm ràng buộc CHECK bằng raw SQL
        DB::statement('ALTER TABLE product_images ADD CONSTRAINT chk_image_target CHECK (product_id IS NOT NULL OR variant_id IS NOT NULL)');
    }

    public function down()
    {
        Schema::dropIfExists('product_images');
    }
};
