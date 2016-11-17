<div class="ui grid">
    <div class="ui row">
        <div class="column">
            <div class="ui tiny menu">
                <div class="item">
                    <img src="assets/images/logsign-logo.png" style="width: 100px;">
                </div>
                <div class="ui dropdown item">
                    <i class="dashboard icon"></i>
                    Dashboard
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item" href="dashboard.1.php?hidecontainer=true?module=dashboard">Dashboard List</a>
                        <a class="item">Add New Dashboard</a>
                        <a class="item">Add New Dashboard Category</a>
                    </div>
                </div>
                <a class="item" href="search.screen.full.3.php?hidecontainer=true&module=search">
                    <i class="search icon"></i>
                    Search
                </a>
                <div class="ui dropdown item">
                    <i class="newspaper icon"></i>
                    Reports
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item">Report List</a>
                        <a class="item">Scheduled Reports</a>
                        <a class="item">Exported Reports</a>
                        <a class="item">Install Reports</a>
                    </div>
                </div>
                <div class="ui dropdown item">
                    <i class="bell icon"></i>
                    Alerts
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item">Alerts</a>
                        <a class="item">Alert Rules</a>
                        <a class="item">Assets and Behaviours</a>
                    </div>
                </div>
                <a class="item">
                    <i class="wifi icon"></i>
                    Hotspot
                </a>  
                <div class="right menu">
                    <div class="item">
                        <div class="ui green button">
                            <i class="info circle icon"></i>
                            Support
                        </div>
                    </div>
                    <div class="item">
                        <i class="hashtag icon"></i>
                        v. 4.4.447
                    </div>
                    <div class="ui dropdown item">
                        <i class="male icon"></i>
                        Admin <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item">Change Password</a>
                            <a class="item">Change User Information</a>
                            <a class="item">Logout</a>
                        </div>
                    </div>
                    <div class="ui dropdown item">
                        <i class="setting icon"></i>
                        Settings <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item" href="settings.1.php?hidecontainer=true&module=settings">Data Input</a>
                            <a class="item">General Settings</a>
                            <a class="item">Delegation</a>
                            <a class="item">Data Management</a>
                            <a class="item">License</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui mini segment" style="margin-top:-15px !important;">
                <div class="ui equal width grid">
                    <div class="column">
                        <div class="ui text shape">
                            <div class="sides">
                                <div class="ui header side active"><span class="ui grey empty circular mini label"></span> 213.523.645 events occured on your network...</div>
                                <div class="ui header side"><span class="ui blue empty circular mini label"></span> 527 Facebook login attemps...</div>
                                <div class="ui header side"><span class="ui red empty circular mini label"></span> 15 Emergency events...</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column center aligned">
                        <h4>
                        <?php  
                            switch($_GET['module'])
                            {
                                case "search":
                                    echo '<i class="search icon"></i>';
                                    echo "Search";
                                break;

                                case "settings":
                                    echo '<i class="setting icon"></i>';
                                    echo "Settings";
                                break;
                            }
                        ?>
                        </h4>
                    </div>

                    <div class="column right aligned">
                        <div class="ui mini label">
                          2,204
                          <div class="detail">Events</div>
                        </div>
                        <div class="ui red mini label">
                          123,456
                          <div class="detail">Requests From Russia</div>
                        </div>
                        <div class="ui mini red label">
                          87%
                          <div class="detail">Disc Space</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        var circleInt = setInterval(function() {
            $('.shape').shape('flip up');
        }, 6000);
    });
</script>