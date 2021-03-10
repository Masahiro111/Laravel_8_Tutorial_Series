<div>

    @include('livewire.create')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>All Students
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#addStudentModal">
                                            Add New Student
                                        </button>
                                    </h3>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Search..."
                                        wire:model="searchTerm">
                                </div>
                            </div>
                            <!-- Button trigger modal -->

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <thead>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </thead>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>