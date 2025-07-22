<?php
session_start(); // 🔐 Session to store students permanently

// --- Student Class ---
class Student
{
    public $name;
    public $age;
    public $grade;

    public function __construct($name, $age, $grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }
}

// --- StudentManager Class ---
class StudentManager
{
    private $students = [];
    

    public function __construct($students = [])
    {
        $this->students = $students;
    }

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function searchStudent($keyword)
    {
        return array_filter($this->students, function ($student) use ($keyword) {
            return stripos($student->name, $keyword) !== false;
        });
    }

    public function deleteStudent($index)
    {
        if (isset($this->students[$index])) {
            unset($this->students[$index]);
            $this->students = array_values($this->students);
        }
    }

    public function saveToSession()
    {
        $_SESSION['students'] = serialize($this->students);
        print_r($_SESSION['students']); // Debugging line to see session data
        
    }

    public static function loadFromSession()
    {
        return isset($_SESSION['students']) ? unserialize($_SESSION['students']) : [];
    }
}

// --- Load existing students from session ---
$manager = new StudentManager(StudentManager::loadFromSession());

// --- Add student from form ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $manager->addStudent(new Student($name, $age, $grade));
    $manager->saveToSession();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// --- Delete logic ---
if (isset($_GET['delete'])) {
    $manager->deleteStudent((int) $_GET['delete']);
    $manager->saveToSession();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// --- Search logic ---
$students = isset($_GET['search']) ? $manager->searchStudent($_GET['search']) : $manager->getStudents();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Management System - PHP OOP</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
            background-color: #f0f0f0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #888;
            text-align: left;
        }

        th {
            background: #4CAF50;
            color: white;
        }

        .form-box,
        .search-box {
            margin-bottom: 20px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
        }

        .form-box input,
        .search-box input {
            padding: 8px;
            margin: 5px;
            width: 30%;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            background: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .btn.delete {
            background: red;
        }
    </style>
</head>

<body>

    <h2>🎓 Student Management System (PHP OOP)</h2>

    <!-- 🔍 Search Box -->
    <div class="search-box">
        <form method="GET">
            <input type="text" name="search" placeholder="Search by name..."
                value="<?php echo $_GET['search'] ?? ''; ?>">
            <button class="btn">Search</button>
        </form>
    </div>

    <!-- ➕ Add Student Form -->
    <div class="form-box">
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="grade" placeholder="Grade" required>
            <button type="submit" name="add" class="btn">Add Student</button>
        </form>
    </div>

    <!-- 📋 Student Table -->
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th>Action</th>
        </tr>
        <?php
        if (empty($students)) {
            echo "<tr><td colspan='5'>No students found.</td></tr>";
        } else {
            foreach ($students as $index => $student) {
                echo "<tr>
                <td>" . ($index + 1) . "</td>
                <td>{$student->name}</td>
                <td>{$student->age}</td>
                <td>{$student->grade}</td>
                <td><a href='?delete=$index'><button class='btn delete'>Delete</button></a></td>
            </tr>";
            }
        }
        ?>
    </table>

</body>

</html>