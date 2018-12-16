 <?php
        if (isset($_POST['logout'])) {
            session_start();
            unset($_SESSION['student_id']);
            unset($_SESSION['student_name']);
            unset($_SESSION['student_branch']);
            unset($_SESSION['subbro']);
            unset($_SESSION['pdf_question']);
            unset($_SESSION['theory_question']);
            unset($_SESSION['quiz_question']);
            session_destroy();
            echo "<script type='text/javascript'> document.location = 'index.html'; </script>";
        }
        ?>