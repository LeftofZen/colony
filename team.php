<?php $page = "team"; ?>
<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<div role="tabpanel">

	<h2>Players</h2>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#2015" aria-controls="home" role="tab" data-toggle="tab">2015</a></li>
    <li role="presentation"><a href="#2014" aria-controls="profile" role="tab" data-toggle="tab">2014</a></li>
    <li role="presentation"><a href="#2013" aria-controls="messages" role="tab" data-toggle="tab">2013</a></li>
    <li role="presentation"><a href="#2012" aria-controls="settings" role="tab" data-toggle="tab">2012</a></li>
    <li role="presentation"><a href="#2011" aria-controls="settings" role="tab" data-toggle="tab">2011</a></li>
    <li role="presentation"><a href="#2010" aria-controls="settings" role="tab" data-toggle="tab">2010</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="2015">
      <?php $year = 2015; ?>
      <?php include("includes/year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2014">
      <?php $year = 2014; ?>
      <?php include("includes/year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2013">
      <?php $year = 2013; ?>
      <?php include("includes/year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2012">
      <?php $year = 2012; ?>
      <?php include("includes/year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2011">
      <?php $year = 2011; ?>
      <?php include("includes/year_roster.php"); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="2010">
      <?php $year = 2010; ?>
      <?php include("includes/year_roster.php"); ?>
    </div>
  </div>

</div>

<?php include("includes/footer.php"); ?>