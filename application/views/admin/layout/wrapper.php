
<?php
//proteksi halaman
if ($this->session->userdata('username') == "" && $this->session->userdata('level')== "") {
    $this->session->set_flashdata('sukses','Please Login');
    
    redirect(base_url('login'),'refresh');
    
}

//layout
require_once('head.php');
require_once('header.php');
require_once('sidebar.php');
require_once('content.php');
require_once('footer.php');
