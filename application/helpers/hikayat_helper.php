<?php

function tampilan($file, $data)
{
    $ieu = get_instance();
    $ieu->load->view('template/header', $data);
    $ieu->load->view($file, $data);
    $ieu->load->view('template/footer');
}

function data_post($kolom)
{
    $ieu = get_instance();
    return $ieu->input->post($kolom);
}

function notif($text, $tipe)
{
    $ieu = get_instance();
    if ($tipe == true) {
        $warna = 'success';
    } else {
        $warna = 'danger';
    }
    $ieu->session->set_flashdata('message', '<div class="alert alert-' . $warna . ' alert-dismissable"> <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button> ' . $text . '</div>');
}
