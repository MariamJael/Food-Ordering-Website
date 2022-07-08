    <!-- Menu -->
    <?php include('partials/menu.php') ?>

    <!-- Main Section Starts -->
    <div class="main-content">
        <div class="wrapper">
           <h1>Manage Admin</h1>   

           <!-- Table Section Starts -->
           <br/> <br/>
           <!-- Button to add Admin -->
           <a href="add-admin.php" class="btn-primary">Add Admin</a>
           <br/> <br/> <br/>

           <table class="tbl-full">
              <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
              </tr>

              <tr>
                <td>1.</td>
                <td>Mariam Lopez</td>
                <td>mimi</td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
              </tr>

              <tr>
                <td>2.</td>
                <td>Mariam Lopez</td>
                <td>mimi</td>
                <td>
                <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
              </tr>

              <tr>
                <td>3.</td>
                <td>Mariam Lopez</td>
                <td>mimi</td>
                <td>
                <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
              </tr>
           </table> 
           <!-- Table Section Ends -->
        </div>   
    </div>
    <!-- Main Section Ends -->

    <!-- Footer -->
    <?php include('partials/footer.php'); ?>

</body>
</html>
