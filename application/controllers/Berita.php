<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MY_Controller {

    public function pendidikan()
    {
        $this->template->load('layoutbackend', 'berita/pendidikan');    
    }

    public function sains()
    {
        $this->template->load('layoutbackend','berita/sains');
    }

    public function kesehatan()
    {
        $this->template->load('layoutbackend','berita/kesehatan');
    }
    
    public function teknologi()
    {
        $this->template->load('layoutbackend','berita/teknologi');
    }
}