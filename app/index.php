<?php
    const TITLE = 'webStarter - A website boilerplate';
    const DESC = 'webStarter is a website boilerplate. No need to setup up everything yourself. Download it and start creating websites faster';
    const CSS = ['index.css'];
    const JS = ['index.js'];
    include('layout/header.php');
?>

<!-- Content here -->
<div class="info-box">
    <h1>Welcome to WebStarter</h1>
    <h2>A PHP7 website boilerplate</h2>
    <p>
        By downloading webStarter you will get a free starter project for your next website. You will be up and running in no time!
    </p>
    <div class="spacer"></div>
    <p>
        The boilerplate includes:
    </p>
    <ul class="boilerplate-list">
        <li>PHP templating structure</li>
        <li>Useful Gulp tasks</li>
        <li>HTML5</li>
        <li>Jquery</li>
        <li>SVG support</li>
        <li>http2 ready</li>
        <li>svg-system</li>
        <li>And more...</li>
    </ul>
    <a class="download" href="download/webStarter.zip" target="_blank">Download webStarter</a>
</div>

<?php include('layout/footer.php') ?>
