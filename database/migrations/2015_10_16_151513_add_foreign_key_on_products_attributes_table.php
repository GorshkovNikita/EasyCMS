<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyOnProductsAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_products_attributes', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')
                ->on('cms_posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('attribute_id')
                ->references('id')
                ->on('cms_attributes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cms_products_attributes', function (Blueprint $table) {
            $table->dropForeign('cms_products_attributes_attribute_id_foreign');
            $table->dropForeign('cms_products_attributes_product_id_foreign');
        });
    }
}
