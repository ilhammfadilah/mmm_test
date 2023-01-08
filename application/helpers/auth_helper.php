<?php
function cekuser()
{
    $ci = get_instance();
    $role_id = $ci->session->userdata('role_id');
    $menu = $ci->uri->segment(1);
    if (!$ci->session->userdata('username')){
        redirect('login');
    }
    if ($role_id == 1) {
        switch ($menu) {
            case 'admin':
                redirect('pimpinan');
                break;
            case 'supplier':
                redirect('pimpinan');
                break;
            case 'agen':
                redirect('pimpinan');
                break;

            default:
                # code...
                break;
        }
    }
     else if ($role_id == 2) {
        switch ($menu) {
            case 'pimpinan':
                redirect('blocked');
                break;
            case 'supplier':
                redirect('admin');
                break;
            case 'agen':
                redirect('admin');
                break;
            default:
                # code...
                break;
        }

    }
    else if ($role_id == 3) {
        switch ($menu) {
            case 'pimpinan':
                redirect('blocked');
                break;
            case 'admin':
                redirect('blocked');
                break;
            case 'agen':
                redirect('supplier');
                break;
            default:
                # code...
                break;
        }

    }
    else if ($role_id == 4) {
        switch ($menu) {
            case 'pimpinan':
                redirect('blocked');
                break;
            case 'admin':
                redirect('blocked');
                break;
            case 'supplier':
                redirect('blocked');
                break;
            default:
                # code...
                break;
        }

    }
}