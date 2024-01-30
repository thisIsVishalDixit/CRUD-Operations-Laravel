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
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
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
   
    <div align="center">
        <form action="<?php echo e(url('upload')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>          <!--for upload data in database use for security reason -->
             <div style="padding: 10px;">
                <label >Name</label>
                <input type="text" name="name">
             </div>
             <div style="padding: 10px;">
                <label >Email</label>
                <input type="email" name="email">
             </div>
             <div style="padding: 10px;">
                <label >Image</label>
                <input type="file" name="file">
             </div>
             <div style="padding: 10px;">
                <input type="submit">
             </div>

             
        
        </form>
    </div>

   



</body>
</html><?php /**PATH C:\Users\vishal dixit\OneDrive\Desktop\Laravel CRUD Operations\laravelProject\resources\views/home.blade.php ENDPATH**/ ?>