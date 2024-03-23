<?php
    // Check if a file was submitted
    if (isset($_POST["submit"])) {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "workload"; 

        try {
            // Create a PDO connection with UTF-8 character set
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Check if the file is a CSV file
            if ($_FILES["fileToUpload"]["error"] == 0 && $_FILES["fileToUpload"]["type"] == "text/csv") {
                $csvFile = $_FILES["fileToUpload"]["tmp_name"];

                // Prepare a SQL statement to insert data into MySQL table (assuming a table called 'your_table_name')
                $stmt = $conn->prepare("INSERT INTO subject (id, subject_code, subject_nameTH, subject_nameEN, term_period, year_period, sid_cross, setpoint, unit_total, unit_lecture, unit_workshop) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ?)");

                if (($handle = fopen($csvFile, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        // Bind parameters and execute the statement for each row of CSV data
                        $stmt->execute($data);
                    }
                    fclose($handle);
                }

        echo "<script type='text/javascript'>";
        echo"alert('อัพโหลดเรียบร้อยแล้ว');";
        echo"window.location = '../subject.php';";
        echo "</script>";
        }else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม      
        echo "<script type='text/javascript'>";
        echo "alert('เกิดข้อผิดพลาด กรุณาติดต่อ Admin !!!!');";
        echo"window.location = '../subject.php'; ";
        echo"</script>";
        }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
    }
    ?>