<?php namespace Kara5\Forum\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CategoriesTopics Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('categories_topics', function(Blueprint $table) {
            $table->foreignId('topic_id')->constrained('kara5_forum_topics')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('kara5_forum_categories')->onDelete('cascade');

            $table->primary(['topic_id', 'category_id']);
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('categories_topics', function(Blueprint $table) {
            $table->dropColumns(['topic_id', 'category_id']);
        });
    }
};
