<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal | Users</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="main-con">
        <div class="left-con">
            <div class="user-con">
                <div class="user-info">Admin</div>
            </div>
            <div class="menu-con">
                <a href="home.php">Home</a>
                <a href="course.php">Course Table</a>
                <a href="department.php">Department Table</a>
                <a href="faculty.php">Faculty Table</a>
                <a href="school-year.php">School Year Table</a>
                <a href="student.php">Student Table</a>
                <a href="subject.php">Subject Table</a>
                <a href="user.php" style="background-color: lightblue; border-radius: 7px; color: darkslategray;">User Table</a>
                <a href="logout.php">LOGOUT</a>
            </div>
        </div>
        <div class="right-con">
            <div class="top-nav">
                <div class="brand">STUDENT PORTAL</div>
            </div>
            <div class="body">
                <div class="content-title"><h1>USERS</h1></div>
                <div class="content">
                    <a id="addUserBtn" class="action-button">+ Add New</a>
                    <?php 
                    include("cn.php");
                    $query = mysqli_query($conn, "SELECT * FROM tbl_users");
                    $rows = mysqli_num_rows($query);
                    if ($rows > 0) {
                    ?>
                    <table id="user_table" class="display">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Password</th>
                                <th>Account Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?php echo $data['user_id']; ?></td>
                            <td><?php echo $data['password']; ?></td>
                            <td><?php echo $data['account_type']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                            <td><a href="#" class="edit" data-id="<?php echo $data['user_id']; ?>">Edit</a>
                                <a href="#" class="delete" data-id="<?php echo $data['user_id']; ?>">Delete</a></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="userModal" class="modal">
        <div class="modal-content">
            <span class="close">×</span>
            <h2 id="modalTitle">Add User</h2>
            <form id="userForm">
                <label for="user_id">User ID</label>
                <input type="text" id="user_id" name="user_id" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <label for="account_type">Account Type</label>
                <select id="account_type" name="account_type" required>
                    <option value="">Select Account Type</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="">Select Status</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
                <button type="submit" class="save-btn">Save</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#user_table').DataTable();

            $("#addUserBtn").click(function() {
                $("#modalTitle").text("Add User");
                $("#userForm")[0].reset();
                $("#user_id").val("").prop('readonly', false);
                $("#userModal").show();
            });

            $(".edit").click(function(e) {
                e.preventDefault();
                var user_id = $(this).data("id");
                $.ajax({
                    url: "fetch_user.php",
                    type: "POST",
                    data: { user_id: user_id },
                    dataType: "json",
                    success: function(data) {
                        $("#modalTitle").text("Edit User");
                        $("#user_id").val(data.user_id).prop('readonly', true);
                        $("#password").val(data.password);
                        $("#account_type").val(data.account_type);
                        $("#status").val(data.status);
                        $("#userModal").show();
                    }
                });
            });

            $("#user_table").on("click", ".delete", function(e) {
                e.preventDefault();
                var link = $(this);
                var user_id = link.data("id");
                if (confirm("Are you sure you want to delete this user?")) {
                    $.ajax({
                        url: "delete_user.php",
                        type: "POST",
                        data: { user_id: user_id },
                        success: function(response) {
                            alert(response);
                            if (response.includes("successfully")) {
                                var table = $('#user_table').DataTable();
                                table.row(link.parents('tr')).remove().draw();
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred: " + error);
                        }
                    });
                }
            });

            $(".close").click(function() {
                $("#userModal").hide();
            });

            $(window).click(function(event) {
                if (event.target.id === "userModal") {
                    $("#userModal").hide();
                }
            });

            $("#userForm").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "save_user.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response);
                        $("#userModal").hide();
                        location.reload();
                    }
                });
            });
        });
    </script>
</body>
</html>