<?php
require 'mysql.php';

class PersonalWorkOffTracker {
    private $conn;

    public function __construct() {
        $this->conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }

    public function addRecord($arrived_at, $leaved_at) {
        $arrived_at_dt = new DateTime($arrived_at);
        $leaved_at_dt = new DateTime($leaved_at); 

        $interval = $arrived_at_dt->diff($leaved_at_dt);
        $hours = $interval->h + ($interval->days * 24);
        $minutes = $interval->i;

        $required_work_off = sprintf('%02d:%02d:00', $hours, $minutes);

        $sql = "INSERT INTO vaqt (arrived_at, leaved_at, required_work_off) VALUES (:arrived_at, :leaved_at, :required_work_off)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':arrived_at', $arrived_at);
        $stmt->bindParam(':leaved_at', $leaved_at);
        $stmt->bindParam(':required_work_off', $required_work_off);

        $stmt->execute();
    }

    public function fetchRecords($page_id) {
        $offset = ($page_id - 1) * 5;
        $sql = "SELECT * FROM vaqt ORDER BY id DESC LIMIT $offset, 5";
        $result = $this->conn->query($sql);
        $total_hours = 0;
        $total_minutes = 0;

        if ($result->rowCount() > 0) {
            echo '<form action="" method="post">';
            echo '<table class="table table-striped">';
            echo '<thead class="table-dark"><tr><th>#</th><th>Arrived at</th><th>Leaved at</th><th>Required work off</th><th>Worked off</th></tr></thead>';
            echo '<tbody>';
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $worked_off_class = $row["worked_off"] ? 'class="worked-off"' : '';
                echo "<tr $worked_off_class>";
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["arrived_at"] . '</td>';
                echo '<td>' . $row["leaved_at"] . '</td>';
                echo '<td>' . $row["required_work_off"] . '</td>';
                echo '<td><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#confirmModal" data-id="' . $row["id"] . '">Done</button></td>';
                echo '</tr>';

                if (!$row["worked_off"]) {
                    list($hours, $minutes, $seconds) = explode(':', $row["required_work_off"]);
                    $total_hours += (int)$hours;
                    $total_minutes += (int)$minutes;
                }
            }
            $total_hours += floor($total_minutes / 60);
            $total_minutes = $total_minutes % 60;

            echo '<tr><td colspan="4" class="text-end fw-bold">Total work off hours</td><td>' . $total_hours . ' hours and ' . $total_minutes . ' min.</td></tr>';
           
        }}}