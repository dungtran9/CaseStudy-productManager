
<body>
<form method="post">
    <table class="table table-hover col-12 col-md-6">
        <tr>
            <th>ID:</th>
            <td><input type="text" name="id" disabled required autofocus class="col-12" value="<?php echo $customer['id'] ?>"></td>
        </tr>
        <tr>
            <th>Name:</th>
            <td><input type="text" name="name" required autofocus class="col-12" value="<?php echo $customer['name'] ?>"></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><input type="text" name="phone" required autofocus class="col-12" value="<?php echo $customer['phone'] ?>"></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><input type="text" name="email" required autofocus class="col-12" value="<?php echo $customer['email'] ?>"></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><input type="text" name="address" required autofocus class="col-12" value="<?php echo $customer['address'] ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-success">Update</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

