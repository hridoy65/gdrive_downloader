<?php
if (isset($_POST['generate'])) {
    $drive_url = $_POST['drive_url'];
    $file_id = extractFileId($drive_url);

    if ($file_id) {
        // Set custom headers using stream context
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => "Origin: https://drive.google.com\r\n" .
                            "Referer: https://drive.google.com/\r\n" .
                            "User-Agent: Mozilla/5.0 (Linux; Android 13; RMX3461) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.153 Mobile Safari/537.36\r\n"
            ]
        ];

        // Create stream context with custom headers
        $context = stream_context_create($options);

        $download_link = "https://drive.google.com/uc?id=$file_id&export=download&confirm=t";
        $file_contents = file_get_contents($download_link, false, $context);

        if ($file_contents !== false) {
            $response_headers = $http_response_header;
            foreach ($response_headers as $header) {
                if (strpos($header, 'Content-Disposition:') === 0) {
                    header($header);
                    break;
                }
            }

            header('Content-Type: application/octet-stream');
            echo $file_contents;
            exit();
        } else {
            echo '<p>Failed to fetch the file content from Google Drive.</p>';
        }
    } else {
        echo '<p>Invalid Google Drive sharing URL. Please check the URL and try again.</p>';
    }
}

function extractFileId($drive_url) {
    $matches = array();
    if (preg_match('/\/file\/d\/([^\/]+)/', $drive_url, $matches)) {
        return $matches[1];
    } elseif (preg_match('/\/file\/([^\/]+)/', $drive_url, $matches)) {
        return $matches[1];
    } else {
        return null;
    }
}
?>
