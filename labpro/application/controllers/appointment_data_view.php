<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class appointment_data_view extends CI_Controller {


  
    public function home()
    {
        $this->load->view('index1');
    }

      public function Services()
      {
          $this->load->view('services');
      }

  public function Tests()
  {
      $this->load->view('tests');
  }
  public function Packages()
  {
      $this->load->view('Packages');
  }
  public function About()
  {
      $this->load->view('about');
  }
  public function Contact()
  {
      $this->load->view('contact');
  }







}
?>
