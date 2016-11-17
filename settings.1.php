<?php include "header.php"; ?>
<?php include "logsign.top.header.php"; ?>
<br>
<div class="ui grid">
<div class="ui sixteen wide column">
<!-- TABS -->
<div id="context1">
    <div class="ui pointing secondary menu">
        <a class="item active" data-tab="data_input">Data Input</a>
        <a class="item" data-tab="general_settings">General Settings</a>
        <a class="item" data-tab="delegation">Delegation</a>
        <a class="item" data-tab="data_management">Data Management</a>
        <a class="item" data-tab="license">License</a>
    </div>
    <div class="ui tab segment active" data-tab="data_input">
        <div class="ui grid">
            <div class="three wide column">
                <div class="ui vertical fluid tabular menu">
                    <a class="item active">Device List</a>
                    <a class="item">Pending Agents</a>
                    <a class="item">Position Services</a>
                    <a class="item">Fieldsets</a>
                    <a class="item">Mini Queries</a>
                    <a class="item">Location Services</a>
                    <a class="item">Modifiers</a>
                    <a class="item">Data Policies</a>
                    <a class="item">Log Capture Tool</a>
                    <a class="item">Data Connections</a>
                    <a class="item">Update Libary</a>
                    <a class="item">Tags</a>
                </div>
            </div>
            <div class="thirteen wide stretched column">
                <?php include "parts/forms/grid.php"; ?>
            </div>
        </div>
    </div>
    <div class="ui tab segment" data-tab="general_settings">
        <div class="ui grid">
            <div class="three wide column">
                <div class="ui vertical fluid tabular menu">
                    <a class="item active">Network Settings</a>
                    <a class="item">Date & Time Settings</a>
                    <a class="item">System Users</a>
                    <a class="item">Secure Access</a>
                    <a class="item">Custom Action Devices</a>
                    <a class="item">Status</a>
                    <a class="item">Health Check Notifications</a>
                    <a class="item">Cluster</a>
                    <a class="item">Cluster Stats</a>
                    <a class="item">Remote Support</a>
                    <a class="item">Config Backup</a>
                    <a class="item">Index Backup</a>
                    <a class="item">Ldap Settings</a>
                    <a class="item">Demo Mode</a>
                </div>
            </div>
            <div class="thirteen wide stretched column">
                <?php include "parts/forms/grid.php"; ?>
            </div>
        </div>
    </div>
    
    <div class="ui tab segment" data-tab="delegation">
        <div class="ui grid">
            <div class="three wide column">
                <div class="ui vertical fluid tabular menu">
                    <a class="item active">UI Permissions</a>
                    <a class="item">User Management</a>
                    <a class="item">Mail Settings</a>
                    <a class="item">Sms Settings</a>
                    <a class="item">Report Profiles</a>
                    <a class="item">Alarm Profiles</a>
                    <a class="item">Dashboard Profiles</a>
                    <a class="item">Interface Profiles</a>
                    <a class="item">Source Profiles</a>
                    <a class="item">Profile Groups</a>
                </div>
            </div>
            <div class="thirteen wide stretched column">
                <?php include "parts/forms/grid.php"; ?>
            </div>
        </div>
    </div>

    <div class="ui tab segment" data-tab="data_management">
        <div class="ui grid">
            <div class="three wide column">
                <div class="ui vertical fluid tabular menu">
                    <a class="item active">Logsign Audit Logs</a>
                    <a class="item">Logsign Events</a>
                    <a class="item">Signed Logs</a>
                    <a class="item">Archived Logs</a>
                    <a class="item">Sign Settings</a>
                    <a class="item">Certificates</a>
                    <a class="item">Index Management</a>
                    <a class="item">Data Management</a>
                    <a class="item">Ftp Settings</a>
                    <a class="item">Company Settings</a>
                    <a class="item">EPS Stats</a>
                </div>
            </div>
            <div class="thirteen wide stretched column">
                <?php include "parts/forms/grid.php"; ?>
            </div>
        </div>
    </div>

    <div class="ui tab segment" data-tab="license">
        <div class="ui grid">
            <div class="three wide column">
                <div class="ui vertical fluid tabular menu">
                    <a class="item active">License Management</a>
                </div>
            </div>
            <div class="thirteen wide stretched column">
                <?php include "parts/forms/grid.php"; ?>
            </div>
        </div>
    </div>
</div>
<!-- TABS / end -->
</div>
</div>





<script>
    $(function(){
        $('#context1 .menu .item').tab({
            context: $('#context1')
        });
    });
</script>

<style>
    body {
        background-color:#f2f2f2;
    }
</style>