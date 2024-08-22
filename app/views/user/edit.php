
<h2>Edit User</h2>
<form method="POST">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required>
        <?php if (isset($errors) && in_array('Name is required.', $errors)): ?>
            <div class="error">Name is required.</div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        <?php if (isset($errors)): ?>
            <?php if (in_array('Email is required.', $errors)): ?>
                <div class="error">Email is required.</div>
            <?php elseif (in_array('Email is not valid.', $errors)): ?>
                <div class="error">Email is not valid.</div>
            <?php elseif (in_array('Email already exists.', $errors)): ?>
                <div class="error">Email already exists.</div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <button type="submit">Update</button>
    </div>
</form>
<a href="<?php echo BASE_URL; ?>/users" class="back-link">Back to list</a>


