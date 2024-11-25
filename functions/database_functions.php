<?php
require_once __DIR__ . '/../config/db_connect.php';
function getRoomDetails() {
    global $db;
    try {
        $query = "
            SELECT
                room_number,
                price,
                photo
            FROM rooms
            ORDER BY id ASC
        ";
        $stmt = $db->query($query);
        return $stmt->fetchAll();
    } catch(Exception $e) {
        error_log($e->getMessage());
        return [];
    }
}


function getEventDetails() {
    global $db;
    try {
        $query = "
            SELECT
                event_topic,
                short_details,
                image
            FROM events
            ORDER BY id ASC
        ";
        $stmt = $db->query($query);
        return $stmt->fetchAll();
    } catch(Exception $e) {
        error_log($e->getMessage());
        return [];
    }
}

?>