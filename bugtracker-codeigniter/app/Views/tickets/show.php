<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h3>#<?= esc($ticket['id']) ?> — <?= esc($ticket['title']) ?></h3>
<p><strong>Status:</strong> <?= esc($ticket['status']) ?> | <strong>Severity:</strong> <?= esc($ticket['severity']) ?></p>
<hr>
<p style="white-space:pre-wrap"><?= esc($ticket['description']) ?></p>
<?= $this->endSection() ?>
