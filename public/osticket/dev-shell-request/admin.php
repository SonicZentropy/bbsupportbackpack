<?php
require_once( dirname(__FILE__).'/form.lib.php' );

define( 'PHPFMG_USER', "terrypatterson@gmail.com" ); // must be a email address. for sending password to you.
define( 'PHPFMG_PW', "836512" );

?>
<?php
/**
 * GNU Library or Lesser General Public License version 2.0 (LGPLv2)
*/

# main
# ------------------------------------------------------
error_reporting( E_ERROR ) ;
phpfmg_admin_main();
# ------------------------------------------------------




function phpfmg_admin_main(){
    $mod  = isset($_REQUEST['mod'])  ? $_REQUEST['mod']  : '';
    $func = isset($_REQUEST['func']) ? $_REQUEST['func'] : '';
    $function = "phpfmg_{$mod}_{$func}";
    if( !function_exists($function) ){
        phpfmg_admin_default();
        exit;
    };

    // no login required modules
    $public_modules   = false !== strpos('|captcha||ajax|', "|{$mod}|");
    $public_functions = false !== strpos('|phpfmg_ajax_submit||phpfmg_mail_request_password||phpfmg_filman_download||phpfmg_image_processing||phpfmg_dd_lookup|', "|{$function}|") ;   
    if( $public_modules || $public_functions ) { 
        $function();
        exit;
    };
    
    return phpfmg_user_isLogin() ? $function() : phpfmg_admin_default();
}

function phpfmg_ajax_submit(){
    $phpfmg_send = phpfmg_sendmail( $GLOBALS['form_mail'] );
    $isHideForm  = isset($phpfmg_send['isHideForm']) ? $phpfmg_send['isHideForm'] : false;

    $response = array(
        'ok' => $isHideForm,
        'error_fields' => isset($phpfmg_send['error']) ? $phpfmg_send['error']['fields'] : '',
        'OneEntry' => isset($GLOBALS['OneEntry']) ? $GLOBALS['OneEntry'] : '',
    );
    
    @header("Content-Type:text/html; charset=$charset");
    echo "<html><body><script>
    var response = " . json_encode( $response ) . ";
    try{
        parent.fmgHandler.onResponse( response );
    }catch(E){};
    \n\n";
    echo "\n\n</script></body></html>";

}


function phpfmg_admin_default(){
    if( phpfmg_user_login() ){
        phpfmg_admin_panel();
    };
}



function phpfmg_admin_panel()
{    
    if( !phpfmg_user_isLogin() ){
        exit;
    };

    phpfmg_admin_header();
    phpfmg_writable_check();
?>    
<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td valign=top style="padding-left:280px;">

<style type="text/css">
    .fmg_title{
        font-size: 16px;
        font-weight: bold;
        padding: 10px;
    }
    
    .fmg_sep{
        width:32px;
    }
    
    .fmg_text{
        line-height: 150%;
        vertical-align: top;
        padding-left:28px;
    }

</style>

<script type="text/javascript">
    function deleteAll(n){
        if( confirm("Are you sure you want to delete?" ) ){
            location.href = "admin.php?mod=log&func=delete&file=" + n ;
        };
        return false ;
    }
</script>


<div class="fmg_title">
    1. Email Traffics
</div>
<div class="fmg_text">
    <a href="admin.php?mod=log&func=view&file=1">view</a> &nbsp;&nbsp;
    <a href="admin.php?mod=log&func=download&file=1">download</a> &nbsp;&nbsp;
    <?php 
        if( file_exists(PHPFMG_EMAILS_LOGFILE) ){
            echo '<a href="#" onclick="return deleteAll(1);">delete all</a>';
        };
    ?>
</div>


<div class="fmg_title">
    2. Form Data
</div>
<div class="fmg_text">
    <a href="admin.php?mod=log&func=view&file=2">view</a> &nbsp;&nbsp;
    <a href="admin.php?mod=log&func=download&file=2">download</a> &nbsp;&nbsp;
    <?php 
        if( file_exists(PHPFMG_SAVE_FILE) ){
            echo '<a href="#" onclick="return deleteAll(2);">delete all</a>';
        };
    ?>
</div>

<div class="fmg_title">
    3. Form Generator
</div>
<div class="fmg_text">
    <a href="http://www.formmail-maker.com/generator.php" onclick="document.frmFormMail.submit(); return false;" title="<?php echo htmlspecialchars(PHPFMG_SUBJECT);?>">Edit Form</a> &nbsp;&nbsp;
    <a href="http://www.formmail-maker.com/generator.php" >New Form</a>
</div>
    <form name="frmFormMail" action='http://www.formmail-maker.com/generator.php' method='post' enctype='multipart/form-data'>
    <input type="hidden" name="uuid" value="<?php echo PHPFMG_ID; ?>">
    <input type="hidden" name="external_ini" value="<?php echo function_exists('phpfmg_formini') ?  phpfmg_formini() : ""; ?>">
    </form>

		</td>
	</tr>
</table>

<?php
    phpfmg_admin_footer();
}



function phpfmg_admin_header( $title = '' ){
    header( "Content-Type: text/html; charset=" . PHPFMG_CHARSET );
?>
<html>
<head>
    <title><?php echo '' == $title ? '' : $title . ' | ' ; ?>PHP FormMail Admin Panel </title>
    <meta name="keywords" content="PHP FormMail Generator, PHP HTML form, send html email with attachment, PHP web form,  Free Form, Form Builder, Form Creator, phpFormMailGen, Customized Web Forms, phpFormMailGenerator,formmail.php, formmail.pl, formMail Generator, ASP Formmail, ASP form, PHP Form, Generator, phpFormGen, phpFormGenerator, anti-spam, web hosting">
    <meta name="description" content="PHP formMail Generator - A tool to ceate ready-to-use web forms in a flash. Validating form with CAPTCHA security image, send html email with attachments, send auto response email copy, log email traffics, save and download form data in Excel. ">
    <meta name="generator" content="PHP Mail Form Generator, phpfmg.sourceforge.net">

    <style type='text/css'>
    body, td, label, div, span{
        font-family : Verdana, Arial, Helvetica, sans-serif;
        font-size : 12px;
    }
    </style>
</head>
<body  marginheight="0" marginwidth="0" leftmargin="0" topmargin="0">

<table cellspacing=0 cellpadding=0 border=0 width="100%">
    <td nowrap align=center style="background-color:#024e7b;padding:10px;font-size:18px;color:#ffffff;font-weight:bold;width:250px;" >
        Form Admin Panel
    </td>
    <td style="padding-left:30px;background-color:#86BC1B;width:100%;font-weight:bold;" >
        &nbsp;
<?php
    if( phpfmg_user_isLogin() ){
        echo '<a href="admin.php" style="color:#ffffff;">Main Menu</a> &nbsp;&nbsp;' ;
        echo '<a href="admin.php?mod=user&func=logout" style="color:#ffffff;">Logout</a>' ;
    }; 
?>
    </td>
</table>

<div style="padding-top:28px;">

<?php
    
}


function phpfmg_admin_footer(){
?>

</div>

<div style="color:#cccccc;text-decoration:none;padding:18px;font-weight:bold;">
	:: <a href="http://phpfmg.sourceforge.net" target="_blank" title="Free Mailform Maker: Create read-to-use Web Forms in a flash. Including validating form with CAPTCHA security image, send html email with attachments, send auto response email copy, log email traffics, save and download form data in Excel. " style="color:#cccccc;font-weight:bold;text-decoration:none;">PHP FormMail Generator</a> ::
</div>

</body>
</html>
<?php
}


function phpfmg_image_processing(){
    $img = new phpfmgImage();
    $img->out_processing_gif();
}


# phpfmg module : captcha
# ------------------------------------------------------
function phpfmg_captcha_get(){
    $img = new phpfmgImage();
    $img->out();
    //$_SESSION[PHPFMG_ID.'fmgCaptchCode'] = $img->text ;
    $_SESSION[ phpfmg_captcha_name() ] = $img->text ;
}



function phpfmg_captcha_generate_images(){
    for( $i = 0; $i < 50; $i ++ ){
        $file = "$i.png";
        $img = new phpfmgImage();
        $img->out($file);
        $data = base64_encode( file_get_contents($file) );
        echo "'{$img->text}' => '{$data}',\n" ;
        unlink( $file );
    };
}


