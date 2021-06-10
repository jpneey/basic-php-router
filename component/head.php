<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?= isset($pageTitle) ? $pageTitle : "404 - Page Not Found"; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col">
            <div class="d-block position-relative p-5 text-start shadow bg-white">
                <h1 class="h4">About this script</h1>
                <p>Simple, direct and efficient page router created with just PHP and .htaccess</p>
                <p>All requests are redirected to <code>index.php</code> with the help of the <code>.htaccess</code>.<br>
                The <code>controller/controller.router.php</code> will render the current page<br>(based on the first value of <code>$_SERVER["QUERY_STRING"]</code>).</p>
                <p>This allows us to have pretty urls like <code>wordpress</code></p>
            </div>
        </div>
        <div class="col">
            <div class="d-block position-relative p-5 text-start shadow bg-white">
                <p>Try the following links: </p>
                <a href="<?= BASE_DIR ?>home/" class="btn btn-sm btn-primary px-4 py-2 mb-2 me-1">Home Page</a>
                <a href="<?= BASE_DIR ?>about/" class="btn btn-sm btn-primary px-4 py-2 mb-2 me-1">About Page</a>
                <a href="<?= BASE_DIR ?>a-404-page-or-somethin-random/" class="btn btn-sm btn-primary px-4 py-2 mb-2 me-1">A 404 Page</a>
            </div>
        </div>