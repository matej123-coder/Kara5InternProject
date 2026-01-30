<?php namespace Kara5\ContactForm\Components;

use Cms\Classes\ComponentBase;
use Flash;
use Event;
use Request;
use Redirect;
use Kara5\ContactForm\Models\Form;
use Mail;
/**
 * ContactForm Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form Component',
            'description' => 'No description provided yet...'
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
            'lname' => 'required',
            'email' => 'required|email',
            'services' => 'required',
            'message' => 'required',
            'webURL' => 'nullable|string|max:100'
            
        ]);

        $form = new Form();
        $form->fill($data);
        $form->fname = $data['fname'];
        $form->lname = $data['lname'];
        $form->services = $data['services'];
        $form->email = $data['email'];
        $form->message = $data['message'];
        $form->webURL = $data['webURL'];
        
        $vars = ['fname' => $form->fname, 'lname'=>$form->lname,'email'=> $form->email,"user_message" => $form->message,"services"=> $form->services];
        // mail send
        Mail::send('kara5.contactform::mail.message', $vars, function($message) {
            $message->to('matej@kara5.mk', 'Admin Person');
            $message->subject('This is a reminder');
        });
        $form->save();
        // flash success
        Flash::success('Thank you for contacting us!');

        //redirect / reset form
         return Redirect::to('/');
    }
}
