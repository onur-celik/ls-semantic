<?php include "header.php"; ?>
<div class="ui grid">
    <div class="ui row">
        <div class="column">
            <div class="ui tiny menu">
                <div class="item">
                    <img src="assets/images/logsign-logo.png" style="width: 100px;">
                </div>
                <div class="ui dropdown item">
                    <i class="dashboard icon"></i>
                    Dashboad
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item">Dashboard List</a>
                        <a class="item">Add New Dashboard</a>
                        <a class="item">Add New Dashboard Category</a>
                    </div>
                </div>
                <a class="active item">
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
                            <a class="item">Data Input</a>
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
                        <h4><i class="search icon"></i> SEARCH</h4>
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









<div class="ui grid" style="margin:0px; margin-top:0px !important;">
    <div class="ui ten wide column">
        <!-- 
            ### SEARCH BAR
        -->
        <div class="ui segment">
            <div class="ui fluid big action input">
                <input type="text" placeholder="Type your search term...">
                <div type="submit" class="ui blue button" id="search_btn">
                    <i class="search icon"></i>
                    Search
                </div>
            </div>
            <small>
                <i class="info icon"></i>
                <strong>1234</strong> events between <strong>2016-10-25 00:00</strong> and <strong>2016-10-26 23:59</strong>
            </small>
            <br><br>
            <button class="ui compact mini labeled icon green button">
                <i class="arrow down icon"></i>
                Search Help
            </button>

            <button class="ui compact violet mini labeled icon button">
                <i class="arrow down icon"></i>
                Quick Analysis
            </button>
        </div>
        
        <!-- 
            ### SEARCH RESULTS
        -->
        <div id="search_results">
            <div class="ui inverted dimmer">
                <div class="ui text loader">Loading</div>
            </div>
            <?php include "search-results.php"; ?>

        </div><!-- SEARCH RESULTS / end-->

    </div> <!-- LEFT / end-->
    <div class="three wide column">
        <div class="ui sticky" id="stickyFilter">
            <h5 class="ui top attached header">
                <i class="filter icon"></i> Filter
            </h5>
            <div class="ui attached segment">
                <div class="search_filter ui styled accordion">
                    <div class="title active" data-column-name="Source.IP">
                        <i class="dropdown icon"></i>
                        Source.IP
                    </div>
                    <div class="content active">
                        <p class="transition visible">
                            <div class="ui fluid input">
                                <input type="text" placeholder="Eg : 10.1.2.3">
                            </div>
                        </p>
                    </div>
                    <div class="title" data-column-name="Destination.Port">
                        <i class="dropdown icon"></i>
                        Destination.Port
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                            <div class="ui fluid input">
                                <input type="text" placeholder="Eg : 10.1.2.3">
                            </div>
                        </p>
                    </div>
                    <div class="title" data-column-name="Event.Info">
                        <i class="dropdown icon"></i>
                        Event.Info
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                            <div class="ui fluid input">
                                <input type="text" placeholder="Eg : 10.1.2.3">
                            </div>
                        </p>
                    </div>
                    <div class="title" data-column-name="Event.Source">
                        <i class="dropdown icon"></i>
                        Event.Source
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                            <div class="ui fluid input">
                                <input type="text" placeholder="Eg : 10.1.2.3">
                            </div>
                        </p>
                    </div>
                    <div class="title" data-column-name="Destination.City">
                        <i class="dropdown icon"></i>
                        Destination.City
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                            <div class="ui fluid input">
                                <input type="text" placeholder="Eg : 10.1.2.3">
                            </div>
                        </p>
                    </div>
                    <div class="title" data-column-name="Destination.Country">
                        <i class="dropdown icon"></i>
                        Destination.Country
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                            <div class="ui fluid input">
                                <input type="text" placeholder="Eg : 10.1.2.3">
                            </div>
                        </p>
                    </div>
                    <div class="title" data-column-name="Source.Port">
                        <i class="dropdown icon"></i>
                        Source.Port
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                            <div class="ui fluid input">
                                <input type="text" placeholder="Eg : 10.1.2.3">
                            </div>
                        </p>
                    </div>
                    <div class="title" data-column-name="Event.Info">
                        <i class="dropdown icon"></i>
                        Event.Info
                    </div>
                    <div class="content">
                        <p class="transition hidden">
                            <div class="ui fluid input">
                                <input type="text" placeholder="Eg : 10.1.2.3">
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- LEFT / end-->
    <div class="three wide column">
        <div class="ui sticky" id="stickyFilter">
            <h5 class="ui top attached header">
                Top Matches For <span class="search_filter_column_name red">Source.Ip</span>
            </h5>
            <div class="ui attached segment" id="sub_filter">
                <div class="ui form">
                    <div class="grouped fields">
                        
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="small">
                                <label>192.168.1.2</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="medium">
                                <label>10.0.1.45</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="large">
                                <label>10.0.4.73</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="x-large">
                                <label>10.0.6.66</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="small">
                                <label>192.168.1.2</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="medium">
                                <label>10.0.1.45</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="large">
                                <label>10.0.4.73</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="x-large">
                                <label>10.0.6.66</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- UI GRID / end -->

<style>
    body {
        background-color:#f2f2f2;
    }
</style>

<script>
    $(function(){
        var circleInt = setInterval(function() {
            $('.shape').shape('flip up');
        }, 6000);

        $('.search_filter .title').on('click', function(){
            $('.search_filter_column_name').text($(this).data('column-name'));
        });

        $('.ui.sticky').sticky({});

        $('#sub_filter input[type="checkbox"]').on('change', function(){
            $('#search_results').dimmer('show');
            setTimeout(function(){
                $('#search_results').dimmer('hide');
            }, 3000);
        });

        $('#search_btn').on('click', function(){
            $('#search_results').dimmer('show');
            setTimeout(function(){
                $('#search_results').dimmer('hide');
            }, 3000);
        });

        //$('#search_results').dimmer('show'); // to show the dimmer {LOADING}
    });
</script>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>