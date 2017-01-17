<?
    const TITLE = 'webStarter - A website boilerplate';
    const DESC = 'webStarter is a website boilerplate. No need to setup up everything yourself. Download it and start creating websites faster';
    const CSS = ['index.css'];
    const JS = ['index.js'];
    include('layout/header.php');
?>

<!-- Content here -->
<div class="info-box">
    <h1>Welcome to WebStarter</h1>
    <h2>A PHP website boilerplate</h2>
    <p>
        By downloading webStarter you will get a free starter project for your next website.
        webStarter includes site structure, files and Gulp packages.
    </p>
    <a class="download" href="download/webStarter.zip" target="_blank">Download webStarter</a>
</div>

<? include('layout/footer.php') ?>
