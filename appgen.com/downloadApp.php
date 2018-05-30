<?php

 include 'PhonegapBuildApi.php';
 $data = json_decode(file_get_contents('php://input'), true);
 if(!empty($data))
 {
 $obj = new PhonegapBuildApi('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhdXRoIiwiaXNzIjoicGdiIiwianRpIjoiNDI5NzJkYmEtMjRhZi00NGIwLTkzYzktZmY3MTY4OGQ0Y2JhIn0.Wx8Z_0WmKt-GNfNrDBGFBJz55pMyfAbuVvIiiLQu4tg');
 $res=$obj->downloadApplicationPlatform($data["AppId"],$data["plateform"]);
 if(!empty($res))
 {
    echo json_encode($res);
    die();
 }
 die();
}
 ?>