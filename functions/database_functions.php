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
function getTourismDetails() {
    global $db;
    try {
        $query = "
            SELECT
                title,
                photo,
            FROM tourism
            ORDER BY id ASC
            LIMIT 6
        ";
        $stmt = $db->query($query);
        $result = $stmt->fetchAll();
        echo "Hasil query: ";
        print_r($result);
        return $result;
    } catch(Exception $e) {
        error_log($e->getMessage());
        return [];
    }
}


function getRoomByRoomNumber($room_number) {
    global $db;
    try {
        $query = "
            SELECT
                id,
                room_number,
                price,
                photo, 
                facility1, 
                facility2,
                facility3,
                facility4,
                facility5,
                details
            FROM rooms
            WHERE room_number = :room_number
        ";
        $stmt = $db->prepare($query); // Gunakan prepared statement untuk keamanan
        $stmt->bindParam(':room_number', $room_number, PDO::PARAM_STR); // Bind parameter room_number
        $stmt->execute();
        return $stmt->fetch(); // Ambil satu baris saja
    } catch(Exception $e) {
        error_log($e->getMessage());
        return null; // Kembalikan null jika ada kesalahan
    }
}



?>