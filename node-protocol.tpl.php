<div id="node-<?php print $node->nid; ?>" class="protocol clear-block">
<?php if (!$page): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>
  <div class="right"><div>By <?php print protocol_format_users($field_authors); ?></div></div>

  <div class="section">
    <div class="right">
      <h2>Introduction</h2>
      <div>
        <?php print $field_introduction[0]['safe']; ?>
      </div>
    </div>
  </div>

  <div class="section section-reagent">
    <div class="right">
      <h2>What You'll Need</h2>
      <div>
        <?php foreach ($field_reagents as $reagent): ?>
          <div class="reagent"><?php print $reagent['safe']; ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <?php $counter = 1; foreach ($field_steps as $row): ?>
    <div class="section">
      <div class="right">
        <h2>Step <?php print $counter++; ?></h2>
        <div>
          <?php print $row['safe']; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <?php print $links; ?>
</div>