<?php 

use luya\helpers\Html;

?>
<?php if ($isGuest): ?>
<p>You are not logged in. <?= Html::a('Login', ['login']); ?> or <?= Html::a('register', ['signup']); ?></p>
<?php else: ?>
<p>You are logged in.</p>
<?php endif; ?>