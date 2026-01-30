<?php namespace Kara5\ContactForm\Components;

use Cms\Classes\ComponentBase;
use Flash;
use Event;
use Request;
use Redirect;
use Kara5\ContactForm\Models\Form;

/**
 * GenericForm Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GenericForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Generic Form Component',
            'description' => 'A simple contact form.'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onFormSubmit() {
        $data = Request::validate([
            'fname' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'services' => 'required',
            'message' => 'required',
        ]);

        $form = new Form();

        $form->fname = $data['fname'];
        $form->lastName = $data['lastName'];

        $form->save();

        Flash::success('Form submitted!');

        return Redirect::to('/');
    }
}
