<?php
class Mailer extends CI_Controller{
    var 
    $smtp_host  = 'mail.padi.net.id',
    $smtp_port  = '25',
    $protocol   = 'smtp',
    $mailtype   = 'html';
    function __construct(){
        parent::__construct();
    }
    function index(){
        echo 'this is index';
    }
    function sendmail(){

        $this->load->library('email');
        $recipient = 'pw.prayitno@gmail.com';
        $subject = 'test';
        $cc = 'puji@padi.net.id';
        $message = $this->welcomeusertemplate('Puji','puji@padi.net.id','yourpassword');
        $message = $this->tablewithdiv();
        $config['smtp_host']=$this->smtp_host;
        $config['smtp_port']=$this->smtp_port;
        $config['protocol']=$this->protocol;
        $config['mailtype']=$this->mailtype;
        $this->email->initialize($config);
        $this->email->from('PadiApp@padi.net.id<puji@padi.net.id>');
        $this->email->to(array($recipient));
        $this->email->cc($cc);
        $this->email->bcc("puji@padi.net.id");
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }
    function tablewithdiv(){
        $x = '<html>';
        $x.= '<head>';
        $x.='<style>
        .rTable {
        display: table;
        width: 100%;
        }
        .rTableRow {
        display: table-row;
        }
        .rTableHeading {
        display: table-header-group;
        background-color: #ddd;
        }
        .rTableCell, .rTableHead {
        display: table-cell;
        padding: 3px 10px;
        border: 1px solid #999999;
        }
        .rTableHeading {
        display: table-header-group;
        background-color: #ddd;
        font-weight: bold;
        }
        .rTableFoot {
        display: table-footer-group;
        font-weight: bold;
        background-color: #ddd;
        }
        .rTableBody {
        display: table-row-group;
        }</style>';
        $x.='</head>';
        $x.= '<body>';
        $x.='<h2>Phone numbers</h2>
        <div class="rTable">
        <div class="rTableRow">
        <div class="rTableHead"><strong>Name</strong></div>
        <div class="rTableHead"><span style="font-weight: bold;">Telephone</span></div>
        <div class="rTableHead">&nbsp;</div>
        </div>
        <div class="rTableRow">
        <div class="rTableCell">John</div>
        <div class="rTableCell"><a href="tel:0123456785">0123 456 785</a></div>
        <div class="rTableCell"><img src="images/check.gif" alt="checked" /></div>
        </div>
        <div class="rTableRow">
        <div class="rTableCell">Cassie</div>
        <div class="rTableCell"><a href="tel:9876532432">9876 532 432</a></div>
        <div class="rTableCell"><img src="images/check.gif" alt="checked" /></div>
        </div>
        </div>';
        $x.= '</body>';
        $x.= '</html>';
        return $x;
    }
    function welcomeusertemplate($username,$email,$password){
        $txt = 'Halou ' . $username . ' <br />';
        $txt.= 'Berikut akun anda di PadiApp  <br /> <br />';
        $txt.= PHP_EOL;
        $txt.= 'login : ' . $email . '  <br />';
        $txt.= 'password : ' . $password . '  <br />';
        $txt.= 'tautan aplikasi https://database.padinet.com  <br /> <br />';
        $txt.= 'terimakasih <br /> <br />';
        $txt.= 'Admin PadiApp <br />';
        return $txt;        
    }
}