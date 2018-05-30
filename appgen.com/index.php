<?php

 include 'PhonegapBuildApi.php';
 $data = json_decode(file_get_contents('php://input'), true);
 $obj = new PhonegapBuildApi('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhdXRoIiwiaXNzIjoicGdiIiwianRpIjoiNDI5NzJkYmEtMjRhZi00NGIwLTkzYzktZmY3MTY4OGQ0Y2JhIn0.Wx8Z_0WmKt-GNfNrDBGFBJz55pMyfAbuVvIiiLQu4tg');
 
 $options = array(
           'title' => 'umar app',
           'package' => 'com.umrdraz.www',
           'version' => '1',
           'description' => 'this is testing here',
           'debug' => false,
           // don't set defaults for keys, as it will throw an error
           // if you want to set keys just pass them as options
           // 'keys' => array(),
           'private' => false,
           'phonegap_version' => '3.1.0',
           'hydrates' => true,
       );
       $options=array_merge($options,$data);
  $response = $obj->createApplicationFromRepo("https://github.com/apache/cordova-app-hello-world",$options);

  if(!empty($response))
  {
      
      echo json_encode($response);
      die();
    //     Print_r($response);
    //     echo "...........";
    //     echo"start";
    
    //     //3176873
    //      $res=$obj->downloadApplicationPlatform("3178418","ios");
    //   print_r( $res);
    //   die();
  }
  else
  {
      echo $obj->geterror();
      echo " not created any app ";
  } 
  die()?>



<html>
    <head><title>testing</title></head>
    
    <body>
        <form method="post" action="">
            <input type="text" name="url" />
            <input type="submit" name="submit" value="submit">
            </form>
        
    </body>
    <?php if(isset($_POST['submit'])) {
    
    echo "raza";
    $obj = new PhonegapBuildApi('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhdXRoIiwiaXNzIjoicGdiIiwianRpIjoiNDI5NzJkYmEtMjRhZi00NGIwLTkzYzktZmY3MTY4OGQ0Y2JhIn0.Wx8Z_0WmKt-GNfNrDBGFBJz55pMyfAbuVvIiiLQu4tg');

    
  $options = array(
            'title' => 'umar app',
            'package' => 'com.umrdraz.www',
            'version' => '1',
            'description' => 'this is testing here',
            'debug' => false,
            // don't set defaults for keys, as it will throw an error
            // if you want to set keys just pass them as options
            // 'keys' => array(),
            'private' => false,
            'phonegap_version' => '3.1.0',
            'hydrates' => true,
        );
   
   
  
    
}
else
{
    echo "nothing";
}
?>
    
    
    
</html>