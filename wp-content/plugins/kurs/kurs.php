<?php 
/*
Plugin Name: Simple Kurs
Plugin URI: https://comitechno.maeofficial.id
Description: display kurs idr ke mata uang lain 
Author: Comitechno
Version: 1.0
*/

add_action('admin_menu', 'simple_kurs_menu');
add_action('admin_init', 'simple_kurs_settings');

// Menambahkan menu di admin dashboard
function simple_kurs_menu() {
    add_menu_page(
        'Kurs Settings', // Page title
        'Kurs', // Menu title
        'manage_options', // Capability
        'simple-kurs', // Menu slug
        'simple_kurs_page', // Callback function
        'dashicons-money', // Icon
        6 // Position
    );
}

// Menyimpan setting
function simple_kurs_settings() {
    register_setting('simple_kurs_group', 'simple_kurs_rates');
}

// Halaman admin untuk mengedit kurs
function simple_kurs_page() {
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }

    $kurs = get_option('simple_kurs_rates', [
        'IDR' => ['jual' => 16000, 'beli' => 15800, 'tanggal_update' => '2024-08-08'],
        'USD' => ['jual' => 15000, 'beli' => 14900, 'tanggal_update' => '2024-08-08'],
        'SAR' => ['jual' => 4000, 'beli' => 3900, 'tanggal_update' => '2024-08-08'],
        'EUR' => ['jual' => 16000, 'beli' => 15800, 'tanggal_update' => '2024-08-08'],
        'SGD' => ['jual' => 16000, 'beli' => 15800, 'tanggal_update' => '2024-08-08'],
    ]);

    if (isset($_POST['save_kurs'])) {
        foreach ($kurs as $currency => $values) {
            if (isset($_POST[$currency . '_jual']) && isset($_POST[$currency . '_beli'])) {
                $kurs[$currency]['jual'] = intval($_POST[$currency . '_jual']);
                $kurs[$currency]['beli'] = intval($_POST[$currency . '_beli']);
                $kurs[$currency]['tanggal_update'] = date('Y-m-d'); // Set update date to today
            }
        }
        update_option('simple_kurs_rates', $kurs);
        echo '<div class="updated"><p>Kurs berhasil diperbarui.</p></div>';
    }

    ?>
    <div class="wrap">
        <h1>Kurs Settings</h1>
        <form method="post" action="">
            <?php foreach ($kurs as $currency => $values) : ?>
                <h3><?php echo $currency; ?></h3>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Harga Jual</th>
                        <td><input type="number" name="<?php echo $currency; ?>_jual" value="<?php echo esc_attr($values['jual']); ?>" /></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Harga Beli</th>
                        <td><input type="number" name="<?php echo $currency; ?>_beli" value="<?php echo esc_attr($values['beli']); ?>" /></td>
                    </tr>
                </table>
            <?php endforeach; ?>
            <p class="submit">
                <input type="submit" name="save_kurs" class="button-primary" value="Save Changes" />
            </p>
        </form>
    </div>
    <?php
}

// Shortcode untuk menampilkan kurs
add_shortcode('kurs', 'kurs_widget');
function kurs_widget($atts) {
    $parm = shortcode_atts(array('currency' => 'USD,SAR,EUR,IDR,SGD'), $atts);
    $params = explode(',', $parm['currency']);

    // Mengambil kurs dari database
    $kurs = get_option('simple_kurs_rates', [
        'IDR' => ['jual' => 16000, 'beli' => 15800, 'tanggal_update' => '2024-08-08'],
        'USD' => ['jual' => 15000, 'beli' => 14900, 'tanggal_update' => '2024-08-08'],
        'SAR' => ['jual' => 4000, 'beli' => 3900, 'tanggal_update' => '2024-08-08'],
        'EUR' => ['jual' => 16000, 'beli' => 15800, 'tanggal_update' => '2024-08-08'],
        'SGD' => ['jual' => 16000, 'beli' => 15800, 'tanggal_update' => '2024-08-08'],
    ]);

    $label_matauang = 'Mata Uang';
    $label_jual = 'Jual';
    $label_beli = 'Beli';

    $output = '<div style="width:100%" class="table-responsive">
        <table class="table-kurs table table-striped table-condensed" style="width:100%; background: transparent; height: 55px;" cellpadding="0" cellspacing="0">
            <thead>
                <tr style="background-color: #F4A506; color: #FFF; height: 55px;">
                    <th style="padding:10px;">' . $label_matauang . '</th>
                    <th style="padding:10px;">' . $label_jual . '</th>
                    <th style="padding:10px;">' . $label_beli . '</th>
                </tr>
            </thead>
            <tbody>';

    foreach ($params as $currency) {
        $currency = trim(strtoupper($currency));
        if (isset($kurs[$currency])) {
            $output .= '<tr style="height: 55px; color: #FFF;">';
            $output .= '<td style="padding:10px; border-bottom:1px solid #FFF">' . $currency . ' <img width="16px" src="' . plugin_dir_url(__FILE__) . 'images/' . strtolower($currency) . '.png"></td>';
            $output .= '<td style="padding:10px; border-bottom:1px solid #FFF"> IDR ' . number_format($kurs[$currency]['jual']) . '</td>';
            $output .= '<td style="padding:10px; border-bottom:1px solid #FFF"> IDR ' . number_format($kurs[$currency]['beli']) . '</td>';
            $output .= '</tr>';
        }
    }

    $output .= '</tbody></table><br>';
    $output .= '<small style="color:#FFF">&nbsp;&nbsp;Data Updated on : ' . strftime('%A, %d %B %Y', strtotime($kurs['USD']['tanggal_update'])) . '</small></div>';

    return $output;
}
?>