function phpfmg_dd_lookup(){
    $paraOk = ( isset($_REQUEST['n']) && isset($_REQUEST['lookup']) && isset($_REQUEST['field_name']) );
    if( !$paraOk )
        return;
        
    $base64 = phpfmg_dependent_dropdown_data();
    $data = @unserialize( base64_decode($base64) );
    if( !is_array($data) ){
        return ;
    };
    
    
    foreach( $data as $field ){
        if( $field['name'] == $_REQUEST['field_name'] ){
            $nColumn = intval($_REQUEST['n']);
            $lookup  = $_REQUEST['lookup']; // $lookup is an array
            $dd      = new DependantDropdown(); 
            echo $dd->lookupFieldColumn( $field, $nColumn, $lookup );
            return;
        };
    };
    
    return;
}


function phpfmg_filman_download(){
    if( !isset($_REQUEST['filelink']) )
        return ;
        
    $filelink =  base64_decode($_REQUEST['filelink']);
    $file = PHPFMG_SAVE_ATTACHMENTS_DIR . basename($filelink);

    // 2016-12-05:  to prevent *LFD/LFI* attack. patch provided by Pouya Darabi, a security researcher in cert.org
    $real_basePath = realpath(PHPFMG_SAVE_ATTACHMENTS_DIR); 
    $real_requestPath = realpath($file);
    if ($real_requestPath === false || strpos($real_requestPath, $real_basePath) !== 0) { 
        return; 
    }; 

    if( !file_exists($file) ){
        return ;
    };
    
    phpfmg_util_download( $file, $filelink );
}


class phpfmgDataManager
{
    var $dataFile = '';
    var $columns = '';
    var $records = '';
    
    function __construct(){
        $this->dataFile = PHPFMG_SAVE_FILE; 
    }

    function phpfmgDataManager(){
        $this->dataFile = PHPFMG_SAVE_FILE; 
    }
    
    function parseFile(){
        $fp = @fopen($this->dataFile, 'rb');
        if( !$fp ) return false;
        
        $i = 0 ;
        $phpExitLine = 1; // first line is php code
        $colsLine = 2 ; // second line is column headers
        $this->columns = array();
        $this->records = array();
        $sep = chr(0x09);
        while( !feof($fp) ) { 
            $line = fgets($fp);
            $line = trim($line);
            if( empty($line) ) continue;
            $line = $this->line2display($line);
            $i ++ ;
            switch( $i ){
                case $phpExitLine:
                    continue;
                    break;
                case $colsLine :
                    $this->columns = explode($sep,$line);
                    break;
                default:
                    $this->records[] = explode( $sep, phpfmg_data2record( $line, false ) );
            };
        }; 
        fclose ($fp);
    }
    
    function displayRecords(){
        $this->parseFile();
        echo "<table border=1 style='width=95%;border-collapse: collapse;border-color:#cccccc;' >";
        echo "<tr><td>&nbsp;</td><td><b>" . join( "</b></td><td>&nbsp;<b>", $this->columns ) . "</b></td></tr>\n";
        $i = 1;
        foreach( $this->records as $r ){
            echo "<tr><td align=right>{$i}&nbsp;</td><td>" . join( "</td><td>&nbsp;", $r ) . "</td></tr>\n";
            $i++;
        };
        echo "</table>\n";
    }
    
    function line2display( $line ){
        $line = str_replace( array('"' . chr(0x09) . '"', '""'),  array(chr(0x09),'"'),  $line );
        $line = substr( $line, 1, -1 ); // chop first " and last "
        return $line;
    }
    
}
# end of class



# ------------------------------------------------------
class phpfmgImage
{
    var $im = null;
    var $width = 73 ;
    var $height = 33 ;
    var $text = '' ; 
    var $line_distance = 8;
    var $text_len = 4 ;

    function __construct( $text = '', $len = 4 ){
        $this->phpfmgImage( $text, $len );
    }

    function phpfmgImage( $text = '', $len = 4 ){
        $this->text_len = $len ;
        $this->text = '' == $text ? $this->uniqid( $this->text_len ) : $text ;
        $this->text = strtoupper( substr( $this->text, 0, $this->text_len ) );
    }
    
    function create(){
        $this->im = imagecreate( $this->width, $this->height );
        $bgcolor   = imagecolorallocate($this->im, 255, 255, 255);
        $textcolor = imagecolorallocate($this->im, 0, 0, 0);
        $this->drawLines();
        imagestring($this->im, 5, 20, 9, $this->text, $textcolor);
    }
    
    function drawLines(){
        $linecolor = imagecolorallocate($this->im, 210, 210, 210);
    
        //vertical lines
        for($x = 0; $x < $this->width; $x += $this->line_distance) {
          imageline($this->im, $x, 0, $x, $this->height, $linecolor);
        };
    
        //horizontal lines
        for($y = 0; $y < $this->height; $y += $this->line_distance) {
          imageline($this->im, 0, $y, $this->width, $y, $linecolor);
        };
    }
    
    function out( $filename = '' ){
        if( function_exists('imageline') ){
            $this->create();
            if( '' == $filename ) header("Content-type: image/png");
            ( '' == $filename ) ? imagepng( $this->im ) : imagepng( $this->im, $filename );
            imagedestroy( $this->im ); 
        }else{
            $this->out_predefined_image(); 
        };
    }

    function uniqid( $len = 0 ){
        $md5 = md5( uniqid(rand()) );
        return $len > 0 ? substr($md5,0,$len) : $md5 ;
    }
    
    function out_predefined_image(){
        header("Content-type: image/png");
        $data = $this->getImage(); 
        echo base64_decode($data);
    }
    
