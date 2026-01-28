<?php namespace Kara5\Forum\Models;

use Model;
use Kara5\Forum\Models\Topic;

/**
 * Category Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var string table name
     */
    public $table = 'kara5_forum_categories';

    protected $slugs = ['slug' => 'name'];

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $belongsToMany = [
        'topics' => [
            Topic::class,
            'table' => 'categories_topics'
        ]
    ];
}
