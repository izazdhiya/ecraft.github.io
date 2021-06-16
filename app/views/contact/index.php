<!-- Start Content Page -->

    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Kontak Kami</h1>
            <p>
                Jika Mengalami kendala bisa menggunakan fitur ini dan terdapat lokasi kantor tempat kerja
            </p>
        </div>
    </div>

    <!-- Start Map -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-8.184435, 113.661404, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-8.184435, 113.661404, 13]).addTo(mymap)
            .bindPopup("<b>E Craft</b> office<br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
    <!-- Ena Map -->

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" action="<?= BASEURL; ?>/contact/aduan">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Nama Lengkap</label>
                        <input type="text" class="form-control mt-1" id="nama" name="nama" placeholder="Nama...">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email...">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Judul</label>
                    <input type="text" class="form-control mt-1" id="judul" name="judul" placeholder="Judul...">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Penjelasan Kendala</label>
                    <textarea class="form-control mt-1" id="pesan" name="pesan" placeholder="Pesan..." rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <input type="submit" class="btn btn-success btn-lg px-3" name="submit" value="Kirim">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- End Contact -->