<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="shortcut icon" href="<?= $this->getAsset('opis-colibri/system', 'img/favicon.png') ?>">
        <link rel="stylesheet" href="<?= $this->getAsset('opis-colibri/system', 'css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= $this->getAsset('opis-colibri/system', 'css/font-awesome.min.css') ?>">
        <style>
            body{
                background: #fefefe;
                color: #333;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            .blue-text{
                color: #00b5c2;
            }
            .gray-text{
                color: #555;
            }
            .right-align{
                text-align: right;
            }
            
            hr{
                border:0px;
                border-bottom:1px #ddd solid;
            }
        </style>
        <script src="<?= $this->getAsset('opis-colibri/system', 'js/jquery-1.x.min.js');?>"></script>
        <script src="<?= $this->getAsset('opis-colibri/system', 'js/bootstrap.min.js');?>"></script>
    </head>
    <body>
        <div class="center-block" style="width: 720px; margin-top: 180px">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= $this->getAsset('opis-colibri/system', 'img/opis-colibri.png');?>">
                </div>
                <div class="col-md-6">
                    <h1 class="blue-text">
                        <strong>Hello, World!</strong>
                    </h1>
                    <h3 class="gray-text left-align">This page was generated by the <strong class="blue-text">welcome</strong> module</h3>
                    <hr>
                    <span style="color: #999">
                        The page's sole purpose is to prevent a <strong class="blue-text">404</strong> error
                    </span>
                </div>
            </div>
        </div>
        
    </body>
</html>