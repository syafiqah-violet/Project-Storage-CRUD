<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ProductTracker">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Edit an Item | Project Tracker</title>
   <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container py-3">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Project Tracker</span>
        </a>

       <!-- <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>-->
        </header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h3 class="display-5 fw-bold">Update the project!</h3>
            <p class="fs-5 text-body-secondary">Please update the latest project details.</p>
        </div>
        <div class="card mx-auto p-2" style="width: 500px;">
            <div class="card-body">
                <form method="post" action="{{route('tracker.update', ['tracker' => $tracker])}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Project Name:</label>
                        <input type="text" class="form-control" name="name"  value="{{$tracker -> name}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Project Manager:</label>
                        <input type="text" class="form-control" name="project_manager" value="{{$tracker -> project_manager}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total Member:</label>
                        <input type="text" class="form-control" name="total_member" value="{{$tracker -> total_member}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description:</label>
                        <textarea class="form-control" name="desc" rows="4" cols="50">{{$tracker -> desc}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 450px;">Update</button>
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>