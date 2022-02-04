<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\ContactModel;
class ContactController extends Controller
{
    public function submit(ContactRequest $request){
        $contacts = new ContactModel;
        $contacts->email = $request->input('email');
        $contacts->name = $request->input('name');
        $contacts->subject = $request->input('subject');
        $contacts->message = $request->input('message');

        $contacts->save();
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }
    public function allData(){
        return view('messages', ['data' =>  ContactModel::all()]);
    }
    public function showOneMessage($id){
        $contact = new ContactModel;
        return view('oneMessage', ['data' => $contact->find($id)]);
    }
    public function updateMessage($id){
        $contact = new ContactModel;
        return view('updateMessage', ['data' => $contact->find($id)]);
    }
    public function updateMessageSubmit($id, ContactRequest $request){
        $contacts = ContactModel::find($id);
        $contacts->email = $request->input('email');
        $contacts->name = $request->input('name');
        $contacts->subject = $request->input('subject');
        $contacts->message = $request->input('message');

        $contacts->save();
        return redirect()->route('contact_data_one', $id)->with('success', 'Сообщение было обновлено');
    }
    public function deleteMessage($id){
        ContactModel::find($id)->delete();
        
        return redirect()->route('contact_data')->with('success', 'Сообщение было удалено');
    }
}
