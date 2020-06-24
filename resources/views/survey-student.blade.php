<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!--
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>
<div class="container">
    <h1 style="margin-left: 35%">Survey Student</h1>
    <form id="contactForm" >
        {{--            style="margin-top: 100px;" method="post" action="{{url("/survey")}}"--}}
        {{--            @csrf--}}
        {{--            @method('post')--}}
        <div class="form-group">
            <label for="inputEmail4">Email</label>
            <input id="email" type="email" name="email" class="form-control @error("email") is-invalid @enderror" id="inputEmail4" required>

        </div>
        <div class="form-group">
            <label for="inputCity">Name</label>
            <input id="student_name" type="text" name="student_name" class="form-control @error("student_name") is-invalid @enderror" id="inputCity" required>

        </div>
        <div class="form-group">
            <label for="inputState">Telephone</label>
            <input id="telephone" type="text" name="telephone" class="form-control @error("telephone") is-invalid @enderror" id="inputCity" required>

        </div>
        <div class="form-group">
            <textarea id="feedback" class="col-md-12 @error("feedback") is-invalid @enderror" name="feedback" id="feedback" cols="100%" rows="10" placeholder="Feedback"></textarea>

        </div>
        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
<script type="text/javascript">

    $('#contactForm').on('submit',function(event){
        event.preventDefault();
        student_name = $('#student_name').val();
        email = $('#email').val();
        telephone = $('#telephone').val();
        feedback = $('#feedback').val();
        $.ajax({
            url: "/survey",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                student_name:student_name,
                email:email,
                telephone:telephone,
                feedback:feedback,
            },
            success:function(response){
                alertify.success('Successfully!!!');
                $("#contactForm")[0].reset();
            },
        });
    });
</script>
