<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Insert</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>

<body>

    <section style="" padding-top:60px;>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Students
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#studentModalLabel">
                                Add New Student
                            </button>
                            <button type="button" class="btn btn-danger" id="deleteAllSelectedRecord">
                                Delete Selected
                            </button>

                        </div>
                        <div class="card-body">
                            <table id="studentTable" class="table">
                                <thead>
                                    <th><input type="checkbox" name="" id="chkCheckAll"></th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr id="sid{{$student->id}}">
                                        <td><input type="checkbox" name="ids" class="checkBoxClass"
                                                value="{{$student->id}}"></td>
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="editStudent({{$student->id}})"
                                                class="btn btn-info">Edit</a>
                                            <a href="javascript:void(0)" onclick="deleteStudent({{$student->id}})"
                                                class="btn btn-danger">Delete</a>

                                        </td>
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

    <!-- Add Student Modal -->
    <div class="modal fade" id="studentModalLabel" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="studentForm">
                        @csrf
                        <div class="form-group">
                            <label for="fistname">First Name</label>
                            <input type="text" class="form-control" id="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Student Modal -->
    <div class="modal fade" id="studentEditModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="studentEditForm">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label for="fistname">First Name</label>
                            <input type="text" class="form-control" id="firstname2">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname2">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email2">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone2">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        $("#studentForm").submit(function(e){
            e.preventDefault();

            let firstname = $("#firstname").val();
            let lastname = $("#lastname").val();
            let email = $("#email").val();
            let phone = $("#phone").val();
            let _token = $("input[name=_token").val();

            $.ajax({
                url: "{{route('student.add')}}",
                type:"POST",
                data:{
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    phone:phone,
                    _token:_token,
                },
                success:function(response){
                    if(response){
                        $("#studentTable tbody").prepend('<tr><td>'  + response.firstname + '</td><td>'  + response.lastname + '</td><td>'  + response.email + '</td><td>'  + response.phone + '</td></tr>');
                        $("#studentForm")[0].reset();
                        $("#studentModal").modal('hide');
                    }
                }
            });
        });

    </script>

    <script>
        function editStudent(id)
        {
            $.get('/students/'+id, function(student){
                $("#id").val(student.id);
                $("#firstname2").val(student.firstname);
                $("#lastname2").val(student.lastname);
                $("#email2").val(student.email);
                $("#phone2").val(student.phone);
                $("#studentEditModal").modal('toggle');
            });
        }

        $("#studentEditForm").submit(function(e){
            e.preventDefault();

            let id = $("#id").val();
            let firstname = $("#firstname2").val();
            let lastname = $("#lastname2").val();
            let email = $("#email2").val();
            let phone = $("#phone2").val();
            let _token = $("input[name=_token").val();

            $.ajax({
                url: "{{route('student.update')}}",
                type: "PUT",
                data:{
                    id:id,
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    phone:phone,
                    _token:_token,
                },
                success:function(response){
                    $("#sid" + response.id + ' td:nth-child(1)').text(response.firstname);
                    $("#sid" + response.id + ' td:nth-child(2)').text(response.lastname);
                    $("#sid" + response.id + ' td:nth-child(3)').text(response.email);
                    $("#sid" + response.id + ' td:nth-child(4)').text(response.phone);
                    $("#studentEditModal").modal('toggle');
                    $("#studentEditForm")[0].reset();
                }
            });
        });
    </script>

    <script>
        function deleteStudent(id)
        {
            if(confirm("Do you realy want to delete this record?")){
                $.ajax({
                    url:'/students/' + id,
                    type: 'DELETE',
                    data:{
                        _token: $("input[name=_token").val(),
                    },
                    success:function(response)
                    {
                        $("#sid"+id).remove();
                    }
                });
            }
        }
    </script>

    <script>
        $(function(e){
            $("#chkCheckAll").click(function(){
                $(".checkBoxClass").prop('checked',$(this).prop('checked'));

            });
        });

        $("#deleteAllSelectedRecord").click(function(e){
            e.preventDefault();
            var allids =[];

            $("input:checkbox[name=ids]:checked").each(function(){
                allids.push($(this).val());
            });

            $.ajax({
                url:"{{route('student.deleteSelected')}}",
                type: "DELETE",
                data:{
                    _token:$("input[name=_token]").val(),
                    ids:allids
                },
                success:function(response){
                    $.each(allids,function(key,val){
                        $("#sid" + val).remove();
                    });
                }
            });
        });
    </script>

</body>

</html>