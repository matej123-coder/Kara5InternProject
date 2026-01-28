<?php namespace Kara5\Forum\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCommentsTable Migration
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
        Schema::create('kara5_forum_comments', function(Blueprint $table) {
            $table->id();
            $table->text('content');
            
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('topic_id')->constrained('kara5_forum_topics');

            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('kara5_forum_comments');
    }
};