    // Use predefined captcha random images if web server doens't have GD graphics library installed  
    function getImage(){
        $images = array(
			'E9CF' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAXklEQVR4nGNYhQEaGAYTpIn7QkMYQxhCHUNDkMQCGlhbGR0CHRhQxEQaXRsEsYgxwsTATgqNWro0ddXK0Cwk9wU0MAYiqYOKMTRiirFgsQPTLVA3o4gNVPhREWJxHwDWk8r0K9tE2AAAAABJRU5ErkJggg==',
			'0DF7' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAX0lEQVR4nGNYhQEaGAYTpIn7GB1EQ1hDA0NDkMRYA0RaWYG0CJKYyBSRRlc0sYBWiFgAkvuilk5bmRq6amUWkvug6loZMPVOYcC0IwBZDOIWRgcMN6OJDVT4URFicR8Ast/Lhw8dqe4AAAAASUVORK5CYII=',
			'97F5' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbklEQVR4nGNYhQEaGAYTpIn7WANEQ11DA0MDkMREpjA0ujYwOiCrC2jFKtbK2sDo6oDkvmlTV01bGroyKgrJfayuDAGsIHORbW5ldEAXEwCaBjTPAVlMZIoIUIwhANl9rAFgsakOgyD8qAixuA8AJbTKdm8l8FoAAAAASUVORK5CYII=',
			'7887' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaElEQVR4nGNYhQEaGAYTpIn7QkMZQxhCGUNDkEVbWVsZHR0aRFDERBpdGwJQxaZA1AUguy9qZdiq0FUrs5Dcx+gAVteKbC9rA9i8KchiIhCxAGSxgAaQXkcHVDGwm1HEBir8qAixuA8AQKDLW4jbiYkAAAAASUVORK5CYII=',
			'29DA' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcElEQVR4nGNYhQEaGAYTpIn7WAMYQ1hDGVqRxUSmsLayNjpMdUASC2gVaXRtCAgIQNYNFgt0EEF237SlS1NXRWZNQ3ZfAGMgkjowZHRgAOkNDUF2SwNLI7o6kQaQWxxRxEJDQW5mRBEbqPCjIsTiPgBU+cweOG3jtAAAAABJRU5ErkJggg==',
			'B79E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAa0lEQVR4nGNYhQEaGAYTpIn7QgNEQx1CGUMDkMQCpjA0Ojo6OiCrC2hlaHRtCEQVm8LQyooQAzspNGrVtJWZkaFZSO4DqgtgCEHT28oI5KOLsTYwYtgh0sCI5pbQAJEGBjQ3D1T4URFicR8AVT/LXFCEuGQAAAAASUVORK5CYII=',
			'743E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZklEQVR4nGNYhQEaGAYTpIn7QkMZWhlDGUMDkEVbGaayNjo6MKCKhTI0BKKKTWF0ZUCog7gpaunSVVNXhmYhuY/RQaSVAc081gbRUAc080RAtqCJAd3Viu4WkBiGmwco/KgIsbgPAJxLykZn5nwHAAAAAElFTkSuQmCC',
			'B456' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAdElEQVR4nM2QKxKAMAwFX0U8Au4TBD6IGDwCThGTG7RHqOGUDK4FJAzkuZ18doLtUoY/5RU/FTgpJy6YRCQyiJTMoWSBm6ovDJQCl3465ZyXZV4LP4mtw8bTvk7ZRm7rG05nFuGh52r2cIaicv7qfw/mxm8HxbTMu5byUSAAAAAASUVORK5CYII=',
			'D72E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbklEQVR4nGNYhQEaGAYTpIn7QgNEQx1CGUMDkMQCpjA0Ojo6OiCrC2hlaHRtCEQXa2VAiIGdFLV01bRVKzNDs5DcB1QXwNDKiKYXyJ+CLsbawBCAJjZFpIHRAVUsNECkgTU0EMXNAxV+VIRY3AcAFILLElHu0UwAAAAASUVORK5CYII=',
			'A5D1' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZ0lEQVR4nGNYhQEaGAYTpIn7GB1EQ1lDGVqRxVgDRBpYGx2mIouJTAGKNQSEIosFtIqEAMVgesFOilo6delSIInsPqCKRleEOjAMDcUUA5qHRYy1FegWNDHGEKCbQwMGQfhREWJxHwC+7c3T4UBb8AAAAABJRU5ErkJggg==',
			'E25E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7QkMYQ1hDHUMDkMQCGlhbWRsYHRhQxEQaXTHEGBpdp8LFwE4KjVq1dGlmZmgWkvuA6qYwNASi6w3AFGN0YMUQA7rE0RFFLDRENNQhlBHFzQMVflSEWNwHAKXEyudncM5yAAAAAElFTkSuQmCC',
			'C7F9' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcUlEQVR4nGNYhQEaGAYTpIn7WENEQ11DA6Y6IImJtDI0ujYwBAQgiQU0gsQYHUSQxRoYWlkRYmAnRa1aNW1p6KqoMCT3AdUFsDYwTEXVy+jACrILxQ7WBqAYih0irSIgMRS3sIaAxVDcPFDhR0WIxX0AzZXLv00XFCgAAAAASUVORK5CYII=',
			'7AB9' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcklEQVR4nGNYhQEaGAYTpIn7QkMZAlhDGaY6IIu2MoawNjoEBKCIsbayNgQ6iCCLTRFpdG10hIlB3BQ1bWVq6KqoMCT3MTqA1DlMRdbL2iAa6toQ0IAsJtIAVNcQgGJHQANYL4pbwGLobh6g8KMixOI+AAu/zVYpE33xAAAAAElFTkSuQmCC',
			'AAFD' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAYElEQVR4nGNYhQEaGAYTpIn7GB0YAlhDA0MdkMRYAxhDWIEyAUhiIlNYW0FiIkhiAa0ija4IMbCTopZOW5kaujJrGpL70NSBYWioaCi6GDZ1MLEATDEUNw9U+FERYnEfAAO/y8hVFIOSAAAAAElFTkSuQmCC',
			'C141' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAYklEQVR4nGNYhQEaGAYTpIn7WEMYAhgaHVqRxURaGQMYWh2mIosFNLIGMEx1CEURawDqDYTrBTspCohWZmYtRXYfSB0rmh1gsdAAVLFGbG7BFGMNYQ0FioUGDILwoyLE4j4A7RbLQLGier8AAAAASUVORK5CYII=',
			'8784' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAc0lEQVR4nGNYhQEaGAYTpIn7WANEQx1CGRoCkMREpjA0Ojo6NCKLBbQyNLoCSTR1rYyODlMCkNy3NGrVtFWhq6KikNwHVBfACDQQ1TxGB9aGwNAQFDHWBlagS1DtEGkA2oEixhog0sCA5uaBCj8qQizuAwBVZs3VyL6KwgAAAABJRU5ErkJggg==',
			'6EC3' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAYUlEQVR4nGNYhQEaGAYTpIn7WANEQxlCHUIdkMREpog0MDoEOgQgiQW0iDSwNgg0iCCLNYDEQDTCfZFRU8OWrlq1NAvJfSFTUNRB9LZCxEQwxFDtwOYWbG4eqPCjIsTiPgDIQsyuvwandQAAAABJRU5ErkJggg==',
			'ABC5' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAb0lEQVR4nGNYhQEaGAYTpIn7GB1EQxhCHUMDkMRYA0RaGR0CHZDViUwRaXRtEEQRC2gVaWVtYHR1QHJf1NKpYUtXrYyKQnIfRB3QDCS9oaEg81DFgOrAdqCJAd0SEBCAIgZys8NUh0EQflSEWNwHAL2PzEx3MsmqAAAAAElFTkSuQmCC',
			'F526' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbUlEQVR4nGNYhQEaGAYTpIn7QkNFQxlCGaY6IIkFNIg0MDo6BASgibE2BDoIoIqFMADFkN0XGjV16aqVmalZSO4DmtPo0MqIZh5QbAqjgwiqeY0OAehirK2MDgxoehlDWEMDUNw8UOFHRYjFfQDC7syw5D15pwAAAABJRU5ErkJggg==',
			'D889' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAYElEQVR4nGNYhQEaGAYTpIn7QgMYQxhCGaY6IIkFTGFtZXR0CAhAFmsVaXRtCHQQQREDqXOEiYGdFLV0Zdiq0FVRYUjug6hzmCqCYV5AAxYxVDuwuAWbmwcq/KgIsbgPALq/zYSa73JuAAAAAElFTkSuQmCC',
			'638E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAWklEQVR4nGNYhQEaGAYTpIn7WANYQxhCGUMDkMREpoi0Mjo6OiCrC2hhaHRtCEQVa2BAVgd2UmTUqrBVoStDs5DcFzKFAdO8VizmYRHD5hZsbh6o8KMixOI+AGzZygr4KjxUAAAAAElFTkSuQmCC',
			'86AE' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7WAMYQximMIYGIImJTGFtZQhldEBWF9Aq0sjo6IgiJjJFpIG1IRAmBnbS0qhpYUtXRYZmIblPZIpoK5I6uHmuoVjE0NSB3IKuF+RmoBiKmwcq/KgIsbgPAC2SyuJ8ZkXtAAAAAElFTkSuQmCC',
			'D1C8' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAYElEQVR4nGNYhQEaGAYTpIn7QgMYAhhCHaY6IIkFTGEMYHQICAhAFmtlDWBtEHQQQRFjAIoxwNSBnRS1FIRWTc1Cch+aOiQxRizmodkxhQHDLaEBrKHobh6o8KMixOI+AG6cy49XhZAHAAAAAElFTkSuQmCC',
			'5609' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcklEQVR4nGNYhQEaGAYTpIn7QkMYQximMEx1QBILaGBtZQhlCAhAERNpZHR0dBBBEgsMEGlgbQiEiYGdFDZtWtjSVVFRYcjuaxVtZW0ImIqsl6FVpNEVZCqyHUAxoBUodohMwXQLawCmmwcq/KgIsbgPANhEy+dDCsyBAAAAAElFTkSuQmCC',
			'2B3B' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZElEQVR4nGNYhQEaGAYTpIn7WANEQxhDGUMdkMREpoi0sjY6OgQgiQW0ijQ6NAQ6iCDrbhVpZUCog7hp2tSwVVNXhmYhuy8ARR0YMjpgmsfagCkm0oDpltBQTDcPVPhREWJxHwAIZ8wW5D5/kwAAAABJRU5ErkJggg==',
			'DA6F' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7QgMYAhhCGUNDkMQCpjCGMDo6OiCrC2hlbWVtQBcTaXRtYISJgZ0UtXTaytSpK0OzkNwHVodhnmioa0MgFvPQxKaINDqi6Q0NEGl0CGVEERuo8KMixOI+ALtyzAJJseIuAAAAAElFTkSuQmCC',
			'3761' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcUlEQVR4nGNYhQEaGAYTpIn7RANEQx1CGVqRxQKmMDQ6OjpMRVHZytDo2gBUiSw2haGVtQGuF+yklVGrpi2dumopivumMASwOjq0oprH6MDaEIAmxtqALhYwRaSBEU2vaIBIA0MoQ2jAIAg/KkIs7gMAx6XLzvNXp8UAAAAASUVORK5CYII=',
			'5CD5' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbklEQVR4nGNYhQEaGAYTpIn7QkMYQ1lDGUMDkMQCGlgbXRsdHRhQxEQaXBsCUcQCA0QaWBsCXR2Q3Bc2bdqqpasio6KQ3dcKUgcyAUk3FrGAVogdyGIiU0BucQhAdh9rAMjNDFMdBkH4URFicR8AdTDNPrNKfWQAAAAASUVORK5CYII=',
			'7C0F' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZElEQVR4nGNYhQEaGAYTpIn7QkMZQxmmMIaGIIu2sjY6hDI6oKhsFWlwdHREFZsi0sDaEAgTg7gpatqqpasiQ7OQ3MfogKIODFkbMMVEGjDtCGjAdEtAA9jNqG4ZoPCjIsTiPgBOS8nbG6X6OgAAAABJRU5ErkJggg==',
			'691C' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAb0lEQVR4nGNYhQEaGAYTpIn7WAMYQximMEwNQBITmcLayhDCECCCJBbQItLoGMLowIIs1iDS6DCF0QHZfZFRS5dmTVuZhey+kCmMgUjqIHpbGRoxxVjAYsh2gN0yBdUtIDczhjqguHmgwo+KEIv7APkGy0sLSVsmAAAAAElFTkSuQmCC',
			'9C33' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAYElEQVR4nGNYhQEaGAYTpIn7WAMYQxlDGUIdkMREprA2ujY6OgQgiQW0ijQ4NAQ0iKCJMTSCRBHumzZ12qpVU1ctzUJyH6srijoIBOlFM08Aix3Y3ILNzQMVflSEWNwHALdHziQ03eDBAAAAAElFTkSuQmCC',
			'149B' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaklEQVR4nGNYhQEaGAYTpIn7GB0YWhlCGUMdkMRYHRimMjo6OgQgiYk6MISyNgQ6iKDoZXQFiQUguW9l1tKlKzMjQ7OQ3MfoINLKEBKIYh6jgyjQTnTzGFoZsYmhuyUE080DFX5UhFjcBwC+58fuKdNDKwAAAABJRU5ErkJggg==',
			'1F10' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAXUlEQVR4nGNYhQEaGAYTpIn7GB1EQx2mMLQii7E6iDQwhDBMdUASEwWKMYYwBASg6AWqmwIm4e5bmTU1bNW0lVnTkNyHpo6AGDY70NwSAnRLqAOKmwcq/KgIsbgPAKmIyK+Ay3MRAAAAAElFTkSuQmCC',
			'7A92' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAdElEQVR4nM3QvRGAMAiAUVJkA9wHC3u8C002yBakyAbRHcyUaoc/pd4Fuq/hHdAeo9DT/uITAQaBhWwtLriRmC/NF68zoW0V86SsaH1x3VKKLRqfI8wUONsbXgch5WItqJhH5Wobn+2w3BuJk9DB/z7cF98Oi7nM0f7k4csAAAAASUVORK5CYII=',
			'4C58' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAc0lEQVR4nGNYhQEaGAYTpI37pjCGsoY6THVAFgthbXRtYAgIQBJjDBFpcG1gdBBBEmOdItLAOhWuDuykadOmrVqamTU1C8l9AVNAugJQzAsNBYkFopjHMAVkB7oYa6OjowOKXpCbGUIZUN08UOFHPYjFfQCZPsydpj1gTgAAAABJRU5ErkJggg==',
			'B031' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAXklEQVR4nGNYhQEaGAYTpIn7QgMYAhhDGVqRxQKmMIawNjpMRRFrZQWqCQhFVSfS6NDoANMLdlJo1LSVWVNXLUV2H5o6qHlAMSCJxQ5sbkERg7o5NGAQhB8VIRb3AQCsA84+P0/NBAAAAABJRU5ErkJggg==',
			'6BB4' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZElEQVR4nGNYhQEaGAYTpIn7WANEQ1hDGRoCkMREpoi0sjY6NCKLBbSINLo2BLSiiDWA1U0JQHJfZNTUsKWhq6KikNwXAjbP0QFFbyvIvMDQEAyxAGxuQRHD5uaBCj8qQizuAwAuSs92WFffzQAAAABJRU5ErkJggg==',
			'E144' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZUlEQVR4nGNYhQEaGAYTpIn7QkMYAhgaHRoCkMQCGhgDGFodGlHFWAMYpjq0oooB9QY6TAlAcl9o1KqolZlZUVFI7gOpY210dEDXyxoaGBqCbh6GWzDFQkNYQ9HFBir8qAixuA8ACJXNtGYUA3kAAAAASUVORK5CYII=',
			'246B' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAb0lEQVR4nGNYhQEaGAYTpIn7WAMYWhlCGUMdkMREpjBMZXR0dAhAEgsAqmJtcHQQQdbdyujK2sAIUwdx07SlS5dOXRmahey+AJFWVjTzGB1EQ10bAlHMYwWayIomJgKyBU1vaCimmwcq/KgIsbgPAK60ykC+TRP+AAAAAElFTkSuQmCC',
			'1036' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZUlEQVR4nGNYhQEaGAYTpIn7GB0YAhhDGaY6IImxOjCGsDY6BAQgiYk6sLYyNAQ6CKDoFWl0aHR0QHbfyqxpK7OmrkzNQnIfVB2KeWAxoHkiKGIQO1DFsLglBNPNAxV+VIRY3AcAmufJaw0AQ9QAAAAASUVORK5CYII=',
			'271E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZUlEQVR4nGNYhQEaGAYTpIn7WANEQx2mMIYGIImJTGFodAhhdEBWF9DK0OiIJsbQCoRT4GIQN00DwZWhWcjuCwDCKah6GR2AfDQxViBEFxMBQnSx0FCRBsZQRxQ3D1T4URFicR8AFzbI12Qk6BoAAAAASUVORK5CYII=',
			'025F' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbklEQVR4nGNYhQEaGAYTpIn7GB0YQ1hDHUNDkMRYA1hbWYEyyOpEpog0uqKJBbQyNLpOhYuBnRS1dNXSpZmZoVlI7gOqm8LQEIiuNwBdTGQKowMrmhjQLQ2Mjo4oYowOoqEOoahuGajwoyLE4j4AKhfIz63G8lsAAAAASUVORK5CYII=',
			'A196' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaklEQVR4nGNYhQEaGAYTpIn7GB0YAhhCGaY6IImxBjAGMDo6BAQgiYlMYQ1gbQh0EEASC2hlAIshuy9q6aqolZmRqVlI7gOpYwgJRDEvNBQoBtQrgmYeIzYxNLcEtLKGort5oMKPihCL+wDfD8ndtEFqIwAAAABJRU5ErkJggg==',
			'4E64' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaklEQVR4nGNYhQEaGAYTpI37poiGMoQyNAQgi4WINDA6OjQiizECxVgbHFqRxVingMQYpgQguW/atKlhS6euiopCcl8ASJ2jowOy3tBQkN7A0BAUt4DEAlDdMgXsFjQxLG4eqPCjHsTiPgAxIM0n1RWkdwAAAABJRU5ErkJggg==',
			'9F4D' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbElEQVR4nGNYhQEaGAYTpIn7WANEQx0aHUMdkMREpog0MLQ6OgQgiQW0AsWmOjqIoIsFwsXATpo2dWrYyszMrGlI7mN1FWlgbUTVywDUyxoaiCImADIPTR3YLY2obmENAIuhuHmgwo+KEIv7AMXRy8QMfuGrAAAAAElFTkSuQmCC',
			'C8DD' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAXElEQVR4nGNYhQEaGAYTpIn7WEMYQ1hDGUMdkMREWllbWRsdHQKQxAIaRRpdGwIdRJDFGoDqEGJgJ0WtWhm2dFVk1jQk96Gpg4phMQ+LHdjcgs3NAxV+VIRY3AcAqvbMnRr136QAAAAASUVORK5CYII=',
			'509E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZ0lEQVR4nGNYhQEaGAYTpIn7QkMYAhhCGUMDkMQCGhhDGB0dHRhQxFhbWRsCUcQCA0QaXRFiYCeFTZu2MjMzMjQL2X2tIo0OIah6wWJo5gW0srYyoomJTMF0C2sAppsHKvyoCLG4DwA8OcmzAKKy+AAAAABJRU5ErkJggg==',
			'E00E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAV0lEQVR4nGNYhQEaGAYTpIn7QkMYAhimMIYGIIkFNDCGMIQyOjCgiLG2Mjo6oomJNLo2BMLEwE4KjZq2MnVVZGgWkvvQ1OERw2YHpluwuXmgwo+KEIv7AEEeyqcHb5eiAAAAAElFTkSuQmCC',
			'A51C' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcklEQVR4nGNYhQEaGAYTpIn7GB1EQxmmMEwNQBJjDRBpYAhhAJFwKDJFpIExhNGBBUksoFUkhGEKowOy+6KWTl26atrKLGT3BbQyNDog1IFhaCimGNA8sBiqHaytQPehuCWgFeiSUAcUNw9U+FERYnEfAKGPy1iHxM2VAAAAAElFTkSuQmCC',
			'8A76' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcklEQVR4nGNYhQEaGAYTpIn7WAMYAlhDA6Y6IImJTGEMYWgICAhAEgtoZW1laAh0EEBRJ9Lo0OjogOy+pVHTVmYtXZmaheQ+sLopjGjmiYY6BDA6iKCIiQBNQxUD6XVtYEDRyxoAFkNx80CFHxUhFvcBAOeqzNy0nRBHAAAAAElFTkSuQmCC',
			'A19B' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaElEQVR4nGNYhQEaGAYTpIn7GB0YAhhCGUMdkMRYAxgDGB0dHQKQxESmsAawNgQ6iCCJBbQygMUCkNwXtXRV1MrMyNAsJPeB1DGEBKKYFxoKFMNiHiM2MTS3BLSyhqK7eaDCj4oQi/sAaB/JdbkYSI0AAAAASUVORK5CYII=',
			'5BBA' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7QkNEQ1hDGVqRxQIaRFpZGx2mOqCKNbo2BAQEIIkFBoDUOTqIILkvbNrUsKWhK7OmIbuvFUUdTAxoXmBoCLIdEDEUdSJTMPWyBoDczIhq3gCFHxUhFvcBAFf6zNj4oA9RAAAAAElFTkSuQmCC',
			'65F0' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbklEQVR4nGNYhQEaGAYTpIn7WANEQ1lDA1qRxUSmiDSwNjBMdUASC2gBiwUEIIs1iISwNjA6iCC5LzJq6tKloSuzpiG5L2QKQ6MrQh1Ebys2MRGgGKodIlNYW9HdwhrACLSXAcXNAxV+VIRY3AcA7bzMAMK1XTIAAAAASUVORK5CYII=',
			'F52E' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZ0lEQVR4nGNYhQEaGAYTpIn7QkNFQxlCGUMDkMQCGkQaGB0dHRjQxFgbAtHFQhgQYmAnhUZNXbpqZWZoFpL7gGY3OrQyoukFik1BFxNpdAhAF2MF6kQXYwxhDQ1EcfNAhR8VIRb3AQCaaMrsRvFG7AAAAABJRU5ErkJggg==',
			'3A1C' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7RAMYAhimMEwNQBILmMIYwhDCECCCrLKVtZUxhNGBBVlsikijwxRGB2T3rYyatjILiFDch6oOap5oKKYYRB2yHQFgvahuEQ0QaXQMdUBx80CFHxUhFvcBAHQTyytDp/riAAAAAElFTkSuQmCC',
			'E8BB' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAT0lEQVR4nGNYhQEaGAYTpIn7QkMYQ1hDGUMdkMQCGlhbWRsdHQJQxEQaXRsCHURwqwM7KTRqZdjS0JWhWUjuI948gnbgdPNAhR8VIRb3AQCodc1oin+7UwAAAABJRU5ErkJggg==',
			'A5B8' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7GB1EQ1lDGaY6IImxBog0sDY6BAQgiYlMAYo1BDqIIIkFtIqEIKkDOylq6dSlS0NXTc1Ccl9AK0OjK5p5oaFAMUzzsIixtqK7JaCVMQTdzQMVflSEWNwHANuxzdyTsFYlAAAAAElFTkSuQmCC',
			'0348' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7GB1YQxgaHaY6IImxBoi0MrQ6BAQgiYlMAalydBBBEgsAqmIIhKsDOylq6aqwlZlZU7OQ3AdSx9qIah5QrNE1NBDFPLAdjah2gN2Cphebmwcq/KgIsbgPAM4XzLn47gTBAAAAAElFTkSuQmCC',
			'DB0D' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAXUlEQVR4nGNYhQEaGAYTpIn7QgNEQximMIY6IIkFTBFpZQhldAhAFmsVaXR0dHQQQRVrZW0IhImBnRS1dGrY0lWRWdOQ3IemDm6eKxYxDDuwuAWbmwcq/KgIsbgPAE0VzRmQGFw0AAAAAElFTkSuQmCC',
			'B699' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaElEQVR4nGNYhQEaGAYTpIn7QgMYQxhCGaY6IIkFTGFtZXR0CAhAFmsVaWRtCHQQQVEn0oAkBnZSaNS0sJWZUVFhSO4LmCLayhASMFUEzTyHhoAGdDHHhgA0OzDdgs3NAxV+VIRY3AcAZ+3NSBcFduIAAAAASUVORK5CYII=',
			'7012' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAc0lEQVR4nM2QwQ2AMAhFfw/doAPVDTiUiyM4BT10A+wOOqXoiUaPmsg/kLxAeAH7rQR/yid+zCAo1uxpCwUFRAOLRkNOnmmqWSHJ+819W7o152db51z1N6JcrHmXJLGZi3pGYi5qjgMDBZ64/OB/L+bB7wDdp8tEije6tQAAAABJRU5ErkJggg==',
			'EDC3' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAVUlEQVR4nGNYhQEaGAYTpIn7QkNEQxhCHUIdkMQCGkRaGR0CHQJQxRpdGwQaRDDEQDTCfaFR01amrlq1NAvJfWjqUMQwzcOwA8Mt2Nw8UOFHRYjFfQCG2c7djGkwbAAAAABJRU5ErkJggg==',
			'B0D7' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZUlEQVR4nGNYhQEaGAYTpIn7QgMYAlhDGUNDkMQCpjCGsDY6NIggi7WytrI2BKCKTRFpdAWKBSC5LzRq2srUVVErs5DcB1XXyoBiHlhsCgOmHQEMGG5xdMDiZhSxgQo/KkIs7gMAlTnN4R8OkZYAAAAASUVORK5CYII=',
			'0415' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcUlEQVR4nGNYhQEaGAYTpIn7GB0YWhmmMIYGIImxBjBMZQgByiCJiUxhCGVEEwtoZXQF6nV1QHJf1NKlS1dNWxkVheS+gFYRoB1AM1D0ioY6oIkB7QC5xUEE1S0gvQHI7gO5mTHUYarDIAg/KkIs7gMAHHLKChN1jTgAAAAASUVORK5CYII=',
			'7B85' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAa0lEQVR4nGNYhQEaGAYTpIn7QkNFQxhCGUMDkEVbRVoZHR0dGFDFGl0bAlHFpoDVuToguy9qatiq0JVRUUjuY3QAqXNoEEHSy9oAMi8ARUykAWIHshhQBUhvQACKGMjNDFMdBkH4URFicR8AwW/LXu+4foYAAAAASUVORK5CYII=',
			'E3C8' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAXElEQVR4nGNYhQEaGAYTpIn7QkNYQxhCHaY6IIkFNIi0MjoEBASgiDE0ujYIOoigirWyNjDA1IGdFBq1KmzpqlVTs5Dch6YOyTxGdPOw2IHpFmxuHqjwoyLE4j4AmeLNU7HXGAAAAAAASUVORK5CYII=',
			'165B' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcUlEQVR4nGNYhQEaGAYTpIn7GB0YQ1hDHUMdkMRYHVhbWYEyAUhiog4ijSAxERS9Ig2sU+HqwE5amTUtbGlmZmgWkvsYHURbGRoCUcwD6m10AIqhmdfoiiHG2sro6IjqlhDGEIZQRhQ3D1T4URFicR8AB/rILWMr+wsAAAAASUVORK5CYII=',
			'4FE5' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAYElEQVR4nGNYhQEaGAYTpI37poiGuoY6hgYgi4WINLA2MDogq2PEIsY6BSzm6oDkvmnTpoYtDV0ZFYXkvgCwOoYGESS9oaGYYgwQ8xwwxRgCAtDFQh2mOgyG8KMexOI+AOTCyppoHIiBAAAAAElFTkSuQmCC',
			'67D2' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAdklEQVR4nM2QMQqAMAxF0yE3qPfp4h6hGexpUrA3qN7Apac0myk6KjQfMjwCeXxojxEYKb/4IU08M+zBMF8hzzkQGUabMlmCt0ygoG5v/NbUjrMlze0XK5DeZfuDigvKCnQMRVmFzsULqkvvrIwdxwH6+zAvfhc4Lc2lvMAUAgAAAABJRU5ErkJggg==',
			'8DC5' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZklEQVR4nGNYhQEaGAYTpIn7WANEQxhCHUMDkMREpoi0MjoEOiCrC2gVaXRtEEQRA6oDijG6OiC5b2nUtJWpq1ZGRSG5D6IOSGOYh01M0EGkAd0tAQHI7oO42WGqwyAIPypCLO4DAG5lzJBK/Kk4AAAAAElFTkSuQmCC',
			'4598' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcUlEQVR4nGNYhQEaGAYTpI37poiGMoQyTHVAFgsRaWB0dAgIQBJjBIqxNgQ6iCCJsU4RCWFtCICpAztp2rSpS1dmRk3NQnJfwBSGRoeQABTzQkOBYmjmMUwRaXTEEGNtRXcLwxTGEAw3D1T4UQ9icR8AAyTMMkpzHQoAAAAASUVORK5CYII=',
			'3947' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcElEQVR4nGNYhQEaGAYTpIn7RAMYQxgaHUNDkMQCprC2MrQ6NIggq2wVaXSYiiY2BSgW6NAQgOS+lVFLl2ZmZq3MQnbfFMZA10aHVhSbWxkaXUMDpqCKsTQ6NDoEMKC7pdHRAYubUcQGKvyoCLG4DwBXgszccmqIdgAAAABJRU5ErkJggg==',
			'8F08' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAY0lEQVR4nGNYhQEaGAYTpIn7WANEQx2mMEx1QBITmSLSwBDKEBCAJBbQKtLA6OjoIIKmjrUhAKYO7KSlUVPDlq6KmpqF5D40dXDzWBsCUczDZQe6W1gDgGJobh6o8KMixOI+AH8mzG6xPC73AAAAAElFTkSuQmCC',
			'8163' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZ0lEQVR4nGNYhQEaGAYTpIn7WAMYAhhCGUIdkMREpjAGMDo6OgQgiQW0sgawNjg0iKCoYwCKAeWQ3Lc0alXU0qmrlmYhuQ+sztGhAdU8kN4AFPOwiYH0orsF6JJQdDcPVPhREWJxHwBItMq6jfCFzgAAAABJRU5ErkJggg==',
			'232D' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAdElEQVR4nGNYhQEaGAYTpIn7WANYQxhCGUMdkMREpoi0Mjo6OgQgiQW0MjS6NgQ6iCDrbgVChBjETdNWha1amZk1Ddl9ASCVjCh6GR0YGh2moIqxNgDFAlDFRBqAbnFgRHFLaChrCGtoIIqbByr8qAixuA8Aao/J6t88FKoAAAAASUVORK5CYII=',
			'9855' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcElEQVR4nGNYhQEaGAYTpIn7WAMYQ1hDHUMDkMREprC2sjYwOiCrC2gVaXTFEAOqm8ro6oDkvmlTV4YtzcyMikJyH6sraytQdYMIss1A8xzQxATAdgQ6iKC5hdHRIQDZfSA3M4QyTHUYBOFHRYjFfQC4yssjBT6tWwAAAABJRU5ErkJggg==',
			'F209' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAb0lEQVR4nGNYhQEaGAYTpIn7QkMZQximMEx1QBILaGBtZQhlCAhAERNpdHR0dBBBEWNodG0IhImBnRQatWrp0lVRUWFI7gOqm8LaEDAVTW8AK8hUFDFGB0ZHBzQ7WBsw3SIa6oDm5oEKPypCLO4DADb9zQ8E2avtAAAAAElFTkSuQmCC',
			'C827' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbklEQVR4nGNYhQEaGAYTpIn7WEMYQxhCGUNDkMREWllbGR0dGkSQxAIaRRpdGwJQxRpYW0FkAJL7olatDFu1MmtlFpL7wOpAEEWvSKPDFIYpDGh2OAQwBDCgu8WB0QHdzayhgShiAxV+VIRY3AcAAfLLwp6DNZIAAAAASUVORK5CYII=',
			'55C7' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcUlEQVR4nGNYhQEaGAYTpIn7QkNEQxlCHUNDkMQCGkQaGB1AJKoYa4MAilhggEgIK1gO4b6waVOXLl21amUWsvtaGRpdQSSyzRCxKchiAa0iQDGBAGQxkSmsrYwOgQ7IYqwBjCFAN6OIDVT4URFicR8AalHMBf2J55IAAAAASUVORK5CYII=',
			'693D' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZUlEQVR4nGNYhQEaGAYTpIn7WAMYQxhDGUMdkMREprC2sjY6OgQgiQW0iDQ6NAQ6iCCLNQDFgOpEkNwXGbV0adbUlVnTkNwXMoUxEEkdRG8rA6Z5rSwYYtjcgs3NAxV+VIRY3AcA4kjMwahA1XgAAAAASUVORK5CYII=',
			'E091' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZElEQVR4nGNYhQEaGAYTpIn7QkMYAhhCGVqRxQIaGEMYHR2mooqxtrI2BISiiok0ujYEwPSCnRQaNW1lZmbUUmT3gdQ5hAS0out1aEAXY21lxBADuwVFDOrm0IBBEH5UhFjcBwDxQMzdjepkygAAAABJRU5ErkJggg==',
			'640A' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAdUlEQVR4nGNYhQEaGAYTpIn7WAMYWhmmADGSmMgUhqkMoQxTHZDEAloYQhkdHQICkMUaGF1ZGwIdRJDcFxm1dOnSVZFZ05DcFzJFpBVJHURvq2ioa0NgaAiKGEMro6MjijoRkNtCGVHEIG5GFRuo8KMixOI+ADBhy0nezyhkAAAAAElFTkSuQmCC',
			'72D1' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7QkMZQ1hDGVpRRFtZW1kbHaaiiok0ujYEhKKITWEAicH0QtwUtWrp0lVRS5Hdx+jAMIUVoQ4MWRsYAtDFRIAq0cUCgCqBbkETEw11DWUIDRgE4UdFiMV9ALNdzLedl7b8AAAAAElFTkSuQmCC',
			'166C' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZ0lEQVR4nGNYhQEaGAYTpIn7GB0YQxhCGaYGIImxOrC2Mjo6BIggiYk6iDSyNjg6sKDoFWlgBZLI7luZNS1s6dSVWcjuY3QQbWV1dHRAtVek0bUhEKsYqh1Y3BKC6eaBCj8qQizuAwDCscf8s9bJcQAAAABJRU5ErkJggg==',
			'91D1' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAY0lEQVR4nGNYhQEaGAYTpIn7WAMYAlhDGVqRxUSmMAawNjpMRRYLaGUNYG0ICEUVYwCJwfSCnTRt6qqopSCE5D5WVxR1ENiKKSaARUxkCgPILShiQJeEAt0cGjAIwo+KEIv7AAJWynATDuk+AAAAAElFTkSuQmCC',
			'B072' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcUlEQVR4nGNYhQEaGAYTpIn7QgMYAlhDA6Y6IIkFTGEMAZIBAchiraytDA2BDiIo6kQaHRodGkSQ3BcaNW1l1tJVq6KQ3AdWN4WhEcWOVqBYAEMrA5odjA4MUxjQ3MLawBCA4eYGxtCQQRB+VIRY3AcAUQ/NmL6zjw8AAAAASUVORK5CYII=',
			'E5BE' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAXUlEQVR4nGNYhQEaGAYTpIn7QkNEQ1lDGUMDkMQCGkQaWBsdHRjQxRoC0cVCkNSBnRQaNXXp0tCVoVlI7gOa3eiKYR5QDNM8LGKsrehuCQ1hDEF380CFHxUhFvcBABN9zCbUQFv9AAAAAElFTkSuQmCC',
			'E738' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZUlEQVR4nGNYhQEaGAYTpIn7QkNEQx1DGaY6IIkFNDA0ujY6BASgiTk0BDqIoIq1MiDUgZ0UGrVq2qqpq6ZmIbkPKB/AgGEeowMDhnmsDZhiIg2saHpDQ0QaGNHcPFDhR0WIxX0AHprOZrwuSgcAAAAASUVORK5CYII=',
			'2377' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcklEQVR4nGNYhQEaGAYTpIn7WANYQ1hDA0NDkMREpoi0MjQENIggiQW0MjQ6oIkxtDJARZHcN21V2Kqlq1ZmIbsvAKhuChAj6WV0AOoMAIoiu6WBodHRAaga2S0NIq2sINVIYqGhQDejiQ1U+FERYnEfAJMMyzrUJitIAAAAAElFTkSuQmCC',
			'D591' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAa0lEQVR4nGNYhQEaGAYTpIn7QgNEQxlCGVqRxQKmiDQwOjpMRRFrFWlgbQgIRRMLAYrB9IKdFLV06tKVmVFLkd0HVNHoEBKAagdIrAFdTKTREV1sCmsr0C0oYqEBjCFAN4cGDILwoyLE4j4ASTDN9DMe/ZUAAAAASUVORK5CYII=',
			'289C' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbklEQVR4nGNYhQEaGAYTpIn7WAMYQxhCGaYGIImJTGFtZXR0CBBBEgtoFWl0bQh0YEHW3craygoUQ3HftJVhKzMjs1DcF8DayhACVweGjA4ijQ4NqGKsDSKNjmh2iDRguiU0FNPNAxV+VIRY3AcADqLKgZdcloEAAAAASUVORK5CYII=',
			'019F' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAaUlEQVR4nGNYhQEaGAYTpIn7GB0YAhhCGUNDkMRYAxgDGB0dHZDViUxhDWBtCEQRC2hlQBYDOylq6aqolZmRoVlI7gOpYwjB1MuAZp7IFIYARjQx1gAGDLcwOrCGAt2MIjZQ4UdFiMV9AF6+xqICv/OSAAAAAElFTkSuQmCC',
			'6EF9' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAYklEQVR4nGNYhQEaGAYTpIn7WANEQ1lDA6Y6IImJTBFpYG1gCAhAEgtoAYkxOoggizWgiIGdFBk1NWxp6KqoMCT3hUDMm4qitxUs1oBFDMUObG4BuxloHrKbByr8qAixuA8AAbfLRBCxxw8AAAAASUVORK5CYII=',
			'E9ED' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAWElEQVR4nGNYhQEaGAYTpIn7QkMYQ1hDHUMdkMQCGlhbWRsYHQJQxEQaXYFiIrjFwE4KjVq6NDV0ZdY0JPcFNDAGYuplwGIeCxYxTLdgc/NAhR8VIRb3AQDvT8v3COI6gQAAAABJRU5ErkJggg==',
			'62EF' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAZklEQVR4nGNYhQEaGAYTpIn7WAMYQ1hDHUNDkMREprC2sjYwOiCrC2gRaXRFF2tgQBYDOykyatXSpaErQ7OQ3BcyhWEKhnmtDAGYYowO6GJAtzSgi7EGiIa6hjqiiA1U+FERYnEfAKZFyTEKWEn9AAAAAElFTkSuQmCC',
			'76E8' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAY0lEQVR4nGNYhQEaGAYTpIn7QkMZQ1hDHaY6IIu2srayNjAEBKCIiTSyNjA6iCCLTRFpQFIHcVPUtLCloaumZiG5j9FBFMM81gaRRlc080SwiAU0YLoloAGLmwco/KgIsbgPAN+Ay0vXpjsPAAAAAElFTkSuQmCC',
			'7090' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAbUlEQVR4nGNYhQEaGAYTpIn7QkMZAhhCGVpRRFsZQxgdHaY6oIixtrI2BAQEIItNEWl0bQh0EEF2X9S0lZmZkVnTkNzH6CDS6BACVweGrA1AsQZUMZEG1lZGNDsCGjDdApTHdPMAhR8VIRb3AQANQMtoFMuKeAAAAABJRU5ErkJggg==',
			'3572' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAcUlEQVR4nGNYhQEaGAYTpIn7RANEQ1lDA6Y6IIkFTBEBkQEByCpbQWKBDiLIYlNEQhgaHRpEkNy3Mmrq0lVLV62KQnbfFKAqEEYxD8gPAJKodjQ6OgBVo7iFtZW1gSEA1c2MIawNjKEhgyD8qAixuA8AzW3MauZwj50AAAAASUVORK5CYII=',
			'3B33' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAWUlEQVR4nGNYhQEaGAYTpIn7RANEQxhDGUIdkMQCpoi0sjY6OgQgq2wVaXRoCGgQQRYDqmMAiyLctzJqatiqqauWZiG7D1UdbvOwiGFzCzY3D1T4URFicR8AaPPOATAfwXIAAAAASUVORK5CYII=',
			'C8E1' => 'iVBORw0KGgoAAAANSUhEUgAAAEkAAAAhAgMAAADoum54AAAACVBMVEX///8AAADS0tIrj1xmAAAAXUlEQVR4nGNYhQEaGAYTpIn7WEMYQ1hDHVqRxURaWVtZGximIosFNIo0ujYwhKKINYDVwfSCnRS1amXY0tBVS5Hdh6YOKgY2rxWLHdjcgiIGdXNowCAIPypCLO4DAOpyzAya8sQ9AAAAAElFTkSuQmCC'        
        );
        $this->text = array_rand( $images );
        return $images[ $this->text ] ;    
    }
    
