click here to reset your password: <br>
<a href="<?php echo e($link=url('password/reset', $token).'?email='.urlencode( $user->getEmailForPasswordReset() )); ?>"><?php echo e($link); ?></a>