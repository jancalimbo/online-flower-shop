<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPT Email Functionality</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container col-md-6 offset-md-3 mt-5">
        <div id="header" class="card bg-secondary">
            <div class="card-header text-white text-center">
                <h1>Send Mail</h1>
            </div>
            <div class="card-body text-white">
                <form action="{{ '/send-mail' }}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="email">Email To</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="d-flex justify-content-center">

                        <button class="btn btn-primary mt-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<style type="scoped">
    #header{
        color: white;
    }

    label{
        margin-bottom: 10px;
    }

</style>