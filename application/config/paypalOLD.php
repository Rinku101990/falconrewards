<?php
/** set your paypal credential **/

$config['client_id'] = 'AYSq3RDGsmBLJE-otTkBtM-jBRd1TCQwFf9RGfwddNXWz0uFU9ztymylOhRS';
$config['secret'] = 'EGnHDxD_qRPdaLdZz8iCr8N7_MzF-YHPTkjs6NKYQvQSBngp4PTTVWkPZRbL';

// $config['client_id'] = 'AVBVOdAzDzz4PRgGqc7cOEeeM9F5_Tp7IYQ-OEkHZAnGLQ4Kq5DWdQiVh4WA7TrO_-WLHYs-ic8AHScU';
// $config['secret'] = 'EOpy6e47hBka3u-0EvAvaQ8MKbU4mbG6DapTbmhraDwK8aGjbHVb8VN23cf0tJEYvYaPQvk167W_r1Md';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);
