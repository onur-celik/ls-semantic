<?php include "header.php"; ?>


<div class="ui top attached demo menu">
  <a class="item">
    <i class="sidebar icon"></i>
  </a>
  <span class="item">
    <h3>Dashboard</h3>
  </span>
</div>
<div class="ui bottom attached segment pushable">
  <div class="ui inverted labeled icon left inline vertical sidebar menu">
    <a class="item">
      <i class="home icon"></i>
      Home
    </a>
    <a class="item">
      <i class="block layout icon"></i>
      Topics
    </a>
    <a class="item">
      <i class="smile icon"></i>
      Friends
    </a>
    <a class="item">
      <i class="calendar icon"></i>
      History
    </a>
  </div>
  <div class="pusher">
    <div class="ui basic segment">
      <h3 class="ui header">Application Content</h3>
      <p>asdasd</p>
      <p>sfgdgsdg</p>
      <p>asdasdasd</p>
      <p>dfgdfgdfg</p>
    </div>
  </div>
</div>
<script>
$(function(){
  $('.ui.sidebar')
    .sidebar({
      context: $('.bottom.segment')
    })
    .sidebar('attach events', '.menu .item');
  });
</script>