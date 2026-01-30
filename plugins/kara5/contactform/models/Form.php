<?php namespace Kara5\ContactForm\Models;

use Model;

/**
 * Form Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Form extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'kara5_contactform_forms';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    protected $guarded = [''];
}
