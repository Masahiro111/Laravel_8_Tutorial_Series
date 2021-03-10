<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{

    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $serchTerm;

    public function resetInputFields()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        $validateData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Student::create($validateData);
        session()->flash('message', 'Student created successfully!');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();

        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        if ($this->ids) {
            $student = Student::find($this->ids);
            $student->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);

            session()->flash('message', 'Student updated Successfully!');
            $this->resetInputFields();
            $this->emit('studentUpdated');
        }
    }

    public function render()
    {
        $serchTerm = '%' . $this->serchTerm . '%';
        $students = Student::where('firstname', 'LIKE', $serchTerm)
            ->orWhere('lastname', 'LIKE', $serchTerm)
            ->orWhere('email', 'LIKE', $serchTerm)
            ->orWhere('phone', 'LIKE', $serchTerm)
            ->orderBy('id', 'DESC')
            ->get();
        return view('livewire.students', compact('students'));
    }
}
