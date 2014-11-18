<?php
require 'header.php';
?>

<style type="text/css">
    #console{
        height:500px;
        background:#dcdcdc;
    }
    #instance_information{
        height:200px;
        background:#b92c28;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <!-- Main -->
            <div class="row">
                <div class="col-xs-12" id="information">
                    <div class="row text-center">
                        <div class="col-xs-3">
                            <p class="lead">Load Average</p>
                            <span>10, 10, 10</span>
                        </div>
                        <div class="col-xs-3">
                            <p class="lead">RAM</p>
                        </div>
                        <div class="col-xs-3">
                            <p class="lead">Disk</p>
                        </div>
                        <div class="col-xs-3">
                            <p class="lead">IP</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="help-block">Manage</p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <button class="btn btn-warning">reconfig</button>
                                </div>
                                <div class="col-xs-2">
                                    <button class="btn btn-primary">起動</button>
                                </div>
                                <div class="col-xs-2">
                                    <button class="btn btn-danger">停止</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>config box</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div id="console">
                        <p>console</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="instance_information">
                        <p>information</p>
                        <p class="lead">&bcy; unko</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-spy="affix" data-offset-top="60" data-offset-bottom="200">
    ...
</div>
</body>
</html>