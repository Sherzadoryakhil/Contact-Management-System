<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
// use App\Repositories\CompanyRepository;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    // public function __construct(protected CompanyRepository $company){
    // }

    protected function userCompanies() {
        return Company::forUser(request()->user())->orderBy('name')->pluck('name', 'id');
    }

    public function index(Request $request){
        // dd(Auth::user());
        // dd(Auth::id());
        // dd(auth()->id());
        // dd($request->user());

        // if(Auth::check()) {
        //     dd("Sign in");
        // }
        // else {
        //     dd("Guest");
        // }

        $companies = $this->userCompanies();

        $contacts = Contact::allowedTrash()
            ->allowedSorts(["first_name", "last_name", "email"], "first_name")
            ->allowedFilters("company_id")
            ->allowedSearch('first_name', 'last_name', 'email')
            ->forUser(request()->user())
            ->paginate(10);
        
        return view("contacts.index", compact("contacts", "companies"));
    }

    public function create(){

        $companies = $this->userCompanies();
        $contact = new Contact();
        return view("contacts.create", compact("companies", 'contact'));
    }

    public function store(ContactRequest $request){
        // after we request our form
        // $request->validate($this->rules());
        
        // Contact::create($request->all());
        $request->user()->contacts()->create($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact has been added successfully');
    }

    public function show(Contact $contact){
        // after we used implicit route binding
        // $contact = $this->findContact($id);
        return view("contacts.show")->with("contact", $contact);
    }

    // protected function findContact($id) {
    //     return Contact::findOrFail($id);
    // }

    public function edit(Contact $contact){
        $companies = $this->userCompanies();
        // after we used implicit route binding
        // $contact = Contact::findOrFail($id);
        return view("contacts.edit", compact('companies', 'contact'));
    }

    public function update(ContactRequest $request, Contact $contact){
        // after we used implicit route binding
        // $contact = Contact::findOrFail($id);

        // after we request our form
        // $request->validate($this->rules());
        
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact has been updated successfully.');
    }

    public function destroy(Contact $contact){
        // after we used implicit route binding
        // $contact = Contact::findOrFail($id);
        $contact->delete();
        $redirect = request()->query('redirect');
        return ($redirect ? redirect()->route($redirect) : back())
        ->with('message', 'Contact has been moved to trash.')
        ->with("undoRoute", getUndoRoute('contacts.restore', $contact));
    }

    public function restore(Contact $contact){
        // after we used implicit route binding
        // $contact = Contact::onlyTrashed()->findOrFail($id);
        $contact->restore();
        return redirect()->route("contacts.index")->
        with('message', 'Contact has been restored from trash.')
        ->with("undoRoute", getUndoRoute('contacts.destroy', $contact));
    }

    public function forceDelete(Contact $contact){
        // after we used implicit route binding
        // $contact = Contact::onlyTrashed()->findOrFail($id);
        $contact->forceDelete();
        return back()->
        with('message', 'Contact has been removed permanently.');
    }
}
