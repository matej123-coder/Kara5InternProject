<?php namespace Kara5\Forum\Models;

use Model;
use RainLab\User\Models\User;

/**
 * Comment Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Comment extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'kara5_forum_comments';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $belongsTo = [
        'author' => User::class
    ];
}
