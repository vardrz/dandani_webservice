<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .button {
            /* display: inline-block; */
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            /* margin: 10px; */
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .location {
            width: 40%;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        /* Style untuk input type file */
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }

        .custom-file-input::before {
            content: 'Pilih Foto';
            display: inline-block;
            background: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            border-radius: 5px;
            padding: 8px 12px;
            outline: none;
            white-space: nowrap;
            cursor: pointer;
            font-weight: 700;
        }

        .custom-file-input:hover::before {
            border-color: #0056b3;
        }

        .custom-file-input:active::before {
            background: #0056b3;
        }

        #imagePreview {
            max-width: 100%;
            max-height: 200px;
            margin-top: 10px;
        }

        #imagePreview img {
            width: 80%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form method="post" action="/addmitras" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label class="mb-1">Akun</label>
                <input type="text" class="form-control" value="{{ $akun }}" name="account" readonly>
            </div>
            <div class="form-group mb-2">
                <label class="mb-1">Nama Tempat / Jasa</label>
                <input type="text" class="form-control" name="name" placeholder="Contoh: Berkah Jaya Service">
            </div>
            <div class="form-group mb-2">
                <label class="mb-1">Spesialis</label>
                <input type="text" class="form-control" name="specialist" placeholder="Contoh: Laptop, Komputer, Printer">
            </div>
            <div class="form-group mb-2">
                <label class="mb-1">Kecamatan</label>
                <input type="text" class="form-control" name="district" placeholder="Kecamatan">
            </div>
            <div class="form-group mb-2">
                <label class="mb-1">Kota</label>
                <input type="text" class="form-control" name="city" placeholder="Kota">
            </div>
            <div class="form-group mt-3 mb-3">
                <input type="file" accept=".png,.jpg,.jpeg,.heic" class="custom-file-input" name="photo" id="fileInput">
            </div>
            <input type="hidden" name="maps" value="" id="maps">
            <div class="form-group mt-3 mb-3">
                <div class="row">
                    <div class="col-sm-6">
                        <span>Lokasi&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <button type="button" class="location mt-3 mb-3" id="map">Cek Koordinat</button>
                    </div>
                    <div class="col-sm-6">
                        <div id="coordinate" class="mt-3 mb-3"></div>
                    </div>
                </div>
            </div>
            <button type="submit" class="button">Daftar</button>
            <center class="mt-5">
                <div id="imagePreview"></div>
            </center>
        </form>
    </div>
    

    <script>
        const fileInput = document.getElementById("fileInput");
        const imagePreview = document.getElementById("imagePreview");

        fileInput.addEventListener("change", function () {
        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            const img = document.createElement("img");
            img.src = reader.result;
            imagePreview.innerHTML = "";
            imagePreview.appendChild(img);
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            imagePreview.innerHTML = "Pilih gambar untuk ditampilkan.";
        }
        });

        const map = document.getElementById("map");
        map.addEventListener('click', function(event) {
            navigator.geolocation.getCurrentPosition(position => {
                const { latitude, longitude } = position.coords;
                console.log(latitude);
                console.log(longitude);
                document.getElementById("coordinate").innerHTML = latitude + "," + longitude;
                document.getElementById("maps").value = latitude + "," + longitude;
                // document.getElementById("coordinate").innerHTML += "<a href=http://www.google.com/maps/place/" + latitude + "," + longitude + ">Buka Maps</a>";
                // Show a map centered at latitude / longitude.
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>