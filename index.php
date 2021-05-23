<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Example 1</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Code Example 1</h1>

        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="src/pictures/tennis.jpg" width="100%" height="225" />

                            <div class="card-body text-center">
                                <h2>Product #1</h2>
                                <button type="button" class="btn btn-primary btnAction" data-toggle="modal" data-target="#exampleModal" data-product="tennis">
                                    More Details...
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="src/pictures/football.jpeg" width="100%" height="225" />

                            <div class="card-body text-center">
                                <h2>Product #2</h2>
                                <button type="button" class="btn btn-primary btnAction" data-toggle="modal" data-target="#exampleModal" data-product="football">
                                    More Details...
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="src/pictures/vollyball.jpg" width="100%" height="225" />

                            <div class="card-body text-center">
                                <h2>Product #3</h2>

                                <button type="button" class="btn btn-primary btnAction" data-toggle="modal" data-target="#exampleModal" data-product="vollyball">
                                    More Details...
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted bg-dark">
        <div class="container">
            <p class="mb-1">Tech uses: HTML, CSS, Bootstrap, JQuery, PHP</p>
            <p class="mb-0">Written by: Roy Keren 2021/05</p>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="script.js"></script>
    </footer>

</body>
</html>