

        <?php
        include('./header.php');
        include('./sidebar.php');
        ?>
        <!-- Main Content -->
        <div class="main-content">
            <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
            <p>This is your dashboard. You can view your details and manage your settings.</p>
            <div class="stats">
                <div class="stat-box">
                    <h3>New Messages</h3>
                    <p>0</p>
                </div>
                <div class="stat-box">
                    <h3>Tasks Completed</h3>
                    <p>15</p>
                </div>
                <div class="stat-box">
                    <h3>Notifications</h3>
                    <p>3</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>