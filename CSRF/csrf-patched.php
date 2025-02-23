//Patched
<form method="post" action="">
        <label for="password">Password:</label>
        <input type="password" id="password" name="current_password" required>

        <label for="confirm_password">ConfirmPassword:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
		<input type="hidden" id="csrf_token" name="csrf_token" value="<?php echo $_COOKIE['csrf-token']; ?>" />
        <button type="submit" name="password_submit" >Update Password</button>
    </form>submit">
</form>
