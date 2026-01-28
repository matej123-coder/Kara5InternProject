<?php namespace Kara5\Forum\Models;

use Model;
use Kara5\Forum\Models\Category;
use Kara5\Forum\Models\Comment;
use RainLab\User\Models\User;

/**
 * Topic Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Topic extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var string table name
     */
    public $table = 'kara5_forum_topics';

    protected $slugs = ['slug' => 'title'];

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $belongsTo = [
        'author' => User::class
    ];

    public $hasMany = [
        'comments' => Comment::class
    ];

    public $belongsToMany = [
        'categories' => [
            Category::class,
            'table' => 'categories_topics'
        ]
    ];
}
