@extends('employee.master')


@section('title')
Brand
@endsection
@section('sectionname')
Add Brand
@endsection
@section('body')

<div class="col-8 mx-auto">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Brand</h4>
            <form method="post" action="{{route('emloyee.brand-create')}}" class="needs-validation"  enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label" for="validationCustom01">Brand name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Brand name" name="name">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label class="form-label" for="validationCustom01">Brand Image</label>
                        <input type="file" class="form-control" id="validationCustom01"  name="image" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                <button class="btn btn-primary text-white" type="submit">Add New Brand</button>
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
