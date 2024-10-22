<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ProductTracker">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Homepage | Project Tracker</title>
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
            <div class="pricing-header p-3 pb-md-4 mx-auto">
                <h3 class="display-5 fw-bold">Project List</h3>
                <p class="fs-5 text-body-secondary">Below here is the listing of all Syafiqah's projects for resume purposes</p>
                <div>
                    <a href="{{route('tracker.create')}}" class="btn btn-warning">Record a New Project</a>
                </div>
            </div>

            <div>
                @if(session()->has('success'))
                    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                            <symbol id="check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </symbol>
                        </svg>
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('deleted'))
                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                            <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </symbol>
                        </svg>
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        {{session('deleted')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            
                <table border="2" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Project Manager</th>
                            <th scope="col">Total members</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count = 1;?>
                        @foreach($trackers as $tracker)
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td>{{$tracker -> name}}</td>
                            <td>{{$tracker -> project_manager}}</td>
                            <td>{{$tracker -> total_member}}</td>
                            <td style="text-overflow: ellipsis;">{{$tracker -> desc}}</td>
                            <td>
                                <a href="{{route('tracker.edit', ['tracker' => $tracker])}}" class="btn btn-outline-success">Edit</a>
                            </td>
                            <td>
                                <form method ="post" action="{{route('tracker.destroy', ['tracker' => $tracker])}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-outline-danger" value ="Delete"/>
                                </form>
                            </td>
                        </tr><?php 
				  $count = $count + 1;
				  ?>
                        @endforeach
                        
                    </tbody>
                </table>
    </div>
    

</body>
</html>