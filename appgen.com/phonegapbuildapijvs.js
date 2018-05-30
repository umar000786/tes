var IOS = "ios";
var Androd = "android";
var ROLE_TESTER = "tester"; // read-only
var ROLE_DEV = "dev";
var endpoint = "https://build.phonegap.com/api/v1/";
var methods = array("get", "post", "put", "delete");
var codes = array(200, 201, 202, 302);
var username = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhdXRoIiwiaXNzIjoicGdiIiwianRpIjoiNWE2ODRjOGUtMTgyZS00M2RjLWIxOWEtYWIwN2JiNWQ2YTc4In0.MJcYWBf8Qdpnygs_zSLcj1L0219a-tP1XZcxbaxSmIM";
var password = "";
var token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhdXRoIiwiaXNzIjoicGdiIiwianRpIjoiNWE2ODRjOGUtMTgyZS00M2RjLWIxOWEtYWIwN2JiNWQ2YTc4In0.MJcYWBf8Qdpnygs_zSLcj1L0219a-tP1XZcxbaxSmIM";
var accessToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhdXRoIiwiaXNzIjoicGdiIiwianRpIjoiNWE2ODRjOGUtMTgyZS00M2RjLWIxOWEtYWIwN2JiNWQ2YTc4In0.MJcYWBf8Qdpnygs_zSLcj1L0219a-tP1XZcxbaxSmIM";
var success = false;
var $error = "";


function createApplicationfromRepo(source, option)
 {
  var ary = { create_method: "remote_repo", repo: source };
  option = Option.concat(ary);
  return createApplication(option);
}

function createApplication(option) 
{
  var mydefaultdata = {
    title: "Phonegap Application",
    package: "com.phonegap.www",
    version: "0.0.1",
    description: "",
    debug: false,
    // don't set defaults for keys, as it will throw an error
    // if you want to set keys just pass them as options
    // 'keys' => array(),
    private: true,
    phonegap_version: "3.1.0",
    hydrates: true
  };
  option = option.concat(mydefaultdata);
  return request("app", "post", option);
}
function request(uri, method, option) {
  uri = endpoint + uri;
  if (accessToken.length > 0) {
    uri = uri + "?access_token=" + accessToken;
  }
  mdata = option;
  myary = { data: Option };
  mdata = mdata.concat(myary);
  $.ajax({
    url: uri,
    type: "POST",
    data: mdata.serialize(),
    success: function(data) {
      console.log(data);
    },
    error: function(error) {
      console.log(error);
    }
  });
}