    function out_processing_gif(){
        $image = dirname(__FILE__) . '/processing.gif';
        $base64_image = "R0lGODlhFAAUALMIAPh2AP+TMsZiALlcAKNOAOp4ANVqAP+PFv///wAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFCgAIACwAAAAAFAAUAAAEUxDJSau9iBDMtebTMEjehgTBJYqkiaLWOlZvGs8WDO6UIPCHw8TnAwWDEuKPcxQml0Ynj2cwYACAS7VqwWItWyuiUJB4s2AxmWxGg9bl6YQtl0cAACH5BAUKAAgALAEAAQASABIAAAROEMkpx6A4W5upENUmEQT2feFIltMJYivbvhnZ3Z1h4FMQIDodz+cL7nDEn5CH8DGZhcLtcMBEoxkqlXKVIgAAibbK9YLBYvLtHH5K0J0IACH5BAUKAAgALAEAAQASABIAAAROEMkphaA4W5upMdUmDQP2feFIltMJYivbvhnZ3V1R4BNBIDodz+cL7nDEn5CH8DGZAMAtEMBEoxkqlXKVIg4HibbK9YLBYvLtHH5K0J0IACH5BAUKAAgALAEAAQASABIAAAROEMkpjaE4W5tpKdUmCQL2feFIltMJYivbvhnZ3R0A4NMwIDodz+cL7nDEn5CH8DGZh8ONQMBEoxkqlXKVIgIBibbK9YLBYvLtHH5K0J0IACH5BAUKAAgALAEAAQASABIAAAROEMkpS6E4W5spANUmGQb2feFIltMJYivbvhnZ3d1x4JMgIDodz+cL7nDEn5CH8DGZgcBtMMBEoxkqlXKVIggEibbK9YLBYvLtHH5K0J0IACH5BAUKAAgALAEAAQASABIAAAROEMkpAaA4W5vpOdUmFQX2feFIltMJYivbvhnZ3V0Q4JNhIDodz+cL7nDEn5CH8DGZBMJNIMBEoxkqlXKVIgYDibbK9YLBYvLtHH5K0J0IACH5BAUKAAgALAEAAQASABIAAAROEMkpz6E4W5tpCNUmAQD2feFIltMJYivbvhnZ3R1B4FNRIDodz+cL7nDEn5CH8DGZg8HNYMBEoxkqlXKVIgQCibbK9YLBYvLtHH5K0J0IACH5BAkKAAgALAEAAQASABIAAAROEMkpQ6A4W5spIdUmHQf2feFIltMJYivbvhnZ3d0w4BMAIDodz+cL7nDEn5CH8DGZAsGtUMBEoxkqlXKVIgwGibbK9YLBYvLtHH5K0J0IADs=";
        $binary = is_file($image) ? join("",file($image)) : base64_decode($base64_image); 
        header("Cache-Control: post-check=0, pre-check=0, max-age=0, no-store, no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Content-type: image/gif");
        echo $binary;
    }

}
# end of class phpfmgImage
# ------------------------------------------------------
# end of module : captcha


