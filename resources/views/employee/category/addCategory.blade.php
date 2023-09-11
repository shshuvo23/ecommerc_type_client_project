@extends('employee.master')


@section('title')
Category
@endsection
@section('sectionname')
Add Category
@endsection
@section('body')

<div class="col-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Category</h4>
            <form method="post" action="{{route('employee.category-create')}}" class="needs-validation" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label" for="validationCustom01">Category name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Category name" name="name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                <button class="btn btn-primary text-white" type="submit">Add New Category</button>
            </form>
            <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
            </script>
        </div>
    </div>
</div>

@endsection
