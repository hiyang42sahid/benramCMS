<?php   
function home_base_url(){   

    // first get http protocol if http or https

    $base_url = (isset($_SERVER['HTTPS']) &&

                 $_SERVER['HTTPS']!='off') ? 'https://' : 'http://';

    // get default website root directory

    $tmpURL = dirname(__FILE__);

    // when use dirname(__FILE__) will return value like this "C:\xampp\htdocs\my_website",

    //convert value to http url use string replace, 

    // replace any backslashes to slash in this case use chr value "92"

    $tmpURL = str_replace(chr(92),'/',$tmpURL);

    // now replace any same string in $tmpURL value to null or ''

    // and will return value like /localhost/my_website/ or just /my_website/

    $tmpURL = str_replace($_SERVER['DOCUMENT_ROOT'],'',$tmpURL);

    // delete any slash character in first and last of value

    $tmpURL = ltrim($tmpURL,'/');

    $tmpURL = rtrim($tmpURL, '/');


    // check again if we find any slash string in value then we can assume its local machine

    if (strpos($tmpURL,'/')){

        // explode that value and take only first value

        $tmpURL = explode('/',$tmpURL);

        $tmpURL = $tmpURL[0].'/';

    }

    // now last steps

    // assign protocol in first value

    if ($tmpURL !== $_SERVER['HTTP_HOST'])

        // if protocol its http then like this

        $base_url .= $_SERVER['HTTP_HOST'].'/'.$tmpURL;

    else

        // else if protocol is https

        $base_url .= $tmpURL.'/';

    // give return value

    return $base_url.'/'; 
     // return $base_url; 

}
 
    
$base_url = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
$path =dirname(__FILE__);

define('WEB_URL', home_base_url()); 
define('ROOT_PATH', $path); 
define('title','Benram CMS');
    //$dbc = mysqli_connect('localhost', 'klkkqfxj_user', 'ED*A2{aK**Xa', 'klkkqfxj_ahc') or die('Could not connect because: '.mysqli_connect_error());
 $dbc = mysqli_connect('localhost', 'root', 'root', 'benram_cms') or die('Could not connect because: '.mysqli_connect_error());
 
?>
