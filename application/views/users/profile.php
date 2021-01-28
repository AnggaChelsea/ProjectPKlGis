<div class="main-content" style="margin-top:-70px;">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="sukses" style="width: 100%;"> <?= $this->session->flashdata('message'); ?> </div>
            <div class="col-md-4">
                <!-- <img src="<?= base_url('template/assets/img/profile/') . $user['image']  ?>" class="card-img" alt="..."> -->
                <img src="<?= $user['image']  ?>" class="card-img container" style="border-radius: 20px; width:140px; height:100px;  " alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email'] ?></p>
                    <p class="card-text"><small class="text-muted" style="color:blue;">Member Sejak
                            <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
        

<script type="text/javascript">
    function getLocation() {
        const status = document.getElementById('status');
        const demo = document.getElementById('demo');

        demo.href = '';
        demo.textContent = '';
    }

    function success(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        status.textContent = '';
        demo.href = `https://google.maps/${latitiude}/${longitude}`;
        demo.textContent = `latitude : ${latitude}, longitude ${longitude}`;
    }

    function error() {
        status.textContent = 'map tidak terdeteksi karna jaringan memungkinka tidak bersahabat';

    }
    if (!navigator.geolocation) {
        status.textContent = 'geolocation tidak support di mobile or desktop anda';
    } else {
        status.textContent = 'detek lokasimu ......'
        navigator.geolocatoin.getCurrentPosition(success, error);
    }

    document.getElementById('koordinatku').addEventListener('click', geoFindMe)
</script>