<?php
 include 'PhonegapBuildApi.php';
 $obj = new PhonegapBuildApi('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhdXRoIiwiaXNzIjoicGdiIiwianRpIjoiNDI5NzJkYmEtMjRhZi00NGIwLTkzYzktZmY3MTY4OGQ0Y2JhIn0.Wx8Z_0WmKt-GNfNrDBGFBJz55pMyfAbuVvIiiLQu4tg');
 $res=$obj->getApplications();
 if(!empty($res))
 {
    echo json_encode($res);
    die();
 }
 ?>