# module user
# ------------------------------------------------------
function phpfmg_user_isLogin(){
    return ( isset($_SESSION['authenticated']) && true === $_SESSION['authenticated'] );
}


function phpfmg_user_logout(){
    session_destroy();
    header("Location: admin.php");
}

function phpfmg_user_login()
{
    if( phpfmg_user_isLogin() ){
        return true ;
    };
    
    $sErr = "" ;
    if( 'Y' == $_POST['formmail_submit'] ){
        if(
            defined( 'PHPFMG_USER' ) && strtolower(PHPFMG_USER) == strtolower($_POST['Username']) &&
            defined( 'PHPFMG_PW' )   && strtolower(PHPFMG_PW) == strtolower($_POST['Password']) 
        ){
             $_SESSION['authenticated'] = true ;
             return true ;
             
        }else{
            $sErr = 'Login failed. Please try again.';
        }
    };
    
    // show login form 
    phpfmg_admin_header();
?>
<form name="frmFormMail" action="" method='post' enctype='multipart/form-data'>
<input type='hidden' name='formmail_submit' value='Y'>
<br><br><br>

<center>
<div style="width:380px;height:260px;">
<fieldset style="padding:18px;" >
<table cellspacing='3' cellpadding='3' border='0' >
	<tr>
		<td class="form_field" valign='top' align='right'>Email :</td>
		<td class="form_text">
            <input type="text" name="Username"  value="<?php echo $_POST['Username']; ?>" class='text_box' >
		</td>
	</tr>

	<tr>
		<td class="form_field" valign='top' align='right'>Password :</td>
		<td class="form_text">
            <input type="password" name="Password"  value="" class='text_box'>
		</td>
	</tr>

	<tr><td colspan=3 align='center'>
        <input type='submit' value='Login'><br><br>
        <?php if( $sErr ) echo "<span style='color:red;font-weight:bold;'>{$sErr}</span><br><br>\n"; ?>
        <a href="admin.php?mod=mail&func=request_password">I forgot my password</a>   
    </td></tr>
</table>
</fieldset>
</div>
<script type="text/javascript">
    document.frmFormMail.Username.focus();
</script>
</form>
<?php
    phpfmg_admin_footer();
}


