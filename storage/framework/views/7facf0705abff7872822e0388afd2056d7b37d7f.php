<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="search"] {
            padding: 10px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        a:hover {
            color: #2980b9;
        }

        button {
            background-color: #27ae60;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #219d54;
        }
    </style>
</head>
<body>
    <h1>Display database from database in laravel..</h1>
    

    <!--For search data in display Table -->
    <form action="<?php echo e(url('search')); ?>" method="get" align="center">
        <input type="search" name="search" placeholder="Search for something">
        <input type="submit" value="search">

    </form><br><br>
    <!--For search data in display Table -->

    <table border="1px" align="center">
        <tr>
            <td>Student name</td>
            <td>Email</td>
            <td>Image</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>          <!-- table_column_name -->
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->email); ?></td>
            <td>
                <img height="150" width="150" src="student/<?php echo e($student->image); ?>" alt="">
            </td>

            <td>
                <a href="<?php echo e(url('delete',$student->id)); ?>">Delete</a>

            </td>

            <td>
                <a href="<?php echo e(url('update_view',$student->id)); ?>">Update</a>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <button onclick="location.href='<?php echo e(url('/home')); ?>'">Insert</button><br><br><br>

</body>
</html><?php /**PATH C:\Users\vishal dixit\OneDrive\Desktop\Laravel CRUD Operations\laravelProject\resources\views/display.blade.php ENDPATH**/ ?>