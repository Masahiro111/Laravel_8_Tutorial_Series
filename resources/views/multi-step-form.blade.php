<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Step Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .form-section {
            padding-left: 3rem;
            display: none;
        }

        .form-section.current {
            display: inherit;
        }

        .btn-info,
        .btn-success {
            margin-top: 10px;
        }

        .parsley-errors-list {
            margin: 2px;
        }
    </style>
</head>

<body>

    <section style="padding-top:100px;">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-info">
                        <h5>Multi Step Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('form.submit')}}" method="POST" class="contact-form">
                            @csrf
                            <div class="form-section">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" required>

                                <label for="firstname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" required>
                            </div>

                            <div class="form-section">
                                <label for="firstname">Email</label>
                                <input type="email" name="email" class="form-control" required>

                                <label for="firstname">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="form-section">
                                <label for="msg">Message</label>
                                <textarea name="msg" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-info float-left">Previous</button>
                                <button type="button" class="next btn btn-info float-right">Next</button>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function(){
            var $sections = $('.form-section');

            function navigateTo(index){
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length -1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);

            }

            function curIndex()
            {
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function()){
                navigateTo(curIndex()-1);
            }

            $('.form-navigation .next').click(function(){
                $('.contact-form').parsley().whenValidate({
                    group:'block-' + curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
            });

            $sections.each(function(index,section){
                $(section).find(':input').attr('data-parsley-group','block'+index);
            });

            navigateTo(0);

        });
    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous"></script>
</body>

</html>