function phpfmg_mail_request_password(){
    $sErr = '';
    if( $_POST['formmail_submit'] == 'Y' ){
        if( strtoupper(trim($_POST['Username'])) == strtoupper(trim(PHPFMG_USER)) ){
            phpfmg_mail_password();
            exit;
        }else{
            $sErr = "Failed to verify your email.";
        };
    };
    
    $n1 = strpos(PHPFMG_USER,'@');
    $n2 = strrpos(PHPFMG_USER,'.');
    $email = substr(PHPFMG_USER,0,1) . str_repeat('*',$n1-1) . 
            '@' . substr(PHPFMG_USER,$n1+1,1) . str_repeat('*',$n2-$n1-2) . 
            '.' . substr(PHPFMG_USER,$n2+1,1) . str_repeat('*',strlen(PHPFMG_USER)-$n2-2) ;


    phpfmg_admin_header("Request Password of Email Form Admin Panel");
?>
<form name="frmRequestPassword" action="admin.php?mod=mail&func=request_password" method='post' enctype='multipart/form-data'>
<input type='hidden' name='formmail_submit' value='Y'>
<br><br><br>

<center>
<div style="width:580px;height:260px;text-align:left;">
<fieldset style="padding:18px;" >
<legend>Request Password</legend>
Enter Email Address <b><?php echo strtoupper($email) ;?></b>:<br />
<input type="text" name="Username"  value="<?php echo $_POST['Username']; ?>" style="width:380px;">
<input type='submit' value='Verify'><br>
The password will be sent to this email address. 
<?php if( $sErr ) echo "<br /><br /><span style='color:red;font-weight:bold;'>{$sErr}</span><br><br>\n"; ?>
</fieldset>
</div>
<script type="text/javascript">
    document.frmRequestPassword.Username.focus();
</script>
</form>
<?php
    phpfmg_admin_footer();    
}


