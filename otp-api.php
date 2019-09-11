<?php include('../inc/style.php')?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>DataGen SMS API</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <?php include('../inc/style.php')?>
    
    <style type="text/css">
      html {
  scroll-behavior: smooth;
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="../img/logo.png"></a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <button class="btn btn-sm btn-outline-light">Sign Up Now </button>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>SMS Documentation</span> 
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span> 
            </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Overview OTP API
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Authentication-Key">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Generate Auth Key
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Create-Campaign-API">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Create Campaign API
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Response">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Response
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Sample-Codes">
                  <span data-feather="file-text"><i class="fas fa-file-alt"></i> </span> 
                  Sample Codes
                </a>
              </li>
                          <li class="nav-item">
                <a class="nav-link" href="#Need-Help">
                  <span data-feather="file-text"><i class="fas fa-question-circle"></i> </span> 
                  Need Support
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">OTP API</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Generate Key</button>
              </div>
            </div>
          </div>
          <div class="api-section">
            <h5>Overview</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div id="Authentication-Key" class="api-section">
            <h5>Authentication Key</h5>
            <p> HTTP requests to the APIs are protected with user-based authentication key authkey. For every request, you would be needing this key. Please visit here for more info. </p>
          </div>
          
          <div id="Authentication-Key" class="api-section">
            <h5>Create Campaign API</h5>
            <div class="table-responsive">
              <table class="table table-striped table-bordered ">
                <thead>
                  <tr>
                    <th>Variable</th>
                    <th>Value</th>
                    <th>Explanation</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>auth</td>
                    <td>user auth key</td>
                    <td>This is the authkey which you generate from HTTP API</td>
                  </tr>
                  <tr>
                    <td>msisdn</td>
                    <td>919xxxxx,919yyyyyyy,919zzzzz</td>
                    <td>You may have multiple numbers by comma separated</td>
                  </tr>
                  <tr>
                    <td>senderid</td>
                    <td>enter sender id</td>
                    <td>1 : - for India enter 6 character approved sender id <br>
                    2 : - for international enter 10 character sender id</td>
                  </tr>
                  
                  
                  <tr>
                    <td>message</td>
                    <td>type your own message.</td>
                    <td>1 : - english message that you want to send <br>
                    2 : - for unicode type=1</td>
                  </tr>
                  <tr>
                    <td>countrycode</td>
                    <td>enter country code in which you want to send messgae</td>
                    <td>its an optional parameter if you do not include it ,system by default send message in India(91)
                    Note:-don't include country code with mobile number</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>






<div id="Create-Campaign-API" class="api-section">
  <div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;">   <strong>NOTE :</strong>  pass either voiceid or templateid
</div>
<code>
  <pre>
  http://localhost/API/sms-api.php?auth=XXXXX&msisdn=xxxxx&senderid=xxxxxx&message=xxxxx 
  Parameters 
  auth=XXX //your auth key
  message=message // message you want to send //required if type=1
  msisdn=xxxxx,xxxxxxx,xxxxxx //this is comma separated mobile numbers (max 1000)
  senderid=your sender id // required
  countrycode=enter country code // optional
  type=1 // optional for unicode message
  </pre>
</code>
</div>


   <div id="Response" class="api-section">
            <h5>Response</h5>
<pre>
{"status":"success","validcnt":1,"campg_id":22,"code":"100","ts":"2018-11-21 13:23:19"}
{"status":"failure","code":401,"desc":"No Auth","ts":"2018-11-20 08:34:04"}
{"status":"failure","code":402,"desc":"Invalid Auth","ts":"2018-11-20 13:03:48"}
{"status":"failure","code":405,"desc":"missing type parameter","ts":"2018-11-20 13:04:39"}
{"status":"failure","code":406,"desc":"Message Not Passed","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":407,"desc":"You Don't have HTTP API permission","ts":"2018-11-20 13:04:39"}
{"status":"failure","code":408,"desc":"Invalid Sender ID","ts":"2018-11-20 13:04:39"}
{"status":"failure","code":410,"desc":"Msisdn Not Passed","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":411,"desc":"MSISDN Limit Exceed","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":412,"desc":"Insufficient Balance!","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":413,"desc":"Sender Id Not Approved","ts":"2018-11-20 12:56:45"}
{"status":"failure","code":414,"desc":"Given country not active for your account please contact admin","ts":"2018-11-20 12:56:45"}
</pre>
</div>



   <div id="Sample-Codes" class="api-section">
            <h5>Sample Codes</h5>


<div class="api">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class=""><a href="#tab1" class="nav-link active" data-toggle="tab">PHP</a></li>
                                <li><a class="nav-link" href="#tab2" data-toggle="tab">ASP.Net</a></li>
                                <li><a class="nav-link" href="#tab3" data-toggle="tab">Phython</a></li>
                                <li><a class="nav-link" href="#tab4" data-toggle="tab">ASP</a></li>
                                <li><a class="nav-link" href="#tab5" data-toggle="tab">Node Js</a></li>
                                <li><a class="nav-link" href="#tab6" data-toggle="tab">Java</a></li>
                            </ul>
                            <!-- Tab panels -->
                            <div class="tab-content">
                                <div class="tab-pane  active" id="tab1">
                                    <div class="panel-body">
<pre>$sender =XXXX;
$mob =XXXXX;
$auth=Your auth key;
$msg = urlencode("test"); 

$url = 'https://global.datagenit.com/API/sms-api.php?auth='.$auth.'&amp;msisdn='.$mob.'&amp;senderid='.$sender.'&amp;message='.$msg.'';  // API URL

SendSMS($url);  // call function that return response with code

function SendSMS($hostUrl){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $hostUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1); // change to 1 to verify cert
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result = curl_exec($ch);
return $result;
} 
</pre>
                                    </div>
                                </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <div class="panel-body">
