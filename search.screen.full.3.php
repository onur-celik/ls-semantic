<?php include "header.php"; ?>
<?php include "logsign.top.header.php"; ?>

<div class="ui grid" style="margin:0px; margin-top:0px !important;">
    <div class="ui ten wide column">
        <!-- 
            ### SEARCH BAR
        -->
        <div class="ui segment">
        <button class="ui compact mini labeled icon green button">
                <i class="arrow down icon"></i>
                Search Help
            </button>

            <button class="ui compact violet mini labeled icon button">
                <i class="arrow down icon"></i>
                Quick Analysis
            </button>
            <button class="ui compact blue mini labeled icon button">
                <i class="calendar icon"></i>
                <strong>2016-10-25 00:00</strong> to <strong>2016-10-26 23:59</strong>
            </button>
            <br><br>
            <div class="ui fluid big action input">
                <input type="text" placeholder="Type your search term...">
                <div type="submit" class="ui blue button" id="search_btn">
                    <i class="search icon"></i>
                    Search
                </div>
            </div>
            <!-- <small>
                <i class="info icon"></i>
                <strong>1234</strong> events between <strong>2016-10-25 00:00</strong> and <strong>2016-10-26 23:59</strong>
            </small>
            <br><br> -->

            
        </div>
        
        <!-- 
            ### SEARCH RESULTS
        -->
        <small>
            <strong>123,456</strong> results between <strong>2016-10-25 00:00</strong> and <strong>2016-10-26 23:59</strong>
        </small>
        <div id="search_results">
            <div class="ui inverted dimmer">
                <div class="ui text loader">Loading</div>
            </div>
            <?php include "search-results.php"; ?>
        </div><!-- SEARCH RESULTS / end-->

    </div> <!-- LEFT / end-->

    <div class="three wide column hide_on_details">
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
    </div> <!-- CENTER / end-->

    <div class="three wide column hide_on_details">
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

    <div class="six wide column" id="show_on_details">
        <div class="ui segment" id="details_container">
            <h4 class="header">
                Row Details
            </h4>
            <p>
                Source.IP : 10.0.1.34
                <br>
                Source.Port : 8080
                <br>
                Source.UserName : onurcelik
                <br>

            </p>
        </div>
    </div>

</div> <!-- UI GRID / end -->

<style>
    body {
        background-color:#f2f2f2;
    }
    #show_on_details
    {
        display: none;
    }
</style>

<script>
    $(function(){
        $('.search_filter .title').on('click', function(){
            $('.search_filter_column_name').text($(this).data('column-name'));
        });

        $('.ui.sticky').sticky({offset:10});

        $('#sub_filter input[type="checkbox"]').on('change', function(){
            $('#search_results').dimmer('show');
            setTimeout(function(){
                $('#search_results').dimmer('hide');
            }, 2000);
        });

        $('#search_btn').on('click', function(){
            $('#search_results').dimmer('show');
            setTimeout(function(){
                $('#search_results').dimmer('hide');
            }, 2000);
        });

        $('#search_results .ui.segment').on('click', function(){
            $('.hide_on_details').hide();
            $('#show_on_details').show();
            $('#details_container').sticky({
                observeChanges : true,
                onStick : function(){
                    //
                }
            });
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