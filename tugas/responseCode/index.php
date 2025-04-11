<?php
if (isset($_GET['code'])) {
    http_response_code($_GET['code']);
    switch ($_GET['code']) {
        case '200':
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>status : OK</div>
    <div>permintaan berhasil</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>

    ';
            break;
        case '301':
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>status : Moved Permanently</div>
    <div>Redirect Permanen</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>
    ';
            break;
        case '302':
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>status : Found</div>
    <div>Redirect Sementara</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>
    ';
            break;
        case '400':
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>status : Bad Request</div>
    <div>Permintaan Tidak Valid</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>
    ';
            break;
        case '401':
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>status : Unautorized</div>
    <div>Tidak Memiliki Izin Akses</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>
    ';
            break;
        case '403':
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>status : Forbidden</div>
    <div>Akses Ditolak</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>
    ';
            break;
        case '404':
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>status : Not Found</div>
    <div>Halaman Tidak Ditemukan</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>
    ';
            break;
        case '500':
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>status : Internal Server Error</div>
    <div>Kesalahan Server</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>
    ';
            break;
        default:
            echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>Kode Tidak Dikenali</div>
    </div>

    <div style="display: flex; margin-top:15px;">
  <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
  <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
  <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
  <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
  <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
  <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
  <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
  <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
  </div>
    </div>';
    }
} else {
    echo '
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
    <div style="margin-bottom:35px; background-color: #E4E0E1; width: 350px; display:flex; flex-direction:column; align-items:center; justify-content:center; height: 200px; border-radius: 20px; font-size:20px; font-weight: bold;">
    <div>Pilih Response Code Anda</div>
    </div>

    <div style="display: flex;">
    <a href="?code=200" style="width:100px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">200</a>
    <a href="?code=301" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">301</a>
    <a href="?code=302" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">302</a>
    <a href="?code=400" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">400</a>
    <a href="?code=401" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">401</a>
    <a href="?code=403" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">403</a>
    <a href="?code=404" style="width:100px; margin:0px 10px 0px 10px; border-radius:15px; height:50px; cursor:pointer; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">404</a>
    <a href="?code=500" style="width:100px; height:50px; cursor:pointer; border-radius:15px; border-radius:15px; text-decoration:none; color:black; background-color:#E4E0E1; display:flex; justify-content:center; align-items:center">500</a>
    </div>
    </div>';
}