<pre>                                     
using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;

using System.IO;
using System.Net;

public void SMSSend()
{
    WebClient client = new WebClient();
    string baseurl = "https://global.datagenit.com/API/sms-api.php?auth=xxxxx&amp;senderid=xxxxx&amp;msisdn=xxxxxx&amp;message=Hello";
    Stream data = client.OpenRead(baseurl);
    StreamReader reader = new StreamReader(data);
    string s = reader.ReadToEnd();
    data.Close();
    reader.Close();
} 

</pre>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="tab-pane fade" id="tab3">
                                            <div class="panel-body">
<pre>                                     
import http.client

conn = http.client.HTTPSConnection("global.datagenit.com")

headers = {
    'cache-control': "no-cache"
    }

conn.request("GET", "/API/sms-api.php?auth=xxxx&amp;senderid=DATAGN&amp;msisdn=xxxxx&amp;message=Hello", headers=headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))
</pre>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="tab-pane fade" id="tab4">
                                            <div class="panel-body">
<pre>                                     

sResponse = SMSSend(pno, message )
If right(sResponse,15) = "Send Successful" Then
    'write your code here
End If

Function SMSSend (strPh,strMsg)

    Dim msgResponse
    Dim strRequest 
    Dim strUrl
    msgResponse = ""
    
  strPh=right(strPh,10)
    If not IsNumeric(strPh) Or len(strPh) &lt;&gt; 10 Then
    msgResponse = "Enter valid Mobile Number."
    End If
  If strMsg = "" Then
    msgResponse = "Enter text message."
    End If
    
        strUrl = "global.datagenit.com/API/sms-api.php?"
        strRequest = strRequest+"auth=xxxxx"
        strRequest = strRequest+"&amp;senderid=senderid"
        strRequest = strRequest+"&amp;msisdn="+strPh
        strRequest = strRequest+"&amp;message="+Server.URLEncode(strMsg)
     
  strUrl = strUrl+strRequest
  
  If msgResponse = "" Then
    Dim oXML
    Dim sPage
    Err.Clear
    On Error Resume Next
    Set oXML = Server.CreateObject("Msxml2.XMLHTTP")
    oXML.Open "get", strUrl , false
    oXML.Send
    msgResponse = oXML.ResponseText
    Set oXML = Nothing
  End If
  
  SMSSend = msgResponse
  
  If Err.Number &lt;&gt; 0 Then
    SMSSend = "Problem on sending sms : "&amp; Err.Description
  End If
 
End Function
</pre>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="tab-pane fade" id="tab5">
                                            <div class="panel-body">
<pre>                                     
var request = require("request");

var options = { method: 'GET',
  url: 'https://global.datagenit.com/API/sms-api.php',
  qs: 
   { auth: 'xxxxxx',
     senderid: 'DATAGN',
     msisdn: 'xxxxxxx',
     message: 'Hello' },
  headers: 
   {'cache-control': 'no-cache' } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});

</pre>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="tab-pane fade" id="tab6">
                                            <div class="panel-body">
<pre>                                     
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLEncoder;
import java.util.Date;

public class SMSSend {
public static void main(String[] args)
{ try {
Date mydate = new Date(System.currentTimeMillis());
 
URL url = new URL("http://global.datagenit.com/API/sms-api.php?auth=xxxxx&amp;senderid=xxxxx&amp;msisdn=xxxxxx&amp;message=Hello);
HttpURLConnection conn = (HttpURLConnection)url.openConnection();
conn.setRequestMethod("GET");
conn.setDoOutput(true);
conn.setDoInput(true);
conn.setUseCaches(false);
conn.connect();
BufferedReader rd = new BufferedReader(new InputStreamReader(conn.getInputStream()));
String line;
StringBuffer buffer = new StringBuffer();
while ((line = rd.readLine()) != null)
{
buffer.append(line).append("\n");
}
System.out.println(buffer.toString());
rd.close();
conn.disconnect();
}catch(Exception e)
{e
.printStackTrace();
}
}}
Note: Required javax.servlet.jar and jdom.jar to execute ( downloadable from internet,add to
classpath ).
</pre>
                                            </div>
                                        </div>
                                        
                                       
           <div id="Need-Help" class="api-section">
            <h5>Need Help</h5>
            <p>If you need any help related to the API integration then mail us on : 
              <strong> Support@datagenit.com </strong> or call us : <strong> +91-9999-706-864 </strong> </p>
              <p>Our Team Will Help you related to your concern.</p>
          </div>                                  
                                        
                                        
                                        
        <a href="<?php echo $baseurl ?>"> Home </a> . <a href="<?php echo $baseurl ?>/terms-of-use.php"> Terms of use </a> . <a href="<?php echo $baseurl ?>/privacy-policy.php">  Privacy policy </a>                              
                                        
                            </div>
                        </div>

          
        </main>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
  </body>
</html>