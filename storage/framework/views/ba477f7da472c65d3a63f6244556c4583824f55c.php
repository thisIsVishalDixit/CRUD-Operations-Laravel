<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 16px;
        }

        input[type="file"] {
            width: 100%;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- <h1>Update Page</h1>
    <?php echo e($student->name); ?>

    <?php echo e($student->email); ?>

    <img src="/student/<?php echo e($student->image); ?>" alt=""> -->

    <form action="<?php echo e(url('update',$student->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div>
            <label for="">Student Name : </label>
            <input type="text" name="name" value="<?php echo e($student->name); ?>">
        </div>
        <div>
            <label for="">Student Email : </label>
            <input type="email" name="email" value="<?php echo e($student->email); ?>">
        </div>
        <div>
            <label for="">Old Image : </label>       
            <img height="150" width="150" src="/student/<?php echo e($student->image); ?>" alt="">
        </div>

        <div>
            <label for="">Change the image : </label>       
            <input type="file" name="file">
        </div>

        <div>
            <input type="submit" value="update">
        </div>
    </form>

</body>
</html><?php /**PATH C:\Users\vishal dixit\OneDrive\Desktop\Desktop Item\Thapa\Laravel CRUD Operations\laravelProject\resources\views/update_page.blade.php ENDPATH**/ ?>