function phpfmg_mail_password(){
    phpfmg_admin_header();
    if( defined( 'PHPFMG_USER' ) && defined( 'PHPFMG_PW' ) ){
        $body = "Here is the password for your form admin panel:\n\nUsername: " . PHPFMG_USER . "\nPassword: " . PHPFMG_PW . "\n\n" ;
        if( 'html' == PHPFMG_MAIL_TYPE )
            $body = nl2br($body);
        mailAttachments( PHPFMG_USER, "Password for Your Form Admin Panel", $body, PHPFMG_USER, 'You', "You <" . PHPFMG_USER . ">" );
        echo "<center>Your password has been sent.<br><br><a href='admin.php'>Click here to login again</a></center>";
    };   
    phpfmg_admin_footer();
}


function phpfmg_writable_check(){
 
    if( is_writable( dirname(PHPFMG_SAVE_FILE) ) && is_writable( dirname(PHPFMG_EMAILS_LOGFILE) )  ){
        return ;
    };
?>
<style type="text/css">
    .fmg_warning{
        background-color: #F4F6E5;
        border: 1px dashed #ff0000;
        padding: 16px;
        color : black;
        margin: 10px;
        line-height: 180%;
        width:80%;
    }
    
    .fmg_warning_title{
        font-weight: bold;
    }

</style>
<br><br>
<div class="fmg_warning">
    <div class="fmg_warning_title">Your form data or email traffic log is NOT saving.</div>
    The form data (<?php echo PHPFMG_SAVE_FILE ?>) and email traffic log (<?php echo PHPFMG_EMAILS_LOGFILE?>) will be created automatically when the form is submitted. 
    However, the script doesn't have writable permission to create those files. In order to save your valuable information, please set the directory to writable.
     If you don't know how to do it, please ask for help from your web Administrator or Technical Support of your hosting company.   
</div>
<br><br>
<?php
}


