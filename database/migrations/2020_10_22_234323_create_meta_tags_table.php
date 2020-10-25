<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_tags', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->nullable();

            // metatagable: node, term,...
            $table->integer('metatagable_id')->nullable();
            $table->string('metatagable_type')->nullable();

            // Meta-tags
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();

            // SEO-fields
            $table->string('h1')->nullable();
            $table->text('seo_text')->nullable();
            $table->string('canonical')->nullable();
            $table->string('robots', 50)->nullable();

            // Fields for build XML site-map
            $table->string('changefreq', 10)->nullable();
            $table->string('priority', 10)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meta_tags');
    }
}
