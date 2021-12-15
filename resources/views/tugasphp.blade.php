<!DOCTYPE html>

<head>
{{-- Important Metaset --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- Bootstrap --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <!-- CSS Styling -->
     <style>
        header {
        background-image: url('https://image.freepik.com/free-vector/abstract-triangle-geometricalbackground_1159-2943.jpg')
        }
    </style>
</head>
<body>
<header class="bg-bold text-left">
    <div class="media-body" style="font-size: 20px;">
        <h3 id="nama">Tugas PHP</h3>
        <h3 id="nrp">5026201055</h3>
    </div>
    </header>
    <div class="container">
        <h2 class="text-center text-white pt-5">Pythagpras Method Calculator PHP</h2>

        <div class="row-no-gutters"><span style="font-size:30px;">Pythagoras</span></div>
        <div>Pythagoras Method Calculator (WIP)</div><p></p>

        <form action="materi" class="form-horizontal" name="registration" method="post">
            @csrf
            <div>Assign Value (x)</div>
            <div class="form-group ">
                <label class="control-label col-sm-1" for="x1">a:</label>
                <div class="col-sm-1">
                    <input class="form-control" name="x1" type="text" id="x1" required>
                </div>
            </div>
            <div>Assign Value (y)</div>
            <div class="form-group ">
                <label class="control-label col-sm-1" for="x2">b:</label>

                <div class="col-sm-1">
                    <input class="form-control" name="x2" type="text" id="x2" required>
                </div>
            </div>
            <img src="https://www.math-only-math.com/images/problems-on-pythagoras-theorem.png">
            <div class="button form-group">
                <div class="col-sm-1"></div>
                <div>
                    <button type="submit" class="btn btn-info" style="background-color:blue">Cari Hasilnya</button>
                </div>
            </div>
        </form>

</body>
</html>