function phpfmg_log_view(){
    $n = isset($_REQUEST['file'])  ? $_REQUEST['file']  : '';
    $files = array(
        1 => PHPFMG_EMAILS_LOGFILE,
        2 => PHPFMG_SAVE_FILE,
    );
    
    phpfmg_admin_header();
   
    $file = $files[$n];
    if( is_file($file) ){
        if( 1== $n ){
            echo "<pre>\n";
            echo join("",file($file) );
            echo "</pre>\n";
        }else{
            $man = new phpfmgDataManager();
            $man->displayRecords();
        };
     

    }else{
        echo "<b>No form data found.</b>";
    };
    phpfmg_admin_footer();
}


function phpfmg_log_download(){
    $n = isset($_REQUEST['file'])  ? $_REQUEST['file']  : '';
    $files = array(
        1 => PHPFMG_EMAILS_LOGFILE,
        2 => PHPFMG_SAVE_FILE,
    );

    $file = $files[$n];
    if( is_file($file) ){
        phpfmg_util_download( $file, PHPFMG_SAVE_FILE == $file ? 'form-data.csv' : 'email-traffics.txt', true, 1 ); // skip the first line
    }else{
        phpfmg_admin_header();
        echo "<b>No email traffic log found.</b>";
        phpfmg_admin_footer();
    };

}


function phpfmg_log_delete(){
    $n = isset($_REQUEST['file'])  ? $_REQUEST['file']  : '';
    $files = array(
        1 => PHPFMG_EMAILS_LOGFILE,
        2 => PHPFMG_SAVE_FILE,
    );
    phpfmg_admin_header();

    $file = $files[$n];
    if( is_file($file) ){
        echo unlink($file) ? "It has been deleted!" : "Failed to delete!" ;
    };
    phpfmg_admin_footer();
}


function phpfmg_util_download($file, $filename='', $toCSV = false, $skipN = 0 ){
    if (!is_file($file)) return false ;

    set_time_limit(0);


    $buffer = "";
    $i = 0 ;
    $fp = @fopen($file, 'rb');
    while( !feof($fp)) { 
        $i ++ ;
        $line = fgets($fp);
        if($i > $skipN){ // skip lines
            if( $toCSV ){ 
              $line = str_replace( chr(0x09), ',', $line );
              $buffer .= phpfmg_data2record( $line, false );
            }else{
                $buffer .= $line;
            };
        }; 
    }; 
    fclose ($fp);
  

    
    /*
        If the Content-Length is NOT THE SAME SIZE as the real conent output, Windows+IIS might be hung!!
    */
    $len = strlen($buffer);
    $filename = basename( '' == $filename ? $file : $filename );
    $file_extension = strtolower(substr(strrchr($filename,"."),1));

    switch( $file_extension ) {
        case "pdf": $ctype="application/pdf"; break;
        case "exe": $ctype="application/octet-stream"; break;
        case "zip": $ctype="application/zip"; break;
        case "doc": $ctype="application/msword"; break;
        case "xls": $ctype="application/vnd.ms-excel"; break;
        case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
        case "gif": $ctype="image/gif"; break;
        case "png": $ctype="image/png"; break;
        case "jpeg":
        case "jpg": $ctype="image/jpg"; break;
        case "mp3": $ctype="audio/mpeg"; break;
        case "wav": $ctype="audio/x-wav"; break;
        case "mpeg":
        case "mpg":
        case "mpe": $ctype="video/mpeg"; break;
        case "mov": $ctype="video/quicktime"; break;
        case "avi": $ctype="video/x-msvideo"; break;
        //The following are for extensions that shouldn't be downloaded (sensitive stuff, like php files)
        case "php":
        case "htm":
        case "html": 
                $ctype="text/plain"; break;
        default: 
            $ctype="application/x-download";
    }
                                            

    //Begin writing headers
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: public"); 
    header("Content-Description: File Transfer");
    //Use the switch-generated Content-Type
    header("Content-Type: $ctype");
    //Force the download
    header("Content-Disposition: attachment; filename=".$filename.";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".$len);
    
    while (@ob_end_clean()); // no output buffering !
    flush();
    echo $buffer ;
    
    return true;
 
    
}
?>